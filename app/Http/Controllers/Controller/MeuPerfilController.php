<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\PerfilUser;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class MeuPerfilController extends Controller
{
    protected $model;
    protected $pag = 'meu_perfil';

    public function __construct(User $user)
    {
        $this->model = $user;
    }
    //Fiz isso ontem terminarei hj
    
    public function index(){
        if ($this->checkUserActive() ==  false){
            return redirect()->route('login');
        }
      
        $nome_completo = explode(' ', Auth::user()->name);
        if (count($nome_completo) >= 2 ){
            $nome_sobrenome = ucfirst($nome_completo[0]). ' ' .ucfirst($nome_completo[count($nome_completo)-1]);
            $iniciais_nome = substr(ucfirst($nome_completo[0]), 0, 1).substr(ucfirst($nome_completo[count($nome_completo)-1]), 0, 1);
        }else{
            $nome_sobrenome = $nome_completo[0];
            $iniciais_nome = substr(ucfirst($nome_completo[0]), 0, 1);
        }
      
        $id_user = Auth::user()->id;
        $registros = $this->model::leftjoin('orgaos', 'orgaos.codigo', '=', 'users.codigo_orgao')->select('users.name','users.email','users.telefone','orgaos.nome as o_nome')->find($id_user);       
        $perfis_acesso = PerfilUser::join('perfil_acessos', 'perfil_acessos.id', '=', 'perfil_users.perfil_acesso_id')->select('perfil_acessos.nome')->orderBy('perfil_acessos.nome')->where('perfil_users.user_id',$id_user)->get();
        
        return view("view.$this->pag.index", compact('nome_sobrenome','iniciais_nome','registros','perfis_acesso'));
    }

    public function verificaSenhaAtual(Request $req){
        if (Hash::check($req->senhaAtual, Auth::user()->password)){
            return 'true';
        }else{
            return 'false';
        }
    }
    public function alterarSenha(Request $req){
        if ($this->checkUserActive() ==  false){
            return redirect()->route('login');
        }

        try {

        

            $id_user = Auth::user()->id;           
            $dados = [
                'password'=> Hash::make($req->password),
                'ultimo_acesso' => date('Y-m-d', strtotime(Carbon::now()))
            ];
          
            if ($this->model::find($id_user)->update($dados)) {
                return redirect()->back()->with('msg', $this->mensagem(1, 'Senha alterada!'))->with('active', 'alterar_senha');
            } else {
                return redirect()->back()->with('msg', $this->mensagem(2))->with('active', 'alterar_senha');
            }
        } catch (QueryException $e) {
            return redirect()->back()->with('msg', $this->mensagem(3))->with('active', 'alterar_senha');
            //return $e->getMessage();
        }
    }

    public function alterarSenhaUsuario(Request $req){

        if ($this->checkUserActive() == false){
            return redirect()->route('login');
        }

        try{

            $user_id = $req->user_id;
            $dados = [
                'password' => Hash::make($req->senha)
            ];

            if ($this->model::find($user_id)->update($dados)) {
                return redirect()->back()->with('msg', $this->mensagem(1, 'Senha alterada!'))->with('active', 'senha_alterada');
            } else {
                return redirect()->back()->with('msg', $this->mensagem(2))->with('active', 'senha_alterada');
            }

        }catch (QueryException $e){
            return redirect()->back()->with('msg', $this->mensagem(3))->with('active', 'senha_alterada');
        } 

        
    }


}

<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    protected $model;
    protected $pag = 'home';

    public function index()
    {       
        if ($this->checkUserActive() ==  false){
            return redirect()->route('login');
        }
        $user = Auth::user();

       
        
         return view("view.$this->pag.index");

        
    }




    public function dadosServico()
    {
        if ($this->checkUserActive() ==  false){
            return redirect()->route('login');
        }
    }
}

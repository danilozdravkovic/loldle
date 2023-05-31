<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $homeModel = new Home();
        $menu = $homeModel->getMenu();
        return view('pages/home',['menu'=>$menu]);
    }

    public function classic(){
        return view('pages/classic');
    }

    public function quote(){
        return view('pages/quote');
    }

    public function aboutAuthor()
    {
        return view('pages/aboutAuthor');
            }
}

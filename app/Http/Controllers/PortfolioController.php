<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('home');
    }

    public function resume(){
        return view('resume');
    }

    public function projets(){
        return view('projets');
    }

    public function contact(){
        return view('contact');
    }

    public function storeContact(Request $request){
        // dump($request->all());
        return view('contact', ['data' => $request]);
    }

}

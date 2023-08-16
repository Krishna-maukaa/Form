<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function home(){
        return view('welcome');
    }
       
    public function show(){
        return view('form');
    }

    public function detail(Request $req){
        
        echo "<pre>";
        print_r($req->all());
    }
}


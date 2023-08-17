<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emp;

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

        $emp = new emp;
        $emp->name = $req['name'];
        $emp->dept = $req['dept'];
        $emp->city = $req['city'];
        $emp->save();

    }
}


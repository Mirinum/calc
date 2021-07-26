<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function process(Request $req){
        if($req->has("mb2mbit")){
            $mb = abs($req->input("mb", 0));
            $mbit = abs($req->input("mbit", 0));
            $mbit = $mb * 8;
            $data = array(
                'mbit'=>$mbit,
                'mb'=>$mb
            );
            return view('index')->with($data);
        }
        elseif($req->has("mbit2mb")){
            $mb = abs($req->input("mb", 0));
            $mbit = abs($req->input("mbit", 0));
            $mb = $mbit / 8;
            $data = array(
                'mbit'=>$mbit,
                'mb'=>$mb
            );
            return view('index')->with($data);
        }
        else return 'Error';
    }
}

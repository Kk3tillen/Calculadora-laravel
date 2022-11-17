<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function sum($n1, $n2){
        $r = $n1 + $n2;
        return view('resultado', compact('r'));
    }
    public function mult($n1, $n2){
        $r = $n1 * $n2;
        return view('resultado', compact('r'));
    }
    public function div($n1, $n2){
        $r = $n1/$n2;
        return view('resultado', compact('r'));
    }
    public function sub($n1, $n2){
        $r = $n1 - $n2;
        return view('resultado', compact('r'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function sum($n1, $n2){
        return $n1 + $n2;
    }
    public function mult($n1, $n2){
        return $n1 * $n2;
    }
    public function div($n1, $n2){
        return $n1 / $n2;
    }
    public function sub($n1, $n2){
        return $n1 - $n2;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Leonardo";
        $idade = "20";
        $arr = [10,20,30,40,50];
        $arrNomes = ['Leonardo','Maria','João','Ana'];

        return view('welcome',
        ['nome'=>$nome,
        'idade'=>$idade,
        'arr'=>$arr,
        'arrNomes'=>$arrNomes]);
    }

    public function create() {
        return view('events.create');
    }
}

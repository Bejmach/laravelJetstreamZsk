<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showController extends Controller
{
    public function show(){
        return "controller showController";
    }

    public function showData(){
        $data = [
            'firstName'=>'Janusz',
            'lastName'=>'Nowak',
            'city' => 'Poznań'
        ];
        return View('data', $data);
    }
}

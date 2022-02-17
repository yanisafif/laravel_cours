<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
    public function index(){
        $tab = [
            'Hello',
            'World',
            152,
            1000,
            'issou'
        ];

        return view('customers.index', ['tab' => $tab]);
    }

    public function json(){

        return view('customers.json', ['array' => [
            'id' => 1,
            'products' => 'pen',
            'height' => '26mm',
            'color' => 'red',
            'price' => '1.26$'
        ]]);

    }
}

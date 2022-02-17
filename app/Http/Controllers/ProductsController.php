<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        // $array = [740, 88.5, -35];
        // $collection = collect($array);
        // var_dump($collection);

        // // dd($collection->sum());
        // //dd($collection->average());
        // //dd($collection->sort());
        // dd($collection->all());


        return view('products.index');
    }

    //
    public function show(int $id)
    {
        return response()->json([
            'id' => $id,
            'products' => 'pen',
            'height' => '26mm',
            'color' => 'red',
            'price' => '1.26$'
        ]);
    }

    //
    public function store(Request $request)
    {

        // Voir les datas dans le formulaire post
        //dd($request->input());
        // OU
        //dd($request->all());

        session()->flash('success', 'Vous avez bien envoyé le formulaire');
        return back();
    }

    //
    public function update(Request $request, int $id)
    {

    }

    //
    public function delete(int $id)
    {

    }



}

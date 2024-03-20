<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;

class CrudController extends Controller
{
   public readonly Carros $carros;
   public function __construct()
   {
    $this->carros = new Carros();
   }
    public function index()
    {
       $carros_= $this->carros->all();
       return view('carros',['carros_tb'=>$carros_]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carros $carro)
    {
        return view('carros_edit',['carro'=>$carro]);
       // var_dump($carro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        var_dump($id);
        var_dump($request->all());
        //$updated = $this->carro-where('id', $id)->update($request->all())
       // $updated = $this->carros->where('id', $id)->update($request->except(['_token', '_method']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

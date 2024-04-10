<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    public readonly Carros $carros;
    public function __construct()
    {
        $this->carros = new Carros();
    }
    public function index()
    {
        $carros_ = $this->carros->all();
        return view('carros', ['carros_tb' => $carros_]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carros_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //var_dump($request->all());



        $validacao = Validator::make(
            $request->all(),
            [
                'marca' => 'required|max:50|min:3',
                'modelo' => 'required',
                'ano' => 'required',
                'cor' => 'required'
            ],
            [
                'marca.required' => "A marca deve ser preenchida com no máximo 50 caracteres e no minimo 3",
                'marca.max'=>"A marca não pode ultrapassar 50 caracteres",
                'marca.min'=>"A marca deve ter no mínimo 3 caracteres",
                'ano.required' => "O ano deve ser preenchido",
                'cor.required' => 'A cor deve ser preenchida'
            ]

        );

        if ($validacao->fails()) {
            return redirect()
                ->back()
                ->withErrors($validacao)
                ->withInput();
        } else {

            $create = $this->carros->create(
                [
                    'marca' => $request->input('marca'),
                    'modelo' => $request->input('modelo'),
                    'ano' => $request->input('ano'),
                    'cor' => $request->input('cor')

                ]
            );
            if ($create) {
                return redirect()->route('carros.index');
            } else return redirect()->back()->with('message', 'Erro');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Carros $carro)
    {
        return view('carros_show', ['carro' => $carro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carros $carro)
    {
        return view('carros_edit', ['carro' => $carro]);
        // var_dump($carro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // var_dump($id);
        //var_dump($request->all());
        //$updated = $this->carro-where('id', $id)->update($request->all())

        $updated = $this->carros->where('id', $id)->update($request->except(['_token', '_method']));
        if ($updated) {
            //return redirect()->route('carros.index');
            return redirect()->back()->with('message', 'Atualizado com sucesso');
        } else return redirect()->back()->with('message', 'Erro');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //  var_dump('delete');
        $this->carros->where('id', $id)->delete();
        return redirect()->route('carros.index');
    }
}

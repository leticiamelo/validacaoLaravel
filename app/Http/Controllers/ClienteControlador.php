<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $regras = [
            'nome' => 'required|min:3|max:20!unique:clientes',
            'idade'=> 'required',
            'endereco'=> 'required!min:5',
            'email'=> 'required!email'
        ];
        $mensagens = [
            //Em ':attribute' aparecerá o nome do campo.
            'required' => 'O atributo :attribute é requerido',
            'nome.required' => 'O nome é requerido',
            'nome.min' => 'É necessário no mínimo 3 caracteres no nome',
            'email.required' => 'Digite o endereço de email',
            'email.email' => 'Digite um endereço de email válido'


        ];
        $request->validate($regras, $mensagens);
 /*       //validações dos campos
        //'nome' é o nome do input e 'clientes' é o nome da tabela na bd.
        $request->validate([
            'nome' => 'required|min:3|max:20!unique:clientes',
            'idade'=> 'required',
            'endereco'=> 'required!min:5',
            'email'=> 'required!email'
        ]);
*/        
        $cliente = new Cliente();
        $cliente->nome=$request->input('nome');
        $cliente->idade=$request->input('idade');
        $cliente->endereco=$request->input('endereco');
        $cliente->email=$request->input('email');
        $cliente->();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Linkou com a Model
        $fornecedores = Fornecedor::all();
            //nome da view          Atributo sem $
        return view('Fornecedor', compact('fornecedores'));
    }

    public function indexApi()
    {
        $fornecedores = Fornecedor::all();        

        return $fornecedores;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fornecedores = new Fornecedor();
        $fornecedores->nomeFornecedor = $request->txNome;
        $fornecedores->endFornecedor = $request->txEndereco;
        $fornecedores->cnpjFornecedor = $request->txCnpj;
        $fornecedores->telFornecedor = $request->txTelefone;
        $fornecedores->emailFornecedor = $request->txEmail;
        $fornecedores ->save();

        return redirect('/fornecedor');
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

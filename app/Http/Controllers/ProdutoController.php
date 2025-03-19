<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //"chamou" a model
        $produtos = Produto::all();        

        //nome da view      //atributo $produtos sem $
        return view('Produto',compact('produtos'));
    }

    public function indexApi()
    {
        $produtosAPI = Produto::all(); 
        
        return $produtosAPI;
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
        $produtos = new Produto();
            $produtos->nomeProduto = $request->txNome;
            $produtos->tamanhoProduto = $request->txTamanho;
            $produtos->generoProduto = $request->txGenero;
            $produtos->quantProduto = $request->txQuantidade;
            $produtos->valorProduto = $request->txValor;
            $produtos->corProduto = $request->txCor;
            $produtos ->save();

            return redirect('/produto');
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

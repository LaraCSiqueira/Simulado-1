<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produto = Produto::all();
        return response()->json($produto);
    }

    public function store(Request $request)
    {
        $produto = Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'prazo_validade' => $request->prazo_validade,
            'cor' => $request->cor,
            'textura' => $request->textura,
            'peso' => $request->peso,
            'unidade_medida' => $request->unidade_medida,
            'quantidade_minima' => $request->quantidade_minima
        ]);

        return response()->json($produto);
    }

    public function update(Request $request, $id) {
        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json('Produto não encontrado');
        }

        if (isset($request -> nome)){
            $produto->nome = $request -> nome;

            return response()->json($produto);
        }

       if (isset($request -> descricao)){
            $produto -> descricao = $request -> descricao;

            return response()->json($produto);
        }

         if (isset($request -> prazo_validade)){
            $produto-> prazo_validade = $request-> prazo_validade;

            return response()->json($produto);
        }

         if (isset($request -> cor)){
            $produto-> cor = $request-> cor;

            return response()->json($produto);
        }

         if (isset($request -> textura)){
            $produto-> textura = $request-> textura;

            return response()->json($produto);
        }

        if (isset($request -> peso)){
            $produto-> peso = $request-> peso;

            return response()->json($produto);
        }

        if (isset($request -> unidade_medida)){
            $produto-> unidade_medida = $request-> unidade_medida;

            return response()->json($produto);

        }

        if (isset($request -> quantidade_minima)){
            $produto-> quantidade_minima = $request-> quantidade_minima;

            return response()->json($produto);

        }

        return response()->json($produto);
    }

    public function delete($id){
        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json('Produto não encontrado');
        }

        $produto->delete();

        return response()->json('Produto excluido com sucesso');
    }
}

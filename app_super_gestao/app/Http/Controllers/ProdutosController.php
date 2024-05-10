<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = [
            0 => [
                'nome' => 'Produto 1',
                'id' => '01',
                'descricao' => 'Hgyedc',
                'estoque' => '546',
            ],
            1 => [
                'nome' => 'Produto 2',
                'id' => '02',
                'descricao' => 'ergrte',
                'estoque' => '99',
            ],
            2 => [
                'nome' => 'Produto 3',
                'id' => '03',
                'descricao' => 'setgfgv',
                'estoque' => '454',
            ],
            3 => [
                'nome' => 'Produto 4',
                'id' => '04',
                'descricao' => 'ERfdfd',
                'estoque' => '65',
            ],
            4 => [
                'nome' => 'Produto 5',
                'id' => '05',
                'descricao' => 'Tedfre',
                'estoque' => '76',
            ],
        ];

        return view('app.produtos', ['produtos' => $produtos]);
    }
}

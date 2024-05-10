<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Forncedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '', //São Paulo SP
                'telefone' => '00000-0000',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85',
                'telefone' => '99999-9999',
            ],
            2 => [
                'nome' => 'Forncedor 3',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '42', //São Paulo SP
                'telefone' => '45432-6765',
            ],
            3 => [
                'nome' => 'Fornecedor 4',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '41',
                'telefone' => '65643-5657',
            ],
            4 => [
                'nome' => 'Fornecedor 5',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '43',
                'telefone' => '76564-8797',
            ],
        ];

        return view('app.fornecedores', ['fornecedores' => $fornecedores]);
    }

}

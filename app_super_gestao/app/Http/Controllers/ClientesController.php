<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $clientes = [
            0 => [
                'nome' => 'Cliente 1',
                'cpf' => '000.000.000-00',
                'ddd' => '40',
                'telefone' => '00000-0000',
            ],
            1 => [
                'nome' => 'Cliente 2',
                'cpf' => '999.999.999-99',
                'ddd' => '85',
                'telefone' => '99999-9999',
            ],
            2 => [
                'nome' => 'Cliente 3',
                'cpf' => '123.456.789.00',
                'ddd' => '42',
                'telefone' => '45432-6765',
            ],
            3 => [
                'nome' => 'Cliente 4',
                'cpf' => null,
                'ddd' => '41',
                'telefone' => '65643-5657',
            ],
            4 => [
                'nome' => 'Cliente 5',
                'cpf' => '098.765.432.12',
                'ddd' => '43',
                'telefone' => '76564-8797',
            ],
        ];

        return view('app.clientes', ['clientes' => $clientes]);
    }
}

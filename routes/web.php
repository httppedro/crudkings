<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Notas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('form', function () {
    return view('form');
});

Route::post('cadastrar-nota', function (Request $request) {
    Notas::create([
        'nome' => $request->nome,
        'idade' => $request->idade,
        'data_da_compra' => $request->data_da_compra,
        'nome_produto' => $request->nome_produto,
        'endereco' => $request->endereco,
        'cep' => $request->cep,
        'bairro' => $request->bairro,
        'cidade' => $request->cidade,
        'estado' => $request->estado,
        'pais' => $request->pais,
        'nota' => $request->nota,
        'idade' => $request->idade,
        'observacao' => $request->observacao,
        'situacao' => 'analise',
        'email' => $request->email
    ]);
    echo "Nota Cadastrada";
    return view('welcome');

});




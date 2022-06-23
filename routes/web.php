<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return 'Olá seja bem-vindo ao curso';
// });

// Route::get('/','PrincipalController@principal');

// Route::get('/sobre-nos', function () {
//     return 'Sobre nós';
// });


Route::get('/contato', function () {
    return 'Contato';
});


Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);
Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobreNos']);
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato']);

Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
     function(
        string $nome = 'teste nome', 
        string $categoria = 'teste categoria', 
        string $assunto = 'teste assunto', 
        string $mensagem = 'mensagem não informada') {
        echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});



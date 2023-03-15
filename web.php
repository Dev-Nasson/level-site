<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/' ,'HomeController@index')->name('home');

   // Route::get('/','AdminController@index');

    // Route::get('/', function () {
    //     return view('levelschool.index');
    // });

    //Inicio

    Route::get('/priseccao' ,'InicioController@priseccao');
    Route::get('/seguseccao' ,'InicioController@seguseccao');
    Route::get('/detalhe/{id}' ,'InicioController@detalhe');
    Route::get('/produtoinicios' ,'InicioController@produtoinicios');
    Route::get('/priprojecto' ,'InicioController@priprojecto');


    //SobreController
   // Route::get('/sobre' ,'SobreController@index');

      //  produtos
      Route::get('/infopro/{id}' ,'ProdutoController@infopro');
      Route::get('/produtoprincipals' ,'ProdutoController@produtoprincipals');
      Route::get('/segeridos/{id}' ,'ProdutoController@segeridos');

    //Projectos
    Route::get('/seguprojectos' ,'ProjectoController@seguprojectos');

    Route::get('/projectopricis' ,'ProjectoController@projectopricis');

    //Contactos
    Route::get('/contacpris' ,'ContactoController@contacpris');

    //Sobre
    Route::get('/sobressegu' ,'SobreController@sobressegu');
    Route::get('/sobrestres' ,'SobreController@sobrestres');
    Route::get('/pegaid/{id}' ,'SobreController@pegaid');


     Route::group(['prefix' =>'auth','middleware'=>'admin'],function () {

     Route::get('/','PainelController@index')->name('admin.index');
    // Route::post('/bloquear','PainelController@bloquear');
   // Route::resource('/admin','AdminController'); // rota para criar e visualizar Admin
    Route::resource('/inicio','InicioController'); // rota para criar e visualizar Inicio
    Route::post('/accaoini/{id}','InicioController@accaoini')->name('inicio.accao'); // rota para criar e visualizar produto

    Route::resource('/servico','ServicoController'); // rota para criar e visualizar Servico
    Route::resource('/projecto','ProjectoController'); // rota para criar e visualizar Projecto
    Route::post('/accaopro/{id}','ProjectoController@accaopro')->name('projecto.accao'); // rota para criar e visualizar produto


    Route::resource('/contacto','ContactoController'); // rota para criar e visualizar Contacto
    Route::post('/accaocontacto/{id}','ContactoController@accaocontacto')->name('contacto.accao'); // rota para criar e visualizar produto

    Route::resource('/produto','ProdutoController'); // rota para criar e visualizar produto
    Route::post('/accao/{id} ','ProdutoController@accao')->name('produto.accao'); // rota para criar e visualizar produto

    Route::resource('/modulo','ModuloprodutoController'); // rota para criar e visualizar produto
    Route::post('/accaomodulo/{id}','ModuloprodutoController@accaomodulo')->name('modulo.accao'); // rota para criar e visualizar produto

    Route::resource('/sobre','SobreController'); // rota para criar e visualizar Contacto
    Route::post('/accao/{id}','SobreController@accao')->name('sobre.accao'); // rota para criar e visualizar produto

  });


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('products', 'ProductController@index')->name('products.index');
//Route::get('products', [ProductController::class, 'index']);

// //nomenado rotas e redirecionando
// Route::get('redirect3', function () {
//     return redirect()->route('url.name');
// });

// Route::get('/nome-url', function () {
//     return 'hey hey hey';
// })->name('url.name');

// Route::view('/view', 'welcome', ['id' => 'teste']);


// Route::redirect('/redirect1', '/redirect2');

// // Route::get('redirect1', function () {
// //     return redirect('/redirect2');
// // });

// Route::get('redirect2', function () {
//     return 'Redirect 02';
// });

// Route::get('/produtos/{idProducts?}/posts', function ($idProducts = "") {
//     return "Posts da categoria ${idProducts}";
// });



// Route::get('/categoria/{flag}/posts', function ($flag) {
//     return "Posts da categoria ${flag}";
// });


// Route::get('/categoria/{flag}', function ($flag) {
//     return "Produtos da categoria ${flag}";
// });



// Route::match(['post', 'get'], '/match', function () {
//     return 'match';
// }); //aceita as rotas que eu indicar o verbo

// Route::any('/any', function () {
//     return 'any';
// }); // aceita qqr rota


// Route::get('/empresa', function () {
//     return view('site.contact');
// });

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/contato', function () {
//     return 'contato';
// });

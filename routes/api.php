<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//rutas CRUD de ingredientes
Route::post('/ingrediente', 'IngredientesController@store');
Route::get('/ingredientes', 'IngredientesController@show');
Route::get('/ingrediente/{id}', 'IngredientesController@showid');
Route::put('/ingredienteupdate/{id}', 'IngredientesController@update');
Route::delete('/ingredientedestroy/{id}', 'IngredientesController@destroy');

//rutas Procedimientos
Route::post('/procedimiento', 'ProcedimientoController@store');
Route::get('/procedimientos', 'ProcedimientoController@show');
Route::get('/procedimiento/{id}', 'ProcedimientoController@showid');
Route::put('/procedimientoupdate/{id}', 'ProcedimientoController@update');
Route::delete('/procedimientodestroy/{id}', 'ProcedimientoController@destroy');

//rutas Recetas
Route::post('/receta', 'RecetasController@store');
Route::get('/recetas', 'RecetasController@show');
Route::get('/receta/{id}', 'RecetasController@showid');
Route::put('/recetaupdate/{id}', 'RecetasController@update');
Route::delete('/recetadestroy/{id}', 'RecetasController@destroy');

//rutas Ingrediente-grupo
Route::post('/in_grupo', 'IngredientesGrupoController@store');
Route::get('/in_grupos', 'IngredientesGrupoController@show');
Route::get('/in_grupo/{id}', 'IngredientesGrupoController@showid');
Route::put('/in_grupoup/{id}', 'IngredientesGrupoController@update');
Route::delete('/in_grupodes/{id}', 'IngredientesGrupoController@destroy');

//rutas recetas-grupo
Route::post('/re_grupo', 'RecetasGrupoController@store');
Route::get('/re_grupos', 'RecetasGrupoController@show');
Route::get('/re_grupo/{id}', 'RecetasGrupoController@showid');
Route::put('/re_grupoup/{id}', 'RecetasGrupoController@update');
Route::delete('/re_grupodes/{id}', 'RecetasGrupoController@destroy');

//rutas pastel
Route::post('/pastel', 'PastelesController@store');
Route::get('/pasteles', 'PastelesController@show');
Route::get('/pastel/{id}', 'PastelesController@showid');
Route::put('/pastelup/{id}', 'PastelesController@update');
Route::delete('/pasteldes/{id}', 'PastelesController@destroy');




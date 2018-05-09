<?php

use Illuminate\Http\Request;
use App\AnimalModel;

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

Route::get('/animal', function()
{
    $animais = (array) AnimalModel::all();
    echo json_encode($animais);
});

Route::get('/getAnimal/{id}', function($id)
{
  $objct = AnimalModel::find($id);
  if(empty($objct))
  {
    echo json_encode(array('msg' => "[ERROR] id not found to get"));
  } else {
    echo json_encode($objct);
  }
});

Route::post('/insertAnimal', function(Request $request)
{
    $array = $request->all();

    $total = 0;
    foreach ($array as $dados)
    {
      $objctDado = (object) $dados;

      $objct = new AnimalModel();
      $objct->nome = mb_strtoupper($objctDado->nome, 'UTF-8');
      $objct->especie = mb_strtoupper($objctDado->especie, 'UTF-8');
      $objct->raca = mb_strtoupper($objctDado->raca, 'UTF-8');
      $objct->nascimento = mb_strtoupper($objctDado->nascimento, 'UTF-8');
      $objct->porte = $objctDado->porte;
      $objct->peso = $objctDado->peso;
      $objct->save();
      $total++;
    }

    echo json_encode(array('msg' => "[OK] $total Registro Inserido"));
});

Route::put('/editAnimal', function(Request $request)
{
    $objctDado = $request->all();
    $objctDado = (object) $objctDado[0];

    $objct = AnimalModel::find($objctDado->id);
    if(empty($objct))
    {
      echo json_encode(array('msg' => "[ERROR] id not found to edit"));
    } else {
      $objct->nome = mb_strtoupper($objctDado->nome, 'UTF-8');
      $objct->especie = mb_strtoupper($objctDado->especie, 'UTF-8');
      $objct->raca = mb_strtoupper($objctDado->raca, 'UTF-8');
      $objct->nascimento = mb_strtoupper($objctDado->nascimento, 'UTF-8');
      $objct->porte = $objctDado->porte;
      $objct->peso = $objctDado->peso;
      $objct->save();
    }

    echo json_encode(array('msg' => "[OK] Registro Atualizado"));
});

Route::delete('/deleteAnimal', function(Request $request)
{
    $objctDado = $request->all();
    $objctDado = (object) $objctDado[0];

    $objct = AnimalModel::find($objctDado->id);
    if(empty($objct))
    {
      echo json_encode(array('msg' => "[ERROR] id not found to delete"));
    } else {
      $objct->delete();
    }

    echo json_encode(array('msg' => "[OK] Registro deletado"));
});

<?php
namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;
use App\AnimalModel;

class ControllerAnimal extends Controller
{
  public function listar()
  {
    $animais = AnimalModel::all();
    return view('animal')->with('animais', $animais);
  }
}

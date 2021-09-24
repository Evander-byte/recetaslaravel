<?php

namespace App\Http\Controllers;

use App\Receta;
use App\CategoriaReceta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    public function index ()
    {
        // Mostrar las recetas por votos
        // $votadas = Receta::has('likes', '>', 1)->get(); ESTATICO
        $votadas = Receta::withCount('likes')->orderBy('likes_count', 'desc')->take(3)->get(); // DINAMICO
        // Obtener las recetas más nuevas
        $nuevas = Receta::latest()->take(6)->get();

        // Recetas por categorias
        $categorias = CategoriaReceta::all();
        // Agrupar las reectas por categoria
        $recetas = [];
        foreach($categorias as $categoria){
            $recetas[Str::slug($categoria->nombre)][] = Receta::where('categoria_id', $categoria->id)->take(3)->get();
        }
        return view('inicio.index', compact('nuevas', 'recetas', 'votadas'));
    }
}

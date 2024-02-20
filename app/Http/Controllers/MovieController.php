<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MovieController extends Controller
{
    public function index() {
        $movieList = Movie::all();
        return view('index', ['movieList'=>$movieList, 'title'=>"CATÁLOGO DE PELÍCULAS"]);
    }
    public function show($id) {
        $p = Movie::find($id);
        $data['movie'] = $p;
        return view('showMovie', $data);
    }
    public function showNovedades(){
        $fechaInicio = Carbon::create(2024, 1, 1);
        $fechaActual = Carbon::now();

        $movieList = Movie::whereBetween('release_date', [$fechaInicio, $fechaActual])->get();
        return view('index', ['movieList'=>$movieList, 'title'=>"ULTIMAS NOVEDADES"]);
    }
    public function showEstrenos(){
        $fechaActual = Carbon::now();

        $movieList = Movie::where('release_date', '>=', $fechaActual)->get();
        return view('index', ['movieList'=>$movieList, 'title'=>"PROXIMOS ESTRENOS"]);
    }
    public function showPorGenero($genero){
    // Busca el ID del género en la tabla 'genres'
    $genreId = Genre::where('genre', $genero)->value('id');

    // Obtiene las películas con el ID de género correspondiente
    $movieList = Movie::where('genre_id', $genreId)->get();

    return view('index', ['movieList'=>$movieList, 'title'=>$genero]);
    }
    public function buscarPeliculas_titulo(Request $request)
{
    $titulo = $request->input('titulo');

    $movieList = Movie::where('title', 'like', '%' . $titulo . '%')->get();

    return view('index', ['movieList'=>$movieList, 'title'=>"Busqueda por titulo:\"$titulo\""]);
}
public function buscarPeliculas_director(Request $request)
{
    $nombreDirector = $request->input('director');

    $peliculas = Movie::whereHas('director', function ($query) use ($nombreDirector) {
        $query->where('name', 'like', '%' . $nombreDirector . '%');
    })->get();

    return view('index', ['movieList' => $peliculas, 'title' => "Búsqueda por director: '$nombreDirector'"]);
}
    public function create() {
        return view('form');
    }

    public function store(Request $r) {
        $p = new Movie();
        $p->name = $r->name;
        $p->description = $r->description;
        $p->price = $r->price;
        $p->save();
        return redirect()->route('movie.index');
    }

    public function edit($id) {
        $product = Movie::find($id);
        return view('form', array('movie' => $product));
    }

    public function update($id, Request $r) {
        $p = Movie::find($id);
        $p->name = $r->name;
        $p->description = $r->description;
        $p->price = $r->price;
        $p->save();
        return redirect()->route('movie.index');
    }

    public function destroy($id) {
        $p = Movie::find($id);
        $p->delete();
        return redirect()->route('movie.index');
    }
}

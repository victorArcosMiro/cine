<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movieList = Movie::all();
        return view('index', ['movieList'=>$movieList]);
    }
    public function show($id) {
        $p = Movie::find($id);
        $data['movie'] = $p;
        return view('showMovie', $data);
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

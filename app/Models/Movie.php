<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movies;
use Illuminate\Support\Carbon;

class Movie extends Model
{
    use HasFactory;

    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    public function leadActor()
    {
        return $this->belongsTo(LeadActor::class);
    }

    public function writers()
    {
        return $this->hasMany(Writer::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function getAll()
    {
        return Movie::all();
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movie.showMovie', compact('movie'));
    }


}

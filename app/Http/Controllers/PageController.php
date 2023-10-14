<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie; // Importa il modello Movie


class PageController extends Controller
{
    public function index()
    {
        // Recupera tutti i film dal database
        $movies = Movie::all();
        return view('movies',compact('movies'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieProgramController extends Controller
{
    public function index()
    {
        return view('pages.programs.movie.index');
    }

    public function detail(Request $request, string $id)
    {
        return view('pages.programs.detail');
    }
}

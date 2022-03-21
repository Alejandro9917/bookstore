<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::get()->load(['collection', 'tag']);

        return response()->json($comics);
    }

    public function recentCommics()
    {
        $comics = Comic::orderBy('id', 'desc')->take(4)->get()->load(['collection', 'tag']);

        return response()->json($comics);
    }

    public function popularCommics()
    {
        $comics = Comic::orderBy('name', 'desc')->take(4)->get()->load(['collection', 'tag']);

        return response()->json($comics);
    }
}

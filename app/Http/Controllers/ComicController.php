<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::orderBy('collection_id', 'asc')->get()->load(['collection', 'tag']);

        return response()->json($comics);
    }

    public function getComic($id){
        $comics = Comic::where('id', $id)->orderBy('collection_id', 'asc')->first()->load(['collection', 'tag']);

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

    public function store(Request $request)
    {
        try{
            $data = $request->validate([
                'name' => 'required|max:255',
                'image' => 'required|max:255',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'type' => 'required|max:255',
                'edition' => 'required|max:255',
                'collection_id' => 'required',
                'tag_id' => 'required',
            ]);

            //Final object with data
            $comic = Comic::create($data);
            return response()->json($comic);
        }

        catch(Exception $ex){
            $error = array(['error' => 'No se ha podido completar'.$ex]);
            return response()->json($error);
        }
    }
}

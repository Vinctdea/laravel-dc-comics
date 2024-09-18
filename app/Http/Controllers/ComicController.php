<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Functions\Helper;



class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [

                'title' => 'required|min:3|max:250',
                'thumb' => 'required|min:3|max:250',
                'price' => 'required|min:3|max:250',
            ],
            [
                'title.required' => 'campo Titolo obbligatorio',
                'title.min' => 'Il titolo deve contenere alemo :min caratteri',
                'thumb.required' => 'campo URL obbligatorio',
                'thumb.min' => 'Il campo deve contenere alemo :min caratteri',
                'price.required' => 'campo Prezzo obbligatorio',
                'price.min' => 'Il campo deve contenere alemo :min caratteri',

            ]
        );



        $data = $request->all();

        $new_comic = new Comic();
        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->slug = Helper::generateSlug($data['title'], Comic::class);
        $new_comic->thumb = $data['thumb'];
        $new_comic->price = $data['price'];
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted', 'elemento ' . $comic->title . ' è stato eliminato ');
    }
}

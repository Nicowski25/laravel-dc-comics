<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        $newcomic = new Comic();
        // save the fileds
        $newcomic->title = $request->title;
        $newcomic->thumb = $request->thumb;
        $newcomic->price = $request->price;
        $newcomic->description = $request->description;
        $newcomic->series  = $request->series;
        $newcomic->sale_date = $request->sale_date;
        $newcomic->type = $request->type;
        $newcomic->save();

        return to_route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
               
        $data = [
            'title' => $request->title,
            'thumb' => $request->thumb,
            'price' => $request->price,
            'description' => $request->description,
            'series' => $request->series,
            'sale_date' => $request->sale_date,
            'type' => $request->type
        ];
        $comic->update($data);

        return to_route('admin.comics.index')->with('message', 'comic updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
                
        $comic->delete();
        return to_route('comics.index')->with('message', 'comic deleted');
    }
}
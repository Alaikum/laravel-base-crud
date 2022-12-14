<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

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
        //    dd($comics);
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params=$request->validate([
            'title'=>'required|max:255',
            'description'=>'required',
            'thumb'=>'nullable|max:255|url',
            'price'=>'required|max:999|numeric',
            'series'=>'required|max:255|',
            'sale_date'=>'required|date_format:Y-m-d',
            'type'=>'required|max:255',
        ]);
        $d=Comic::create($params);
        return redirect()->route('comics.show',$d);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        //    dd($comic);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        // dd($comic);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
    
        $params=$request->validate([
            'title'=>'required|max:255',
            'description'=>'required',
            'thumb'=>'nullable|max:255|url',
            'price'=>'required|max:999|numeric',
            'series'=>'required|max:255|',
            'sale_date'=>'required|date_format:Y-m-d',
            'type'=>'required|max:255',
        ]);
        $comic->update($params);
        return redirect()->route('comics.show',$comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}

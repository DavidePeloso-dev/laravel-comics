<?php

namespace App\Http\Controllers;

use App\Models\comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(comic $comic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comic $comic)
    {
        //dd($comic);
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return to_route('comics');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comic $comic)
    {
        //
    }
}

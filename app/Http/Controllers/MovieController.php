<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    private $validateStrings = [
    'title' => 'required|string|max:255',
    'actors' => 'required|string|max:255',
    'plot' => 'required|string|max:255',
    ];
    public function index()
    {
        $movies = Movie::all();
        //dd($movies);
        return view('index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $movie= new Movie();
        $request->validate(
            $this->validateStrings
            );
        $movie->fill($data);
        $movie->save();
        $newMovie = Movie::all()->last();
        return redirect()->route('movies.index', compact('newMovie'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $data = $request->all();
        $update = $movie->update($data);
        return view('show', compact('movie'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {

        $id = $movie->id;
        $delete = $movie->delete();
        $data = [
            'id' => $id,
            'movies' => movie::all()
        ];
        return view('index', $data);

    }
}

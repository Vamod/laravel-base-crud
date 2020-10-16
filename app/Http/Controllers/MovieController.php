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
    public function index()
    {
      // memorizzo in una variabile la query che posso fare tramite il model
        $data = Movie::all();
        return view('index', compact('data'));

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
        $request->validate([
        'titolo' => 'required|max:100|min:1',
        'regista' => 'required|max:100|min:4',
        'anno' => 'required|numeric|min:2|max:3000',
        'trama' => 'required|min:5|max:3000'
        ]);
        // al posto della validation

        // // $movieNew->proprietàtabella = $data['name del input'];
        // if(empty($data['titolo']) || empty($data['regista'])){
        //     // per far tornare il form con il valore vecchi, bisogna impostare il value nel form {{old('')}}
        //     return back()->withInput();
        // }
        $movieNew = new Movie;
        // va prima modificato il model movie con fillable
        $movieNew->fill($data);

        // Alternativa al fill();
        // $movieNew->titolo = $data['titolo'];
        // $movieNew->regista = $data['regista'];
        // $movieNew->anno = $data['anno'];
        // $movieNew->trama = $data['trama'];
        // corrisponde al INSERT INTO
        $saved = $movieNew->save();
        // dd($saved);
        if($saved){
            return redirect()->route('movies.index');
        }
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
        return view('create', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $data = $request->all();
        // inserire validate
        $request->validate([
        'titolo' => 'required|max:100|min:1',
        'regista' => 'required|max:100|min:4',
        'anno' => 'required|numeric|min:2|max:3000',
        'trama' => 'required|min:5|max:3000'
        ]);
        // a
        $movie->update($data);

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
        $movie->delete();
        return redirect()->route('movies.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seance;
use Illuminate\Http\Response;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seances = Seance::all();
        return view('seances', compact('seances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seance = new Seance();
        $seance->save();
        return response($seance->jsonSerialize(), Response::HTTP_CREATED);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seance = Seance::create();
        $seance->hall_id = $request->hall_id;
        $seance->movie_id = $request->movie_id;
        $seance->start_time = $request->start_time;
        $seance->save();
        return $seance;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seance = Seance::findOrFail($id);

        return view('seance', compact('seance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seance = Seance::findOrFail($id);

        return $seance;
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
        $seance = Seance::findOrFail($id);
        $seance->hall_id = $request->hall_id;
        $seance->movie_id = $request->movie_id;
        $seance->start_time = $request->start_time;
        $seance->save();
        return $seance;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seance = Seance::findOrFail($id);
        $seance->delete();
        return true;
    }
}

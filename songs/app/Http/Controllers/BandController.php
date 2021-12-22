<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands = DB::table('bands')->paginate(3);
        return view('bands.index', ['bands'=> $bands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'genre' => 'required',
            'founded' => 'required',
        ]);

        Band::create($request->all());

        return redirect()->route('bands.index')
        ->with('success','band created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function show(Band $band)
    {
        return view('bands.show', compact('band'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        return view('bands.edit', compact('band'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Band $band)
    {
        $request->validate([
            'name' => 'required',
            'genre' => 'required',
            'founded' => 'required',
        ]);
        $band->update($request->all());

        return redirect()->route('bands.index')
        ->with('band succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function destroy(Band $band)
    {
        $band->delete();
        return redirect()->route('bands.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Enregistrement;
use Illuminate\Http\Request;

class EnregistrementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enregistrements = Enregistrement::orderBY('nom','asc')->get();
        return view('enregistrement',compact('enregistrements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("enregistrement.store");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enregistrement = Enregistrement::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            
           
        ]);
        return view('enregistrement',compact('enregistrement'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enregistrement  $enregistrement
     * @return \Illuminate\Http\Response
     */
    public function show(Enregistrement $enregistrement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enregistrement  $enregistrement
     * @return \Illuminate\Http\Response
     */
    public function edit(Enregistrement $enregistrement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enregistrement  $enregistrement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enregistrement $enregistrement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enregistrement  $enregistrement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enregistrement $enregistrement)
    {
        //
    }
    
    function add() {
        $enregistrement = Enregistrement::all();
          return view('liste', compact(['enregistrement']));
      }
}

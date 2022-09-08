<?php

namespace App\Http\Controllers;
use App\Models\Enregistrement;
use App\Models\tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $taches = tache::orderBY('date_decheance','asc')->get();
        return view('tache',compact('taches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tache.store");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $taches = tache::create([
            'date_decheance' => $request->date_decheance,
            'categorie' => $request->categorie,
            'Tache' => $request->Tache,
            'note' => $request->note,
        ]);
        return view('tache',compact('taches'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function show(tache $tache)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function edit(tache $tache)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tache $tache)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function destroy(tache $tache)
    {
        //
    }


    function liste_taches() {
        $enregistrements = Enregistrement::all();
        $taches = tache::all();
          return view('list_tache', compact('taches','enregistrements'));
      }

      
}

<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\Personnel;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // on doit compacter les données de la table personnel à la vue appelée d'ou compact('collection')
       $collection = Mission::latest()->get();
       return view('pages.mission.liste', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.mission.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mission::create([
            'lib' => $request->lib,
            'code' => $request->code,
            'consigne' => $request->consigne,
            'date_signature' => $request->date_signature,
            'lieu' => $request->lieu,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'tache' => $request->tache,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $finds = Mission::find($id);
        return view('pages.mission.detail', compact('finds'));
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
        //
    }
}

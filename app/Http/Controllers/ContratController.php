<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // on doit compacter les données de la table personnel à la vue appelée d'ou compact('collection')
        $collection = Contrat::latest()->get();
        return view('pages.contrat.liste', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.contrat.engagement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contrat::create([
            'code' => $request->code,
            'contenu' => $request->contenu,
            'nature' => $request->nature,
            'date_signature' => $request->date_signature,
            'statut' => $request->statut,
            'personnels_id' => $request->personnels_id,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $finds = Contrat::find($id);
        return view('pages.contrat.detail', compact('finds'));
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

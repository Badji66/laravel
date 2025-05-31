<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        return Etudiant::all();
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email|unique:etudiants,email',
        ]);

        return Etudiant::create($request->all());
    }

    public function show($id)
    {
        return Etudiant::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->update($request->all());

        return $etudiant;
    }

    public function destroy($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();

        return response()->json(['message' => 'Supprimé avec succès']);
    }
}
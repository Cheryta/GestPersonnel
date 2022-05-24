<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

class PersonnelController extends Controller
{
    public function index()
    {
        return view('liste', [
            'personnels' => Personnel::all()
        ]);
    }

    public function create()
    {
        return view('formulaire');
    }

    public function accueil()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        Personnel::create([
            'matricule'=> $request->matricule,
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'genre'=> $request->genre,
            'poste'=> $request->poste,
            'titre'=> $request->titre,
            'photo'=> $request->photo->store('images','public')
        ]);
        return redirect()->route('liste');
    }

    public function show(Personnel $personnel)
    {
        return view('personnels.show',compact('personnel'));
    }

    public function edit(Personnel $personnel)
    {
        return view('personnels.edit',compact('personnel'));
    }

    public function update(Request $request, Personnel $personnel)
    {
        $request->validate([

        ]);

        $personnel->update($request->all());

        return redirect()->route('personnels.index')
        ->with('success','Personnel updated successfully.');
    }

    public function destroy(Personnel $personnel)
    {
        $personnel->delete();

        return redirect()->route('personnels.index')
        ->with('success','Personnel deleted successfully.');
    }
}

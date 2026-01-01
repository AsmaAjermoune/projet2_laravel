<?php

namespace App\Http\Controllers;

use App\Models\EtudiantModel;
use App\Models\FormationModel;
use App\Http\Requests\StoreEtudiantModelRequest;
use App\Http\Requests\UpdateEtudiantModelRequest;
use Illuminate\Http\Request;
class EtudiantModelController extends Controller
{
    public function index()
    {
        $etudiants = EtudiantModel::with('formation')->get();
        return view('etudiants.index', compact('etudiants'));
    }

    public function create()
    {
        $formations = FormationModel::all();
        return view('etudiants.create', compact('formations'));
    }

    public function store(Request $request)
    {
        EtudiantModel::create($request->all());
        return redirect()->route('etudiants.index');
    }

    public function edit($cin)
    {
        $etudiant = EtudiantModel::findOrFail($cin);
        $formations = FormationModel::all();
        return view('etudiants.edit', compact('etudiant','formations'));
    }

    public function update(Request $request, $cin)
    {
        EtudiantModel::findOrFail($cin)->update($request->all());
        return redirect()->route('etudiants.index');
    }

    public function destroy($cin)
    {
        EtudiantModel::destroy($cin);
        return redirect()->route('etudiants.index');
    }
}
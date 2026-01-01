<?php

namespace App\Http\Controllers;

use App\Models\SpecialiteModel;
use App\Models\FormationModel;
use App\Http\Requests\StoreSpecialiteModelRequest;
use App\Http\Requests\UpdateSpecialiteModelRequest;
use Illuminate\Http\Request;
class SpecialiteModelController extends Controller
{
    public function index()
    {
        $specialites = SpecialiteModel::with('formation')->get();
        return view('specialites.index', compact('specialites'));
    }

    public function create()
    {
        $formations = FormationModel::all();
        return view('specialites.create', compact('formations'));
    }

    public function store(Request $request)
    {
        SpecialiteModel::create($request->all());
        return redirect()->route('specialites.index');
    }

    public function edit($codeSpe)
    {
        $specialite = SpecialiteModel::findOrFail($codeSpe);
        $formations = FormationModel::all();
        return view('specialites.edit', compact('specialite','formations'));
    }

    public function update(Request $request, $codeSpe)
    {
        SpecialiteModel::findOrFail($codeSpe)->update($request->all());
        return redirect()->route('specialites.index');
    }

    public function destroy($codeSpe)
    {
        SpecialiteModel::destroy($codeSpe);
        return redirect()->route('specialites.index');
    }
}
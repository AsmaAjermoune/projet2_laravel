<?php

namespace App\Http\Controllers;

use App\Models\FormationModel;
use App\Models\SessionModel;
use App\Http\Requests\StoreFormationModelRequest;
use App\Http\Requests\UpdateFormationModelRequest;
use Illuminate\Http\Request;
class FormationModelController extends Controller
{
    public function index()
    {
        $formations = FormationModel::with('session')->get();
        return view('formations.index', compact('formations'));
    }

    public function create()
    {
        $sessions = SessionModel::all();
        return view('formations.create', compact('sessions'));
    }

    public function store(Request $request)
    {
        FormationModel::create($request->all());
        return redirect()->route('formations.index');
    }

    public function edit($codeForm)
    {
        $formation = FormationModel::findOrFail($codeForm);
        $sessions = SessionModel::all();
        return view('formations.edit', compact('formation', 'sessions'));
    }

    public function update(Request $request, $codeForm)
    {
        $formation = FormationModel::findOrFail($codeForm);
        $formation->update($request->all());
        return redirect()->route('formations.index');
    }

    public function destroy($codeForm)
    {
        FormationModel::destroy($codeForm);
        return redirect()->route('formations.index');
    }
}

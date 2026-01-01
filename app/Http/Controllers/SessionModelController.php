<?php

namespace App\Http\Controllers;

use App\Models\SessionModel;
use App\Http\Requests\StoreSessionModelRequest;
use App\Http\Requests\UpdateSessionModelRequest;
use Illuminate\Http\Request;
class SessionModelController extends Controller
{
    public function index()
    {
        $sessions = SessionModel::all();
        return view('sessions.index', compact('sessions'));
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        SessionModel::create($request->all());
        return redirect()->route('sessions.index');
    }

    public function edit($codeSess)
    {
        $session = SessionModel::findOrFail($codeSess);
        return view('sessions.edit', compact('session'));
    }

    public function update(Request $request, $codeSess)
    {
        SessionModel::findOrFail($codeSess)->update($request->all());
        return redirect()->route('sessions.index');
    }

    public function destroy($codeSess)
    {
        SessionModel::destroy($codeSess);
        return redirect()->route('sessions.index');
    }
}
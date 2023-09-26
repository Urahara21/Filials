<?php

namespace App\Http\Controllers;

use App\Models\Filial;
use App\Models\State;
use Illuminate\Http\Request;

class FilialController extends Controller
{
    public function index()
    {
        $filials = Filial::query()->with(['state'])->get();
        return view('filials.index', compact('filials'));
    }

    public function create()
    {
        $states = State::all();
        return view('filials.create', compact('states'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'state_id' => 'required|exists:states,id',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        Filial::create($data);

        return redirect()->route('filials.create')->with('message', 'Филиал успешно создан.');
    }

    public function delete(Filial $filial)
    {
        return view('filials.delete', compact('filial'));
    }

    public function destroy(Filial $filial)
    {
        $filial->delete();
        return redirect()->route('filials.index')->with('message', 'Филиал успешно удален.');
    }
}

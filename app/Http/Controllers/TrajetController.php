<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TrajetController extends Controller
{
    public function index() : View {
        $trajet = Trajet::all();
        return view("trajet.indexTrajet",["trajet" => $trajet]);
    }    

    public function create() : View {
        return view("trajet.createTrajet");
    }

    public function store(Request $request) : RedirectResponse {
        $validated = $request->validate([
            'gareDepart' => 'required|string',
            'gareArriver' => 'required|string',
            "heureDepart" => 'required|date',
            "heureArriver" => 'required|date',
            "prix" => "required|numeric|min:0.01",
            "capacite" => "required|integer|min:1",
        ]);

        $trajet = Trajet::create([
            'gareDepart' => $request->input('gareDepart'),
            'gareArriver' => $request->input('gareArriver'),
            'heureDepart' => $request->input('heureDepart'),
            'heureArriver' => $request->input('heureArriver'),
            'prix' => $request->input('prix'),
            'capacite' => $request->input('capacite'),
        ]);

        return redirect("/Trajet");
    }
}

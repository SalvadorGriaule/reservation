<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Trajet;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReservationController extends Controller
{
    public function index(Request $request) : View {
        $reservation = User::with("reservation")->find($request->user()->id);
        return view("reservation.showReservation",["reservation" => $reservation]);
    }
    
    public function create() : View {
        $trajets = Trajet::all();
        return view("reservation.createReservation", ["trajets" => $trajets]);
    }

    public function store(Request $request) : RedirectResponse {
        $validated = $request->validate([
            "id_trajet" => "required|integer|exists:trajets,id"
        ]);

        $reservation = Reservation::create([
            "id_user" => $request->user()->id,
            "id_trajet" => $request->input("id_trajet")
        ]);

        return redirect("/Reservation");
    }
}

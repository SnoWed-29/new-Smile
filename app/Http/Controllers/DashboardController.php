<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function index(){
        $reservations = Reservation::all()->sortByDesc('created_at');
        $totalReservations = count($reservations);
        
        $totalReservationsConfirmed = $reservations->filter(function ($reservation) {
            return $reservation->confirme === true;
        })->count();
        
            return view('admin.dashboard')->with([
                'resrvations'=> $reservations ,
                'totalResrvation' => $totalReservations,
                'totalReservationsConfirmed'=>$totalReservationsConfirmed
            ]);
    }
    public function showReservation($id){

        $resrvation = Reservation::where('id', $id)->get();
        return view('admin.showRes')->with('reservation', $resrvation);

    }

    
    public function confirme(Request $request){

        $request->validate([
            'id'=> 'required',
        ]);
        $id = $request->input('id');
        Reservation::where('id', $id)->update([
            'confirme' => true
        ]);        
        return dd("hdhdhd");
    }
}
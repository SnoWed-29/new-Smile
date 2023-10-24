<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function index(){
        $reservations = Reservation::all()->sortByDesc('created_at');
        $totalReservations = count($reservations);
        
        $totalReservationsConfirmed = Reservation::all()->where('confirme', 1)->count();
        
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
        return redirect()->route('dashboard')->with('Success', "Confirmations a été successe");
    }

    public function destroy($id, Request $request){
        Reservation::where('id', $id)->delete();
        return redirect()->route('dashboard')->with('Success', "Rendez-Vous a été Suprimmer ");
    }
}
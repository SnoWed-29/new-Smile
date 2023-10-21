<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $resrvations = Reservation::all()->sortByDesc('created_at');
        $totalResrvation = count($resrvations);
            return view('admin.dashboard')->with([
                'resrvations'=> $resrvations ,
                'totalResrvation' => $totalResrvation
            ]);
    }
}
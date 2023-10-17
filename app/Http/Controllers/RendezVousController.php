<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    public function index(){
        return view('reserve');
    }

    public function create(Request $request){
        $request->validate([
            'email'=> 'required',
            'first_name'=> 'required',
            'last_name'=> 'required',
            'phone'=> 'required'
        ]);
        $userMessage = $request->input('message');
        if(!$userMessage){
            $userMessage = "Aucun Message";
        }else{
            $userMessage = $request->input('message');
        }
        Reservation::create([
            'email'=>$request->input('email'),
            'name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'phone'=>$request->input('phone'),
            'message'=>$userMessage 
        ]);
        return redirect()->route('home')->with('Success', "le rendez-vous est pris, attendez-vous à un appel bientôt");
    }
}

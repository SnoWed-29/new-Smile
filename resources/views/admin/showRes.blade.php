@extends('layouts.app')
@section('content')
<section class="container w-9/12 mx-auto">
    <div class="flex">
        <img src="{{asset('images/logoSmall.png')}}" alt="Logo" width="120px" >
        <h1 class="text-xl w-fit mx-auto">Resrvation BY Haitham Dihaji</h1>
        <h4>Creer le : <span>29/07/2001</span></h4>
    </div>
    <div class="flex ">
        <span>Nom : <span>{{$reservation->name}}</span></span>
        <span>Prenom : <span>{{$reservation->last_name}}</span></span>
        <span>Email : <span>{{$reservation->email}}</span></span>
        <span>Telephone : <span>{{$reservation->phone}}</span></span>
        <span>Message  : <span>{{$reservation->message}}</span></span>
        <span>Confirmation : <span>Pas confirmee</span></span>
        <span>Date de Resrvation : <span>lundi 2 mars</span></span>
    </div>
</section>
@endsection
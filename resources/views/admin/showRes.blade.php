@extends('layouts.app')
@section('content')
<section class="container w-2/4  mx-auto shadow-2xl p-4 mt-12 mb-4">
    <div class="flex flex-col justify-start items-center space-y-3">
        <img src="{{asset('images/logoSmall.png')}}" alt="Logo" width="150px" >
        <h1 class="text-xl w-fit mx-auto">Resrvation BY {{$reservation[0]->name}}</h1>
        <h4>Creer le : <span>{{$reservation[0]->created_at->format('d-m-Y H')}}h</span></h4>
    </div>
    <div class="flex flex-col justify-start ">
        <span class="text-xl my-2 p-3 text-[#183459]">Nom : <span class="text-[#3bbadc]">{{$reservation[0]->confirme}}</span></span>
        <span class="text-xl my-2 p-3 text-[#183459]">Prenom : <span class="text-[#3bbadc]">{{$reservation[0]->last_name}}</span></span>
        <span class="text-xl my-2 p-3 text-[#183459]">Email : <span class="text-[#3bbadc]">{{$reservation[0]->email}}</span></span>
        <span class="text-xl my-2 p-3 text-[#183459]">Telephone : <span class="text-[#3bbadc]">{{$reservation[0]->phone}}</span></span>
        <span class="text-xl my-2 p-3 text-[#183459]">Message  : <span class="text-[#3bbadc]">{{$reservation[0]->message}}</span></span>
        <span class="text-xl my-2 p-3 text-[#183459]">Confirmation : <span class="text-[#3bbadc]">Pas confirmee</span></span>
        <span class="text-xl my-2 p-3 text-[#183459]">Date de Resrvation : <span class="text-[#3bbadc]">lundi 2 mars</span></span>

        <form action="/confirme" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$reservation[0]->id}}">
            <button class="p-3 rounded-md float-right text-white text-xl bg-[#3bbadc]" type="submit">Valider</button>
        </form>
    </div>
</section>
@endsection
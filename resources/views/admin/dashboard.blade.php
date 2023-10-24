@extends('layouts.app')
@section('content')
@if(session('Success'))
<div class="fixed bottom-0 right-0 p-4 m-4 text-sm text-white rounded-lg bg-green-700 dark:bg-gray-800 dark:text-green-400" role="alert">
    <span class="font-medium">{{ session('Success') }}</span>
</div>
@endif
<section class="my-4 min-h-[80vh]  max-h-fit">

    <div class="container mx-auto flex flex-col md:flex-row">
        <div class="bg-[#183459] text-white p-4 md:w-1/6">
            <h1 class="text-5xl w-fit mx-auto text-white pb-4">Resrvation</h1>
            <div class="flex flex-col space-y-2 justify-between mx-3">
                <div class="flex">    
                    <li class="text-white text-lg">Nombre des Resrvation Confirme :  </li> <span class="font-semibold text-green-400 text-lg">{{$totalReservationsConfirmed}}</span>
                </div>
                <div class="flex">    
                    <li class="text-white text-lg">Nombre Total des Resrvation : </li> <span class="font-semibold text-lg">{{$totalResrvation}}</span>
                </div>
            </div>
        </div>
        <div class="md:w-4/5 p-4">
            <div id="products" class="category active">
                <table class="w-full border border-gray-300 rounded">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-2 px-4">ID</th>
                            <th class="py-2 px-4">Prenom</th>
                            <th class="py-2 px-4">Nom</th>
                            <th class="py-2 px-4">Email</th>
                            <th class="py-2 px-4">Num Telephone</th>
                            <th class="py-2 px-4">Message</th>
                            <th class="py-2 px-4">Date de Reservation</th>
                            <th class="py-2 px-4"></th>
                            <th class="py-2 px-4"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Client 1 -->
                        @foreach ($resrvations as $resrvation)
                        
                        <tr class="cursor-pointer text-lg">
                            <td class="py-2 px-4">{{$resrvation->id}}</td>
                            <td class="py-2 px-4">{{$resrvation->name}}</td>
                            <td class="py-2 px-4">{{$resrvation->last_name}}</td>
                            <td class="py-2 px-4">{{$resrvation->email}}</td>
                            <td class="py-2 px-4">{{$resrvation->phone}}</td>
                            <td class="py-2 px-4">{{$resrvation->message}}</td>
                            <td class="py-2 px-4">{{$resrvation->created_at->diffForHumans()}}</td>

                            @if (!$resrvation->confirme) 
                                <td class="py-2 px-4 w-full text-center">
                                    <a href="/admin/dashboard/reservation/{{$resrvation->id}}" class="bg-green-400 hover:bg-green-500 p-2 text-white rounded-md">Confirme</a>
                                </td>
                            @else
                            <td class="py-2 px-4 w-full text-center text-green-500">
                                <span>✔️</span>
                            </td>
                            @endif
                            <td  class="py-2 px-4">
                                <form action="/delete/{{$resrvation->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="bg-red-400 p-2 rounded-md text-white hover:bg-red-500"> Supprimmer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                       
                        <!-- Example Product 2 -->
                    </tbody>
                </table>
            </div>

            <!-- The other sections (Bills and Users) can be similarly styled with Tailwind CSS classes. -->
        </div>
    </div>
</section>
@endsection
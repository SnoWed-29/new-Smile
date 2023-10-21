@extends('layouts.app')
@section('content')
<section class="my-4 min-h-[80vh]  max-h-fit">

    <div class="container mx-auto flex flex-col md:flex-row">
        <div class="md:w-1/4 bg-[#183459] text-white p-4">
            <h1 class="text-5xl w-fit mx-auto text-white pb-4">Resrvation</h1>
            <div class="flex flex-col space-y-2 justify-between mx-3">
                <div class="flex">    
                    <li class="text-green-400 text-lg">Nombre des Resrvation Confirme :  </li> <span class="font-semibold text-green-400 text-lg">{{$totalResrvation}}</span>
                </div>
                <div class="flex">    
                    <li class="text-white text-lg">Nombre Total des Resrvation : </li> <span class="font-semibold text-lg">{{$totalResrvation}}</span>
                </div>
            </div>
        </div>
        <div class="md:w-3/4 p-4">
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
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Client 1 -->
                        @foreach ($resrvations as $resrvation)
                        <tr>
                            <td class="py-2 px-4">{{$resrvation->id}}</td>
                            <td class="py-2 px-4">{{$resrvation->name}}</td>
                            <td class="py-2 px-4">{{$resrvation->last_name}}</td>
                            <td class="py-2 px-4">{{$resrvation->email}}</td>
                            <td class="py-2 px-4">{{$resrvation->phone}}</td>
                            <td class="py-2 px-4">{{$resrvation->message}}</td>
                            <td class="py-2 px-4">{{$resrvation->created_at->diffForHumans()}}</td>
                            <td class="py-2 px-4">
                                <button class="bg-blue-500 text-white px-2 py-1 rounded">Modifier</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded">Supprimer</button>
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
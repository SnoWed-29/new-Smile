<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New Smile</title>
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
        @vite(['resources/css/app.css', 'public/css/style.css'])
    </head>
<body>
    <nav class="sticky top-0 z-50 p-2 border-b border-[#3bbadc] shadow-2xl bg-white ">
        <div class="flex w-9/12 mx-auto justify-between items-center">
            <div class="mt-3">
                <a href="/"><img src="{{asset('images/logoSmall.png')}}" alt="Logo" width="160px" > </a>
            </div>
            <div class="">
                <a href="#hero" class="text-[#183459] hover:border-b-2 hover:border-[#3bbadc] text-xl mx-4 p-4 font-semibold">Accueil</a>
                <a href="#services" class="text-[#183459] hover:border-b-2 hover:border-[#3bbadc] text-xl mx-4 p-4 font-semibold">Services</a>
                @guest
                    @if(!Route::has('login'))
                        <a href="/admin/dashboard" class="text-[#183459] hover:border-b-2 hover:border-[#3bbadc] text-xl mx-4 p-4 font-semibold">Dashboard</a>
                    @endif
                @endguest
            
                @auth
                    <a href="/admin/dashboard" class="text-[#183459] hover:border-b-2 hover:border-[#3bbadc] text-xl mx-4 p-4 font-semibold">Dashboard</a>
                @endauth
            </div>
            
            <div class=""> 
                <a href="/rendez-vous" class="p-4 text-white bg-[#3BBADC] text-lg font-semibold rounded-md ">Rendez-Vous +</a>
            </div>
        </div>
    </nav>   
    
    <main>
        @yield('content')
    </main>

    <footer class="flex flex-row bg-gray-300 h-fit p-3 bottom-0">
        <div class="container w-9/12 mx-auto flex justify-around">
            <div class="flex flex-col w-1/3" >
                <img src="/images/logoSmall.png" alt="" class="w-[320px]">
                <p class="text-lg text-black font-semibold leading-loose">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nihil similique adipisci.<br>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
            </div>
            <div class="flex flex-col w-1/3" >
                <h1 class="text-4xl mt-3 w-fit mx-auto text-[#3bbadc] border-b-2 border-[#183459] pb-4">Localisation</h1>
                <div>
                    <img src="/images/location.png" class="w-[70%] mx-auto" alt="localisation de cabinet">
                </div>
                <p class="font-semibold text-lg">
                    Casablanca,<span> Maroc</span><br>
                    Boulevard <span>Hassan II</span><br>
                    Residance Num <span>1337</span><br>
                    4eme Etage
                </p>
                <span class="font-semibold my-2"><a href="#" class="text-[#183459] border-b-2 border-[#3bbadc]">Clicker Ici </a>Pour accedz a la Localisation de google map</span>
            </div>
        </div>
    </footer>
</body>
</html>

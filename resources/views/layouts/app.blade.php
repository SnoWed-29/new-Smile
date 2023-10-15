<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New Smile</title>

        @vite(['resources/css/app.css', 'public/css/style.css'])
    </head>
<body class="h-[200vh]">
    <nav class="sticky top-0 z-50 p-2 border-b border-[#3bbadc] shadow-2xl bg-white ">
        <div class="flex w-9/12 mx-auto justify-between items-center">
            <div class="mt-3">
                <img src="{{asset('images/logoSmall.png')}}" alt="Logo" width="160px" > 
            </div>
            <div class="">
                <a href="#" class="text-[#183459] hover:border-b-2 hover:border-[#3bbadc] text-xl mx-4 p-4 font-semibold">Accueil</a>
                <a href="#" class="text-[#183459] hover:border-b-2 hover:border-[#3bbadc] text-xl mx-4 p-4 font-semibold">Services</a>
                <a href="#" class="text-[#183459] hover:border-b-2 hover:border-[#3bbadc] text-xl mx-4 p-4 font-semibold">Contact</a>
                <a href="#" class="text-[#183459] hover:border-b-2 hover:border-[#3bbadc] text-xl mx-4 p-4 font-semibold">Cabinet</a>
            </div>
            <div class=""> 
                <a href="#" class="p-4 text-white bg-[#3BBADC] text-lg font-semibold rounded-md ">Rendez-Vous +</a>
            </div>
        </div>
    </nav>   
    
    <main>
        @yield('content')
    </main>
</body>
</html>

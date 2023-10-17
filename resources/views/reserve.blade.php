@extends('layouts.app')
@section('content')
    <div class="container w-9/12 mx-auto mt-14 mb-8 bg-white shadow-2xl p-4 border-2 border-[#3bbadc]">
        <h1 class="text-5xl w-fit mx-auto text-[#3bbadc] border-b-2 border-[#183459] pb-4">Rendez-Vous</h1>
        
<form method="POST" action="/rendez-vous" >
    @csrf
    {{-- Email --}}
    <div class="relative z-0 w-full mb-6 group"> 
        <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#3bbadc] focus:outline-none focus:ring-0 focus:border-[#3bbadc] peer" placeholder=" " required />
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#3bbadc] peer-focus:dark:text-[#3bbadc] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address Email</label>
    </div>
    {{-- name --}}
    <div class="grid md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-6 group">
          <input type="text" name="first_name" id="first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#3bbadc] focus:outline-none focus:ring-0 focus:border-[#3bbadc] peer" placeholder=" " required />
          <label for="first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#3bbadc] peer-focus:dark:text-[#3bbadc] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prenom</label>
      </div>
    {{-- last name --}}
      <div class="relative z-0 w-full mb-6 group">
          <input type="text" name="last_name" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-[#3bbadc] focus:outline-none focus:ring-0 focus:border-[#3bbadc] peer" placeholder=" " required />
          <label for="last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#3bbadc] peer-focus:dark:text-[#3bbadc] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom</label>
      </div>
    </div>
    {{-- phone --}}

    <div class="grid md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-6 group">
          <input type="tel" name="phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[#3bbadc] peer" placeholder=" " required />
          <label for="phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#3bbadc] peer-focus:dark:text-[#3bbadc] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Numero de Telephone</label>
      </div>
    </div>
    {{-- message --}}
    <div class="flex h-64 my-2 relative">
        <textarea name="message" style="resize: none;" class="w-full border-2 border-grey-500 onfocus:border-2 onfocus:border-[#3bbadc] h-full transition-transform duration-300 transform placeholder-opacity-0 focus:placeholder-opacity-100" placeholder="Message...(optionnel)" ></textarea>
      </div>
    <button type="submit" name="add" class="text-white bg-[#3bbadc] hover:bg-[#183459] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-[#3bbadc] dark:hover:bg-[#3bbadc] dark:focus:ring-[#3bbadc]">Valider</button>
    
</form>
  
    </div>   
@endsection
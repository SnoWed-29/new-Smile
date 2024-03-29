@extends('layouts.app')
@section('content')
@if(session('Success'))
<div class="fixed bottom-0 right-0 p-4 m-4 text-sm text-white rounded-lg bg-green-700 dark:bg-gray-800 dark:text-green-400" role="alert">
    <span class="font-medium">{{ session('Success') }}</span>
</div>
@endif
    <section id="hero" class="border-b border-[#3bbadc]">
        <div class="bg-[#3bb9dc5b] w-full h-full">
            <div class="container w-9/12 mx-auto flex items-center h-[70vh]">
                <div class="flex flex-col h-fit">
                    <h3 class="text-[#3bbadc] text-2sm font-semibold rounded w-fit bg-white p-1 animate__animated animate__backInRight">Lorem, ipsum dolor.</h3>
                    <h1 class="text-[#183459] text-8xl font-bold mb-2  animate__animated animate__backInDown">NEW SMILE</h1>
                    <h3 class="text-white text-3sm  p-1 font-semibold bg-[#3bbadc] rounded animate__animated animate__backInLeft">Lorem ipsum dolor sit amet Lorem, ipsum dolor..</h3>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="container flex w-9/12 mx-auto flex-col ">
        <div class="flex justify-center w-full my-2">
            <h1 class="text-5xl w-fit mx-auto text-[#3bbadc] border-b-2 border-[#183459] pb-4">Services</h1>
        </div>
        <div class="flex flex-col space-y-7 my-4">
            <div class="flex justify-between  space-x-2 shadow-xl animate__animated animate__backInRight">
                <div class="flex w-2/5 border-2 border-[#3bbadc]">
                    <img src="{{asset('images/wallpaper.jpg')}}" alt="" class="w-full">
                </div>
                <div class="flex flex-col w-3/5">
                    <h1 class="text-3xl w-fit text-center font-bold mb-5 mx-auto text-[#3bbadc]">Service 1</h1>
                    <p class="text-xl">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur ipsum molestiae inventore quod maiores accusantium adipisci earum totam, similique sequi? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea rerum distinctio ex eligendi, vero expedita quibusdam nostrum maxime eius eos architecto, asperiores blanditiis voluptates, nihil sequi modi voluptatum. Placeat, soluta?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ratione sequi assumenda soluta ullam consectetur atque est nesciunt voluptatem corporis?
                    </p>
                    <div class="flex mt-auto justify-end">
                        <a href="#" class="p-4 text-white bg-[#3BBADC] text-lg font-semibold rounded-l-md text-right mb-2 ">Savoir Plus</a>
                    </div>
                </div>
            </div>
            <div class="flex justify-between  space-x-2 my-2 shadow-xl animate__animated animate__backInLeft">
                <div class="flex flex-col w-3/5">
                    <h1 class="text-3xl w-fit text-center font-bold mb-5 mx-auto text-[#3bbadc]">Service 2</h1>
                    <p class="text-xl text-left ml-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur ipsum molestiae inventore quod maiores accusantium adipisci earum totam, similique sequi? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea rerum distinctio ex eligendi, vero expedita quibusdam nostrum maxime eius eos architecto, asperiores blanditiis voluptates, nihil sequi modi voluptatum. Placeat, soluta?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ratione sequi assumenda soluta ullam consectetur atque est nesciunt voluptatem corporis?
                    </p>
                    <div class="flex mt-auto justify-start">
                        <a href="#" class="p-4 text-white bg-[#3BBADC] text-lg font-semibold rounded-r-md text-right mb-2 ">Savoir Plus</a>
                    </div>
                </div>
                <div class="flex w-2/5 border-2 border-[#3bbadc]">
                    <img src="{{asset('images/wallpaper.jpg')}}" alt="" class="w-full">
                </div>
            </div>
            <div class="flex justify-between  space-x-2 shadow-xl animate__animated animate__backInRight">
                <div class="flex w-2/5 border-2 border-[#3bbadc]">
                    <img src="{{asset('images/wallpaper.jpg')}}" alt="" class="w-full">
                </div>
                <div class="flex flex-col w-3/5">
                    <h1 class="text-3xl w-fit text-center font-bold mb-5 mx-auto text-[#3bbadc]">Service 3</h1>
                    <p class="text-xl">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur ipsum molestiae inventore quod maiores accusantium adipisci earum totam, similique sequi? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea rerum distinctio ex eligendi, vero expedita quibusdam nostrum maxime eius eos architecto, asperiores blanditiis voluptates, nihil sequi modi voluptatum. Placeat, soluta?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ratione sequi assumenda soluta ullam consectetur atque est nesciunt voluptatem corporis?
                    </p>
                    <div class="flex mt-auto justify-end">
                        <a href="#" class="p-4 text-white bg-[#3BBADC] text-lg font-semibold rounded-l-md text-right mb-2 ">Savoir Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('layouts.app')

@section('content')
<div style="background-image:url(/image/coverimage.jpg) " class="container bg-cover bg-center bg-no-repeat h-48 rounded-lg -mt-1">

</div>
<div class="container px-0 flex justify-between">
    <div class="w-9/12 h-64">

        <div class="px-3 py-3 bg-white rounded-lg mt-6">
            <div class="pb-3 border-b border-gray-300 bg-white flex justify-between"><p class="text-lg">Lopende Incidenten</p><a href="/problems/create" class="border-grey-600 border rounded-lg text-gray-600 font-bold px-3 bg-white text-center align-items-center text-decoration-none hover:shadow">+</a></div>
            <div class="pt-3 flex-col leading-tight">
                @foreach($problemsKnown as $problem)
                   <a href="/problems/{{$problem->id}}" class="text-ibis-brown-500 font-extrabold bg-ibis-brown-200 rounded-lg flex justify-between py-2 px-3 w-full mb-2 text-decoration-none hover:shadow hover:bg-ibis-brown-300 hover:text-black">
                      <div class="flex-col">
                          <p class="text-sm">{{$problem->title}}</p><p class="text-ibis-brown-400 font-light text-xs">2 uur geleden</p>
                      </div>
                      <div class="flex flex-row my-auto text-ibis-brown-500 text-sm font-light">
                          <p class="mr-2 leading-none h-3 self-center">Ritchie D.</p>
                          <div class="bg-gray-400 rounded-circle w-6 h-6 bg-cover bg-center bg-no-repeat" style="background-image:url(/image/profilepic1.jpg) ">

                          </div>
                      </div>
                   </a>
                @endforeach
            </div>
            <div class="bg-white border-t border-gray-300 pt-3 flex justify-end">
                <a class="text-blue-400 text-decoration-none" href="/problems/">Alle Incidenten ></a>
            </div>
        </div>
        <div class="px-3 py-3 bg-white rounded-lg mt-6">
            <div class="pb-3 border-b border-gray-300 bg-white flex justify-between"><p class="text-lg">Vraag & Antwoord</p><a href="/problems/create" class="border-grey-600 border rounded-lg text-gray-600 font-bold px-3 bg-white text-center align-items-center text-decoration-none hover:shadow">+</a></div>
            <div class="pt-3 flex-col">
                <div class="px-3 pb-3 bg-white flex flex-row">
                    <div class="w-1/6 flex-col text-center justify-between">
                        <div class="bg-gray-400 rounded-circle w-24 h-24 mb-2 bg-cover bg-center bg-no-repeat" style="background-image:url(/image/profilepic1.jpg) ">

                        </div>
                        <div class="w-24 leading-tight text-xs">
                            <p class="text-blue-700 font-extrabold">Ritchie D.</p>
                            <p class="text-gray-500 ">Manager kitchen & Housekeeping</p>
                        </div>

                    </div>
                    <div class="w-4/5">
                        <div class="bg-blue-200 h-24 rounded-lg px-3 py-3 text-blue-800 leading-tight">
                            <h3 class="font-extrabold mb-2">Dit is een vraag</h3>
                            <p>Prima 3 sterren hotel. Terwijl ik dit lees zie ik dat deze tekst hier eigenlijk niet hoort. Maar dat maakt niet uit dit is toch een demo.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white border-t border-gray-300 pt-3 flex justify-end">
                <a class="text-blue-400 text-decoration-none" href="/problems/">Alle Vragen ></a>
            </div>
        </div>
    </div>
    <div class="w-3/12 pl-3 mt-6">
        <div class="bg-white rounded-lg flex-col flex align-content-center">
            <div class="card-body flex justify-center">
                <p class="font-bold text-black">Rooms from*</p>
            </div>
            <div class="border-yellow-700 rounded-full w-1/3 mx-auto border-2 flex justify-center">
                <p class="text-yellow-700 text-2xl font-light">€ 92, -</p>
            </div>
            <div class="flex flex-col mx-auto text-justify py-3">
                <p class="text-gray-500">Room 1 or 2 pers.</p>
                <p class="text-gray-500">Breakfast not included</p>
            </div>
        </div>
        <div class="bg-white rounded-lg flex-col flex align-content-center mt-3 card-body text-center">
            <div class="text-3xl text-ibis-black-500"><h2>4.0</h2></div>
            <div><p class="text-ibis-black-200">3074 Reviews</p></div>
        </div>
        <div class="bg-white rounded-lg flex-col flex align-content-center mt-3">
            <div class="card-body flex">
                <h2 class="text-ibis-blue-400 font-extrabold">Agenda</h2>
            </div>
            <div class="bg-ibis-blue-100 text-ibis-blue-500 rounded-lg flex-col mx-3 p-2 leading-tight mb-2">
                <p class="font-extrabold text-sm">2 Sept</p>
                <p class="font-light text-ibis-blue-400 text-xs">Vrienden van Amstel Live</p>
            </div>
            <div class="bg-ibis-blue-100 text-ibis-blue-500 rounded-lg flex-col mx-3 p-2 leading-tight mb-2">
                <p class="font-extrabold text-sm">2 Sept</p>
                <p class="font-light text-ibis-blue-400 text-xs">Vrienden van Amstel Live</p>
            </div>
            <div class="bg-ibis-blue-100 text-ibis-blue-500 rounded-lg flex-col mx-3 p-2 leading-tight mb-2">
                <p class="font-extrabold text-sm">2 Sept</p>
                <p class="font-light text-ibis-blue-400 text-xs">Vrienden van Amstel Live</p>
            </div>
        </div>
        <div class="bg-white rounded-lg flex-col flex align-content-center mt-3">
            <div class="card-body flex justify-center">
                <p class="font-bold text-black">Rooms from*</p>
            </div>
            <div class="border-yellow-700 rounded-full w-1/3 mx-auto border-2 flex justify-center">
                <p class="text-yellow-700 text-2xl font-light">€ 92, -</p>
            </div>
            <div class="flex flex-col mx-auto text-justify py-3">
                <p class="text-gray-500">Room 1 or 2 pers.</p>
                <p class="text-gray-500">Breakfast not included</p>
            </div>
        </div>
    </div>
</div>
@endsection

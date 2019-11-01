@extends('layouts.app')

@section('content')
<div class="container flex">
    <div class="w-1/3 h-64">
        <div class="card mr-10">
            <div class="card-header">Review Score</div>
            <div class="card-body">

            </div>

        </div>
    </div>
    <div class="w-2/3 h-64 ">
        <div class="card mb-20">
            <div class="card-header">Kennisbank</div>
            <div class="card-body">

            </div>

        </div>
        <div class="card mb-20">
            <div class="card-header flex justify-between"><p class="">Bekende problemen</p><a href="/problems/create" class="rounded text-white font-bold px-3 bg-green-500">+</a></div>
            <div class="card-body flex">
                <table class="table w-1/3">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Bekend</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($problemsKnown as $problem)
                    <tr>
                        <td><a href="/problems/{{ $problem->id }}">{{$problem->title}}</a></td>
                    </tr>
                    @endforeach
                    <tr>


                    </tr>
                    </tbody>
                </table>
                <table class="table w-1/3">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Word aan gewerkt</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($problemsBusy as $problem)
                        <tr>
                            <td><a href="/problems/{{ $problem->id }}">{{$problem->title}}</a></td>
                        </tr>
                    @endforeach
                    <tr>


                    </tr>
                    </tbody>
                </table>
                <table class="table w-1/3">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Opgelost</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($problemsDone as $problem)
                        <tr>
                            <td><a href="/problems/{{ $problem->id }}">{{$problem->title}}</a></td>
                        </tr>
                    @endforeach
                    <tr>


                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="card">
            <div class="card-header">Q&A</div>
            <div class="card-body">

            </div>

        </div>
    </div>
</div>
@endsection

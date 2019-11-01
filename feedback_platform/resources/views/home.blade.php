@extends('layouts.app')

@section('content')
<div style="background-image:url(/image/coverimage.jpg) " class="container bg-cover bg-center bg-no-repeat h-48 rounded -mt-1">

</div>
<div class="container px-0 flex justify-between">
    <div class="w-9/12 h-64">

        <div class="card mb-20 mt-12">
            <div class="card-header flex justify-between"><p class="">Incidenten</p><a href="/problems/create" class="rounded text-white font-bold px-3 bg-green-500">+</a></div>
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
    <div class="w-3/12 h-64 pl-3 mt-12">
        <div class="card">
            <div class="card-header">Review Score</div>
            <div class="card-body">

            </div>

        </div>
    </div>
</div>
@endsection

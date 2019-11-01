@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header flex justify-between"><p>Details voor {{$problem->title}}</p><p><a href="/problems/{{ $problem->id }}/edit">Edit</a></p></div>
                    <div class="card-body">
                        <p><strong>Titel:</strong> {{$problem->title}}</p>
                        <p><strong>Omschrijvig:</strong> {{$problem->description}}</p>
                        <p><strong>Kamer:</strong> {{$problem->room}}</p>
                        <p><strong>status:</strong>{{$problem->status}} </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

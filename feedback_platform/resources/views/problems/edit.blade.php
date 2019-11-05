@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-12">
                    <div class="card-header">Probleem aanpassen</div>

                    <div class="card-body">
                        <form action="/problems/{{ $problem->id }}" method="post" class="pb-5">
                            @method('PATCH')
                            <input class="form-control mb-4" type="text" name="title" value="{{ $problem->title }}">
                            {{ $errors->first('title') }}
                            <textarea class="form-control mb-4" rows="3" name="description" >{{ $problem->description }}</textarea>
                            {{ $errors->first('description') }}
                            <br>
                            <label><input type="checkbox" name="urgent" value="1">Urgent</label>


                            <br>
                            <div class="input-group mb-3">
                                <select name="status" class="custom-select" id="selectStatus">

                                    <option value="known">Known</option>
                                    <option value="busy">Busy</option>
                                    <option value="done">Done</option>
                                </select>
                            </div>
                            <button class="btn-light px-3 rounded" type="submit">opslaan</button>
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

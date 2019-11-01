@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Voeg een probleem toe</div>

                    <div class="card-body">
                        <form action="" method="post" class="pb-5">
                            <input class="form-control mb-4" type="text" name="title" placeholder="Titel">
                            {{ $errors->first('title') }}
                            <textarea class="form-control mb-4" rows="3" name="description" placeholder="Omschrijving"></textarea>
                            {{ $errors->first('description') }}
                            <br>
                            <label><input type="checkbox" name="urgent" value="1">Urgent</label>


                            <br>
                            <button class="btn-light px-3 rounded" type="submit">Toevoegen</button>
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

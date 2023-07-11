@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4 d-flex flex-wrap justify-content-between">
        <div class="row w-100">
            <h1 class="mb-5">Inserisci un nuovo progetto</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form class="form-control needs-validation p-2" action="{{ route('admin.projects.store') }}" method="post">
                @csrf


                <div class="mb-3">
                    <label class="mb-1" for="title">Titolo Progetto</label>
                    <input type="text" name="title" id="title" value="" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="mb-1" for="description">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label class="mb-1" for="image">URL immagine</label>
                    <input type="text" name="image" id="image" value="" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Inserisci</button>
            </form>

        </div>
    </div>
@endsection

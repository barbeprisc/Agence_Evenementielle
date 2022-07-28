@extends('layouts.main')
@section('content')
    <h1 class="text-center"><strong style="color: black">Détail sur l'évènement {{ $finds->id }}</strong></h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage') . '/' . $finds->photo }}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"> Détail de l'évènement</h5>
                    <p>Nom : <strong style="color: red"> {{ $finds->nom }} </strong></p>
                    <p>Categorie :<strong style="color: red"> {{ $finds->categorie }}</strong></p>
                    <p>Lieu :<strong style="color: red"> {{ $finds->lieu }}</strong></p>
                    <p>Photo :<strong style="color: red"> {{ $finds->photo }}</strong></p>
                    <a href="{{ route('gestion_event.index') }}" class="btn btn-primary">OK</a>
                </div>
            </div>
        </div>
    </div>
@endsection

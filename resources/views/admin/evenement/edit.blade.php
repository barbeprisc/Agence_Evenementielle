@extends('layouts.main')
@section('content')
    <div class="container">
        <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Formulaire d'insertion</h2>
        <h5 class="text-center mb-3">Veuillez insérer vos données ci-dessous.</h5>
        <form method="POST" class="shadow p-3 mb-5 bg-body rounded"
            action="{{ route('gestion_event.update', [$finds->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex">
                <div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                        <input type="text" class="form-control" value="{{ $finds->nom }}" name="nom"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Categorie</label>
                        <input type="text" class="form-control" name="categorie" value="{{ $finds->categorie }}"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Lieu</label>
                        <input type="text" class="form-control" name="lieu" value="{{ $finds->lieu }}"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Photo</label>
                        <input type="text" class="form-control" name="photo" value="{{ $finds->photo }}"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div>
                    <a href="{{ route('gestion_event.index') }}" class="btn btn-primary">OK</a>
                </div>
        </form>
    </div>
</div>
    </div>
@endsection

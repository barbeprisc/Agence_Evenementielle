@extends('layouts.main')
@section('content')
    <h2 class="text-center text-primary p-3">ENREGISTRER UN EVENEMENT</h2>
    <h4 class="text-center p-2">Veuillez remplir ce formulaire SVP!</h4>
    <div class="container">
        <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_event.store') }}"
            enctype="multipart/form-data">
            @csrf

            <div class="container">
                <div class="row g-2">
                    <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">Nom de l'évènement</label>
                        <input type="text" class="form-control" name="nom" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Date du début l'évènement</label>
                        <input type="date" class="form-control" name="date" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                            <div class="col-6">
                                <label for="exampleInputEmail1" class="form-label">Nom de la catégorie</label>
                                <select  class="form-control" name="categories_id" id="">
                                    @foreach ($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->nom}} {{$categorie->message}}</option>
                                    @endforeach
                                </select>
                            </div>

                    <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">Lieu de l'évènement</label>
                        <input type="text" class="form-control" name="lieu" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Photo</label>
                        <input type="file" class="form-control" name="photo" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="container d-flex mt-3">
                <div>
                    <button type="submit" class="btn btn-outline-info w-100">Enregistrer</button>
                </div> &nbsp;&nbsp;&nbsp;
                <div>
                    <button type="reset" class="btn btn-outline-primary w-100">Annuler</button>
                </div>
            </div>
        </form>
    </div>
@endsection

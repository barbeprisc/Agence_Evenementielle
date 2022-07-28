@extends('layouts.main')
@section('content')
    <h1 class="text-center text-primary p-3">LISTE DES CATEGORIES </h1>
    <div class="container">
        <div class="d-flex justify-content-end mb-3 p-3">
            <a href="{{ route('gestion_cat.create') }}" class="btn btn-outline-info"> Ajouter une catégorie</a>
        </div>
        <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">DETAIL</th>
                    <th scope="col">MODIFIER</th>
                    <th scope="col">SUPPRIMER</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                    <tr>
                        <th scope="row">{{ $categorie->id }}</th>
                        <td>{{ $categorie->nom }}</td>

                        <td> <a class="button" href="{{ route('gestion_cat.show', [$categorie->id]) }}"><img
                                    src="{{ asset('image/more_info_50px.png') }}" style="width:30px;height:30px"
                                    alt="">
                            </a>
                        </td>

                        <td> <a class="button" href="{{ route('gestion_cat.edit', [$categorie->id]) }}"><img
                                    src="{{ asset('image/pencil_64px.png') }}" style="width:30px;height:30px"
                                    alt="">
                            </a>
                        </td>

                        <td><a class="button" href="{{ url('supprimer_categorie/' . $categorie->id) }}"><img
                                    src="{{ asset('image/delete_trash_24px.png') }}" style="width:30px;height:30px"
                                    alt="">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

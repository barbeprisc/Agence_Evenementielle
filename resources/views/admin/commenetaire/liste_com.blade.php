@extends('layouts.main')
@section('content')
    <h1 class="text-center text-primary p-3">LISTE DES COMMENTAIRES </h1>
    <div class="container">
        <div class="d-flex justify-content-end mb-3 p-3">
            <a href="{{ route('gestion_com.create') }}" class="btn btn-outline-info"> Ajouter un commentaire</a>
        </div>
        <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">MESSAGE</th>
                    <th scope="col">DETAIL</th>
                    <th scope="col">MODIFIER</th>
                    <th scope="col">SUPPRIMER</th>

                </tr>
            </thead>
            <tbody>
                @foreach($commentaires as $commentaire)
                    <tr>
                        <th scope="row">{{ $commentaire->id }}</th>
                        <td>{{ $commentaire->nom }}</td>
                        <td>{{ $commentaire->message }}</td>

                        <td> <a class="button" href="{{ route('gestion_event.show', [$commentaire->id]) }}"><img src="{{ asset('image/more_info_50px.png') }}" style="width:30px;height:30px"alt=""></a></td>

                        <td> <a class="button" href="{{ route('gestion_event.edit', [$commentaire->id]) }}"><img src="{{ asset('image/pencil_64px.png') }}" style="width:30px;height:30px"alt=""></a></td>

                        <td><a class="button" href="{{ url('supprimer_evenement/' . $commentaire->id) }}"><img src="{{ asset('image/delete_trash_24px.png') }}" style="width:30px;height:30px"alt=""></a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

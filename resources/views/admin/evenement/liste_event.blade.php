@extends('layouts.main')
@section('content')
    <h1 class="text-center text-primary p-3">LISTE DES EVENEMENTS </h1>
    <div class="container">
        <div class="d-flex justify-content-end mb-3 p-3">
            <a href="{{ route('gestion_event.create') }}" class="btn btn-outline-info"> Ajouter un évènement</a>
        </div>
        <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">DATE</th>
                    <th scope="col">CATEGORIE</th>
                    <th scope="col">LIEU</th>
                    <th scope="col">PHOTO</th>
                    <th scope="col">DETAIL</th>
                    <th scope="col">MODIFIER</th>
                    <th scope="col">SUPPRIMER</th>

                </tr>
            </thead>
            <tbody>
                @foreach($evenements as $evenement)
                    <tr>
                        <th scope="row">{{ $evenement->id }}</th>
                        <td>{{ $evenement->nom }}</td>
                        <td>{{ $evenement->date }}</td>
                        <td>{{ $evenement->categorie }}</td>
                        <td>{{ $evenement->lieu }}</td>
                        <td>{{ $evenement->photo }}</td>

                        <td> <a class="button" href="{{ route('gestion_event.show', [$evenement->id]) }}"><img src="{{ asset('image/more_info_50px.png') }}" style="width:30px;height:30px"alt=""></a></td>

                        <td> <a class="button" href="{{ route('gestion_event.edit', [$evenement->id]) }}"><img src="{{ asset('image/pencil_64px.png') }}" style="width:30px;height:30px"alt=""></a></td>

                        <td><a class="button" href="{{ url('supprimer_evenement/' . $evenement->id) }}"><img src="{{ asset('image/delete_trash_24px.png') }}" style="width:30px;height:30px"alt=""></a></td>

                        <td><img src="{{ asset('storage') . '/' . $evenement->photo }} }}" style="width:30px;height:30px"alt=""></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

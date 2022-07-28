@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Client</h5>
        <p>Liste des clients</p>

        <!-- Table with stripped rows -->
        <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Email</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
        <tr>
          <th scope="row">{{$client->id}}</th>
          <td>{{$client->nom}}</td>
          <td>{{$client->prenom}}</td>
          <td>{{$client->telephone}}</td>
          <td>{{$client->adresse}}</td>
          <td>{{$client->email}}</td>
          <td> 
              <a class="button" href="{{route('gestion_couture.show', [$client->id]) }}"><img src="{{ asset('Images/more.png') }}" style="width:30px;height:30px" alt=""></a> 
          </td>
          <td> 
              <a class="button" href="{{route('gestion_couture.edit', [$client->id]) }}"><img src="{{ asset('Images/edit.png') }}" style="width:30px;height:30px" alt=""></a> 
          </td>
          <td>
              <a class="button" href="{{url('gestion_couture/'.$client->id) }}"><img src="{{ asset('Images/del.png') }}" style="width:30px;height:30px" alt=""></a>
          </td>
        </tr>
        @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
@extends('layout.main')
@section('contenu')

<h1 class="text-center text-primary p-3">LISTE DU PERSONNEL </h1>
<div class="container">
    <div class="d-flex justify-content-end mb-3 p-3">
        <a href="{{route('gestion_personnel.create') }}" class="btn btn-info"> Ajouter un nouvel personnel</a>
    </div>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">MATRICULE</th>
                <th scope="col">NOM</th>
                <th scope="col">PRENOM</th>
                <th scope="col">GENRE</th>
                <th scope="col">POSTE</th>
                <th scope="col">TITRE</th>
                <th scope="col">PHOTO</th>
                <th colspan="3">ACTIONS</th>

            </tr>
        </thead>
        <tbody>
            @foreach($personnels as $personnel)
            <tr>
                <th scope="row">{{$personnel->id}}</th>
                <td>{{$personnel->matricule}}</td>
                <td>{{$personnel->nom}}</td>
                <td>{{$personnel->prenom}}</td>
                <td>{{$personnel->genre}}</td>
                <td>{{$personnel->poste}}</td>
                <td>{{$personnel->titre}}</td>
                <td><img src="{{asset('Images').'/'.$personnel->photo}}" style="width:55px;height:30px" alt=""></td>
                <td> <a class="button" href="{{route('gestion_personnel.show', [$personnel->id]) }}"><img src="{{ asset('Images/more_info_50px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_personnel.edit', [$personnel->id]) }}"><img src="{{ asset('Images/pencil_64px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_personnel/'.$personnel->id) }}"><img src="{{ asset('Images/delete_trash_24px.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>

@endsection
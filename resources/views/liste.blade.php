@extends("layouts.menu")

@section("contenu")
<h1 class="text-center text-primary p-3">LISTE DU PERSONNEL </h1>
    <div class="container">
        <div class="d-flex justify-content-end m-4">
            <a href="{{ route('formulaire') }}" class="btn btn-primary"> Ajouter un nouvel personnel</a>
        </div>
        @if (Session::has('supprimer'))
            <span>{{ Session::get('supprimer') }}</span>
        @endif
        <table class="table m-3 ">
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
            <td><img src="{{ asset('storage').'/'.$personnel->photo }}" style="width: 15%" alt=""></td>
            <td> <a class="button" href="/personnels/{{ $personnel->id }}"><img src="{{ asset('Images/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
            <td><a class="button"  href="/personnels/{{ $personnel->id }}" onclick="return confirm('Voulez-vous modifier?');"><img src="{{ asset('images/edit_profile_32px.png') }}"  style="width:30px;height:30px" alt=""></a> </td>
            <td><a class="button" href="href="{{url('supprimer/'.$personnel->id) }}"><img src="{{ asset('images/waste_26px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>

@endsection


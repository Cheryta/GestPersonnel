@extends('layout.main')
@section('contenu')
<h1 class="text-center text-primary m-3">DETAIL DU PERSONNEL {{$finds->id}}</h1>
<div class="container d-flex m-4 p-4">
    <div class="col-md-4">
        <img src="{{ URL::asset('/Images/caroussel1.jpg') }}" style="width:75%" alt="" srcset="">
    </div>
    <div class="col-md-8">
        <label for="">MATRICULE :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><span>  {{$finds->matricule}} </span>  <br>
        <label for="">NOM :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </label> <span>  {{$finds->nom}} </span> <br>
        <label for="">PRENOM :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </label><span> {{$finds->prenom}}</span> <br>
        <label for="">GENRE :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </label><span>  {{$finds->genre}} </span>  <br>
        <label for="">POSTE :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </label> <span> {{$finds->poste}} </span>  <br>
        <label for="">TITRE :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </label><span>  {{$finds->titre}} </span>  <br>
        <label for="">PHOTO :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </label><span>  {{$finds->photo}} </span>  <br>
    </div>
</div>
<div class="d-flex justify-content-center m-3 p-3">
    <a href="{{route('gestion_personnel.index') }}" class="btn btn-primary"> Retour</a>
</div>

@endsection

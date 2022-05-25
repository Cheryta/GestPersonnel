@extends('layout.main')
@section('contenu')
<h2 class="text-center text-primary p-3">MODIFICATION  DES DONNEES D'UN PERSONNEL </h2>
<h4 class="text-center p-2">Veuillez remplir pour modifier un personnel !!!</h4>
<div class="container">
    <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_personnel.update', [$finds->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">MATRICULE</label>
            <input type="text" class="form-control" value="{{ $finds->matricule }}" name="matricule" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NOM</label>
            <input type="text" class="form-control" value="{{ $finds->nom }}" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PRENOM</label>
            <input type="text" class="form-control" value="{{ $finds->prenom }}" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="col-sm-3 control-label">GENRE</label>
            <div class="col-sm-12">
                <select class="form-select" type="text" aria-label="Default select example" value="{{ $finds->genre }}" name="genre">
                    <option selected> Genre </option>
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">POSTE</label>
            <input type="text" class="form-control" name="poste" value="{{ $finds->poste }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">TITRE</label>
            <input type="text" class="form-control" name="titre" value="{{ $finds->titre }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PHOTO</label>
            <input type="file" class="form-control" name="photo" value="{{ $finds->photo }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="container d-flex">
            <div>
                <button type="submit" class="btn btn-info w-100"  onclick="return confirm('Voulez-vous vraiment modifier?')">Modifier</button>
            </div> &nbsp;&nbsp;&nbsp;
        </div>
    </form>
</div>
@endsection
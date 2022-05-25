@extends('layout.main')
@section('contenu')

<h2 class="text-center text-primary p-3">FORMULAIRE D'AJOUT DU PERSONNEL </h2>
<h4 class="text-center p-2">Veuillez remplir ce formulaire pour ajouter un nouveau personnel !!!</h4>
<div class="container">
    <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_personnel.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">MATRICULE</label>
            <input type="text" class="form-control" name="matricule" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NOM</label>
            <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PRENOM</label>
            <input type="text" class="form-control" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="col-sm-3 control-label">GENRE</label>
            <div class="col-sm-12">
                <select class="form-select" type="text" aria-label="Default select example" name="genre">
                    <option selected> Genre </option>
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">POSTE</label>
            <input type="text" class="form-control" name="poste" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">TITRE</label>
            <input type="text" class="form-control" name="titre" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PHOTO</label>
            <input type="file" class="form-control" name="photo" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="container d-flex">
            <div>
                <button type="submit" class="btn btn-info w-100">Enregistrer</button>
            </div> &nbsp;&nbsp;&nbsp;
            <div>
                <button type="reset" class="btn btn-primary w-100">Annuler</button>
            </div>
        </div>
    </form>
</div>
@endsection
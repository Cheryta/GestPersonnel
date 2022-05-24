@extends("layouts.menu")

@section("contenu")

<h2 class="text-center text-primary p-3">FORMULAIRE D'AJOUT DU PERSONNEL </h2>
    <h4 class="text-center p-2">Veuillez remplir ce formulaire pour ajouter un nouveau personnel !!!</h4>
    <div class="container">
        <div class="col-md-12 m-2 p-3">
            <form method="post" action="{{route('insertion')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <label  class="form-label">MATRICULE</label>
                <input type="text" class="form-control" name="matricule" placeholder="Matricule du personnel">
                </div>
                <div class="mb-3">
                <label  class="form-label">NOM</label>
                <input type="text" class="form-control" name="nom" placeholder="Entrer le nom du personnel">
                </div>
                <div class="mb-3">
                <label  class="form-label">PRENOM</label>
                <input type="text" class="form-control" name="prenom" placeholder="Entrer le prénom du personnel">
                </div>
                <div class="mb-3">
                    <label  class="form-label">GENRE</label>
                    <select class="form-select" name="genre" aria-label="Default select example">
                        <option selected>Genre</option>
                        <option value="Masculin">Masculin</option>
                        <option value="Feminin">Feminin</option>
                    </select>
                </div>
                <div class="mb-3">
                <label  class="form-label">POSTE</label>
                <input type="text" class="form-control" name="poste" placeholder="Entrer son poste">
                </div>
                <div class="mb-3">
                <label  class="form-label">TITRE</label>
                <input type="text" class="form-control" name="titre" placeholder="Entrer le titre">
                </div>
                <div class="mb-3">
                <label  class="form-label">PHOTO</label>
                <input type="file" class="form-control" name="photo" placeholder="Choisir une photo">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-info btn-lg" value="valider">Enregistrer</button>
                    <button type="reset" class="btn btn-primary btn-lg">Annuler</button>
                </div>
            </form>
        </div>
    </div>
@endsection

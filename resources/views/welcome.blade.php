@extends('layout.main')
@section('contenu')

<h2 class="text-center text-primary p-3">BIENVENUE DANS L'APPLICATION DE GESTION DU PERSONNEL HCR </h2>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('Images/caroussel1.jpg') }}" style="height:530px" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('Images/caroussel2.jpg') }}" style="height:530px" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('Images/caroussel3.jpg') }}" style="height:530px" class="d-block w-100" alt="">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection
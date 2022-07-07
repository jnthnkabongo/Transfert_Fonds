@extends('header.headfoot')
@section('content')

<div class="container">
    <form>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Matricule</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Sexe</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Téléphone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-primary">Ajouter</button>
        </div>
    </form><!-- End General Form Elements -->
</div>
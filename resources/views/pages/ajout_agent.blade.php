@extends('header.headfoot')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Agents</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
          <li class="breadcrumb-item">ajouter un agent</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter un agent</h5>

              <!-- General Form Elements -->
              <form method="GET" action="{{route('valideAgent')}}">
              @csrf
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label">matricule</label>
                  <div class="col-sm-10">
                    <input type="text" name="matricule" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
                  <div class="col-sm-10">
                    <input type="text" name="nom" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label">Prenom</label>
                  <div class="col-sm-10">
                    <input type="text" name="prenom" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label">Sexe</label>
                  <div class="col-sm-10">
                      <select name="sexe" id="" class="form-control">
                          <option value="M">Masculin</option>
                          <option value="F">Feminin</option>
                      </select>
                  </div>
                </div>
                <br>
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label">Numero de telephone</label>
                  <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label">Adresse Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label"> Mot de passe</label>
                  <div class="col-sm-10">
                    <input type="text" name="password" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection

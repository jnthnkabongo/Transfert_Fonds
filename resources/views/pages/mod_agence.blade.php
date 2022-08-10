@extends('header.headfoot')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Modifier une agence</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
          <li class="breadcrumb-item">Modifier une agence</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Modifier une agence</h5>

              <!-- General Form Elements -->
              <form method="GET" action="{{route('valideAgence')}}">
              @csrf
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label">Nom agence</label>
                  <div class="col-sm-10">
                    <input type="text" name="nom_agence" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
                  <div class="col-sm-10">
                    <input type="text" name="adresse" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label">Numero de service</label>
                  <div class="col-sm-10">
                    <input type="text" name="phone_service" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label">Pays</label>
                  <div class="col-sm-10">
                      <select name="id_pays" id="" class="form-control">
                        <option value="">7</option>
                      </select>
                  </div>
                </div>
                <br>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Modifier</button>
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

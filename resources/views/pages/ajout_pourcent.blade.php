@extends('header.headfoot')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Pourcentage</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
          <li class="breadcrumb-item">ajouter un pourcentage</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter un pourcentage</h5>

              <!-- General Form Elements -->
              <form method="GET" action="{{route('validePourcent')}}">
              @csrf
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label">Pourcentage en USD</label>
                  <div class="col-sm-10">
                    <input type="text" name="p_usd" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row mb-6">
                  <label for="inputText" class="col-sm-2 col-form-label">Pourcentage en FC</label>
                  <div class="col-sm-10">
                    <input type="text" name="p_cdf" class="form-control">
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

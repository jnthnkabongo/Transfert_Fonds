@extends('header.headfoot')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Liste des pays</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
        <li class="breadcrumb-item active">Liste des pays</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Liste des pays</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Numero d'envoie</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Devise</th>
                    <th scope="col">Experditeur</th>
                    <th scope="col">Beneficiaire</th>
                    <th scope="col">Numero de telephone exp</th>
                    <th scope="col">Agence</th>
                    <th scope="col">Pays</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1
                @endphp
                @foreach($tableau as $response)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$response['num_envoi']}}</td>
                    <td>{{$response['montant_envoi']}}</td>
                    <td>{{$response['id_devise']}}</td>
                    <td>{{$response['expediteur']}}</td>
                    <td>{{$response['beneficiaire']}}</td>
                    <td>{{$response['phone_exp']}}</td>
                    <td>{{$response['id_agence']}}</td>
                    <td>{{$response['id_pays']}}</td>
                    <td>{{$response['created_at']}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

            </div>
        </div>

        </div>
    </div>
    </section>

</main>
@endsection
<!--End Basic Modal-->
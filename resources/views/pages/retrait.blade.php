@extends('header.headfoot')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
    <h1>Liste retraits</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
        <li class="breadcrumb-item active">Liste retraits</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Liste retrait</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Expediteur</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Bénéficiaire</th>
                    <th scope="col">Code</th>
                    <th scope="col">Id pays</th>
                    <th scope="col">Id agence</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($tableau as $response)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$response['expediteur']}}</td>
                            <td>{{$response['phone']}}</td>
                            <td>{{$response['beneficiaire']}}</td>
                            <td>{{$response['code']}}</td>
                            <td>{{$response['id_pays']}}</td>
                            <td>{{$response['id_agence']}}</td>

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

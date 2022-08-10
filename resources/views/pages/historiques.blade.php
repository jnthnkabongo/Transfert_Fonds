@extends('header.headfoot')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>L'historique</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
        <li class="breadcrumb-item active">L'historique</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">


            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Operation</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($tableau as $response)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$response['operations']}}</td>
                    <td>{{$response['nom']}}</td>
                    <td>{{$response['created_at']}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- End Table with stripped rows -->
            <div><button class="btn btn-danger">Vide l'historique</button></div>
            </div>
        </div>

        </div>
    </div>
    </section>

</main>
@endsection
<!--End Basic Modal-->

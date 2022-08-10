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
                    <th scope="col">Nom</th>
                    <th scope="col">Code Pays</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1
                @endphp
                @foreach($tableau as $response)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$response['nom']}}</td>
                    <td>{{$response['code_pays']}}</td>
                    <td>{{$response['created_at']}}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="{{route('mod_pays')}}"> <i class="bi bi-pencil-square"></i> </a>
                        <a class="btn btn-danger btn-sm" href="{{route('supprimer_pays', $response['id'])}}"> <i class="bi bi-trash-fill"></i> </a>
                    </td>
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

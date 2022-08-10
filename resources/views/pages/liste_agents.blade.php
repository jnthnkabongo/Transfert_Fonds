@extends('header.headfoot')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Liste des agents</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
        <li class="breadcrumb-item active">Liste des agents</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Liste des agents</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Matricule</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
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
                    <td>{{$response['matricule']}}</td>
                    <td>{{$response['nom']}}</td>
                    <td>{{$response['prenom']}}</td>
                    <td>{{$response['sexe']}}</td>
                    <td>{{$response['phone']}}</td>
                    <td>{{$response['email']}}</td>
                    <td>{{$response['password']}}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="{{route('mod_agent')}}"> <i class="bi bi-pencil-square"></i> </a>
                        <a class="btn btn-danger btn-sm" href="{{route('supprimer_agent', $response['id'])}}"> <i class="bi bi-trash-fill"></i> </a>
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

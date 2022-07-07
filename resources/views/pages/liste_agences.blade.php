@extends('header.headfoot')
@section('content')


<div class="premiere">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xs-3 col-md-3"></div>
            <div class="col-xs-9 col-md-9 ">
                <div class="card py-5">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-xs-4 col-md-4  justify-content-between"></div>
                            <div class="col-xs-4 col-md-4  justify-content-center">
                                <h2>Liste des agences</h2>
                            </div>
                            <div class="col-xs-4 col-md-4 justify-content-end">
                                <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#basicModal">Ajouter une agence</button>
                            </div>
                        </div>
                        <!-- Tableau avec bordures -->
                        <table class="table datatable table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Start Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Brandon Jacob</td>
                                    <td>Designer</td>
                                    <td>28</td>
                                    <td>2016-05-25</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                    <td>35</td>
                                    <td>2014-12-05</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                    <td>45</td>
                                    <td>2011-08-12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Angus Grady</td>
                                    <td>HR</td>
                                    <td>34</td>
                                    <td>2012-06-11</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                    <td>47</td>
                                    <td>2011-04-19</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- FIn du tableau avec bordures -->
                    </div>
                </div>
            </div>
            <div class="col-xs-2 col-md-2 col-sm-2"></div>
        </div>
    </div>
</div>

<!--Basique  Modal-->

<div class="modal fade" id="basicModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajout d'une Agence</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="pays">Nom</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="code">Adresse</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="code">Phone service</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="code">Pays</label>
                            <select class="form-control" name="" id="">
                                <option value="choix">pays</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermez</button>
                            <button type="button" class="btn btn-primary">Ajoutez</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!--End Basic Modal-->
@endsection
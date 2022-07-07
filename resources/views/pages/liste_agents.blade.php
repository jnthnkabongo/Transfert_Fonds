@extends('header.headfoot')
@section('content')


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
      <div class="premiere">
        <div class="container">
          <div class="col-lg-12 col-md-12 ">
            <div class="card py-5">
              <div class="card-body">
                <div class="row ">
                  <div class="col-xs-4 col-md-4  justify-content-center">
                    <h2>Liste des agents</h2>
                  </div>
                  <div class="col-xs-4 col-md-4 justify-content-end">
                    <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#basicModal">Ajouter un agent</button>
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
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--Basique  Modal-->

<div class="modal fade" id="basicModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajout d'un Agent</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form method="GET" action="{{route('ajout_agents')}}">
            @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Matricule</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="matricule">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nom">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Sexe</label>
              <div class="col-sm-10">
                <select class="form-control" name="sexe" id="">
                  <option value="choix">sexe</option>
                  <option value="M">M</option>
                  <option value="F">F</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Téléphone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="phone">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="mdp">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
              <button type="button" name="b " class="btn btn-primary">Ajouter</button>
            </div>
          </form><!-- End General Form Elements -->
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<!--End Basic Modal-->
@endsection

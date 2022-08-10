<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Transfert de Fonds</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{route('home')}}" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">FMT</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                           <h6>Robert</h6>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{route('profil')}}">
                                <i class="bi bi-person"></i>
                                <span>Mon Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{route('log_out')}}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Déconnexion</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{route('home')}}">
                    <i class="bi bi-grid"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Pays</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <!--<li>
                    <a href="{{route('ajout_pays')}}">
                        <i class="bi bi-circle"></i><span>Ajouter un pays</span>
                    </a>
                </li>-->
                    <li>
                        <a href="{{route('ajoutPays')}}">
                            <i class="bi bi-circle"></i><span>Ajouter un pays</span>
                        </a>
                        <a href="{{route('liste_pays')}}">
                            <i class="bi bi-circle"></i><span>Liste des pays</span>
                        </a>

                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#trans" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Transactions</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="trans" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('depot')}}">
                            <i class="bi bi-circle"></i><span>Dépot</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('retrait')}}">
                            <i class="bi bi-circle"></i><span>Retrait</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#agents" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i><span>Agents</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="agents" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('ajout_agents')}}">
                            <i class="bi bi-circle"></i><span>Ajouter un agent</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('liste_agents')}}">
                            <i class="bi bi-circle"></i><span>Liste des agents</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('affectation')}}">
                            <i class="bi bi-circle"></i><span>Affectation</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#agence" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-house"></i><span>Agences</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="agence" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                    <a href="{{route('ajout_agences')}}">
                        <i class="bi bi-circle"></i><span>Ajouter une agence</span>
                    </a>
                </li>
                    <li>
                        <a href="{{route('liste_agences')}}">
                            <i class="bi bi-circle"></i><span>Liste agences</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#devise" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-currency-dollar"></i><span>Dévise</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="devise" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('affiche_formulaire')}}">
                            <i class="bi bi-circle"></i><span>Ajouter une devise</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('liste_devise')}}">
                            <i class="bi bi-circle"></i><span>Liste des devises</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#pourcentage" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-percent"></i><span>Pourcentage</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="pourcentage" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('ajout_pourcent')}}">
                            <i class="bi bi-circle"></i><span>Ajouter un pourcentage</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('liste_pourcent')}}">
                            <i class="bi bi-circle"></i><span>Liste pourcentages</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('historiques')}}">
                    <i class="bi bi-card-list"></i>
                    <span>Historiques</span>
                </a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->

    @yield('content')



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="public/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>

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
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<main id="" class="">
    <div class="container">
        <div>
            <div class="mb-5"></div>
            <section class="section">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">

                        <div class="card">
                        <div class="card-body">
                            <center><h3 class="py-3 mb-5">Modification les informations de l'administrateur</h3></center>
                            <!-- General Form Elements -->
                            <form method="GET" action="">
                            @csrf
                            <div class="row mb-6">
                                <label for="inputText" class="col-sm-3 col-form-label">Nom</label>
                                <div class="col-sm-9">
                                <input type="text" name="nom" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row mb-6">
                                <label for="inputText" class="col-sm-3 col-form-label">Adresse Email</label>
                                <div class="col-sm-9">
                                <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row mb-6">
                                <label for="inputText" class="col-sm-3 col-form-label"> Mot de passe</label>
                                <div class="col-sm-9">
                                <input type="password" name="mdp" class="form-control">
                                </div>
                            </div>
                            <br>
                            <center>
                                <div class="row mb-6">
                                    <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-md">Modifier les informations</button>
                                    </div>
                                </div>
                            </center>
                            </form><!-- End General Form Elements -->
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </section>
        </div>
    </div>
</main>


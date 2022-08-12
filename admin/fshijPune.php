<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

        <title>ikJobs</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">

    <div id="wrapper">

<?php

use Admin\Libs\Punet;

 include 'includes/sidebar.php' 
?>
        <div id="content-wrapper" class="d-flex flex-column">
            
            <?php include 'includes/topbar.php' ?>

                <div id="layoutSidenav_content">
<main>
        <div class="container-fluid">
            
            <div class="row justify-content-center">
                <?php
                $puna = new Punet();
                if (isset($_GET['punaid'])) {
                    $puna = $puna->find_id(($_GET['punaid']));
                }
                if (isset($_POST['fshijPune'])) {
                    if($puna->delete()){
                        
                        header("Location: punet.php");
                    }
                }
                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Fshij Punen</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">Kompania :</label>
                                    <input class="form-control py-4" name="firstname" id="firstname" type="text" 
                                    placeholder="Enter first name" value="<?php if(!empty($puna->getKompania())){ echo $puna->getKompania();} ?>" />
                                </div>
                                
                                <div class="form-group">
                                    <label class="small mb-1" for="lastname">Kategoria :</label>
                                    <input class="form-control py-4" name="lastname" id="lastname" type="text" 
                                    placeholder="Enter last name" value="<?php if(!empty($puna->getKategorit_emri())){ echo $puna->getKategorit_emri();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="phone">Pozita :</label>
                                    <input class="form-control py-4" name="phone" id="phone" type="text" 
                                    placeholder="Enter phone number" value="<?php if(!empty($puna->getTitulliPunes())){ echo $puna->getTitulliPunes();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Pershkrimi :</label>
                                    <input class="form-control py-4" name="email" id="email" type="text" 
                                    placeholder="Enter email address" value="<?php if(!empty($puna->getPershkrimi())){ echo $puna->getPershkrimi();} ?>"  />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Paga :</label>
                                    <input class="form-control py-4" name="password" id="password" type="text" 
                                    placeholder="Enter email password" value="<?php if(!empty($puna->getPaga())){ echo $puna->getPaga();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Komuna :</label>
                                    <input class="form-control py-4" name="password" id="password" type="text" 
                                    placeholder="Enter email password" value="<?php if(!empty($puna->getKomuna())){ echo $puna->getKomuna();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Data :</label>
                                    <input class="form-control py-4" name="password" id="password" type="text" 
                                    placeholder="Enter email password" value="<?php if(!empty($puna->getData())){ echo $puna->getData();} ?>" />
                                </div>
                                
                                <input class="btn btn-primary" id="login" value="Fshij Punen" type="submit" name="fshijPune" />
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small">
                                <a href="admin.php">
                                    Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
       
            <?php include 'includes/footer.php' ?>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    








    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/jquery.min.js"></script>


</body>

</html>
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

use Admin\Libs\Kategorit;
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
                $pune = new Punet();
                if (isset($_GET['punaid'])) {
                    $pune = $pune->find_id(($_GET['punaid']));
                }
                if (isset($_POST['modifiko'])) {
                    $pune->setKompania($_POST['kompania']);
                    $pune->setKategorit_emri($_POST['kategoriEmri']);
                    $pune->setTitulliPunes($_POST['pozita']);
                    $pune->setPershkrimi($_POST['pershkrimi']);
                    $pune->setPaga($_POST['paga']);
                    $pune->setKomuna($_POST['komuna']);
                    $pune->setData($_POST['data']);
                    $pune->update();
                    header("Location: punet.php");
                    }
                    ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Modifiko Punen</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">Kompania :</label>
                                    <input class="form-control py-4" name="kompania" id="firstname" type="text" 
                                    placeholder="Enter first name" value="<?php if(!empty($pune->getKompania())){ echo $pune->getKompania();} ?>" />
                                </div>
                                <div>
            <select id="kategoriEmri" name="kategoriEmri">
                    <option value="">Zgjedh kategorin </option>
                    <?php
                     $kategoria = new Kategorit();
                            foreach ($kategoria->find_all() as $k)
                             echo '<option value="'. $k->getId() . '">'.$k->getEmri().'</option>'; 
                    ?>
                </select>
            </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="phone">Pozita :</label>
                                    <input class="form-control py-4" name="pozita" id="phone" type="text" 
                                    placeholder="Enter phone number" value="<?php if(!empty($pune->getTitulliPunes())){ echo $pune->getTitulliPunes();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Pershkrimi :</label>
                                    <input class="form-control py-4" name="pershkrimi" id="email" type="text" 
                                    placeholder="Enter email address" value="<?php if(!empty($pune->getPershkrimi())){ echo $pune->getPershkrimi();} ?>"  />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">paga :</label>
                                    <input class="form-control py-4" name="paga" id="password" type="text" 
                                    placeholder="Enter email password" value="<?php if(!empty($pune->getPaga())){ echo $pune->getPaga();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Komuna :</label>
                                    <input class="form-control py-4" name="komuna" id="password" type="text" 
                                    placeholder="Enter email password" value="<?php if(!empty($pune->getKomuna())){ echo $pune->getKomuna();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Data :</label>
                                    <input class="form-control py-4" name="data" id="password" type="date" 
                                    placeholder="Enter email password" value="<?php if(!empty($pune->getData())){ echo $pune->getData();} ?>" />
                                </div>
                               
                                
                                
                                <input class="btn btn-primary" id="login" value="Modifiko Punen" type="submit" name="modifiko" />
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
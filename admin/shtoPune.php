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
                $puna = new Punet();
                if (isset($_POST['shto_pune'])) {
                    $puna->setKompania($_POST['kompania']);
                    $puna->setKategoriaid($_POST['kategoriEmri']);
                    $puna->setTitulliPunes($_POST['pozita']);
                    $puna->setPershkrimi($_POST['pershkrimi']);
                    $puna->setPaga($_POST['paga']);
                    $puna->setKomuna($_POST['komuna']);
                    $puna->setData($_POST['data']);
                    $puna->create();
                    header("Location: punet.php");     
                }
                ?>

                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Shto Punen</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">Kompania :</label>
                                    <input class="form-control py-4" name="kompania" id="firstname" type="text" 
                                    placeholder="Shkruani Emrin e Kompanise" value="">
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
                                    placeholder="Shkruani Emrin e Pozites" value="" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Pershkrimi :</label>
                                    <input class="form-control py-4" name="pershkrimi" id="email" type="text" 
                                    placeholder="Shkruani Pershkrimin" value=""  />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Paga :</label>
                                    <input class="form-control py-4" name="paga" id="password" type="text" 
                                    placeholder="Shkruani Pagen" value="" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Komuna :</label>
                                    <input class="form-control py-4" name="komuna" id="password" type="text" 
                                    placeholder="Shkruani Komunen" value="" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Data :</label>
                                    <input class="form-control py-4" name="data" id="password" type="date" 
                                    placeholder="Shkruani Daten" value="" />
                                </div>
       
                                
                                
                                <input class="btn btn-primary" id="login" value="Shto Punen" type="submit" name="shto_pune" />
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
       </div>
    </div>  
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
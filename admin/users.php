<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ikJobs</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

    <?php

use Admin\Libs\Users;

    include "includes/sidebar.php"?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

        <?php include "includes/topbar.php"?>

                <div class="container-fluid">

                        <!-- tabela -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Perdoruesit</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Emri</th>
                                            <th>Mbiemri</th>
                                            <th>telefoni</th>
                                            <th>Email</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                $user = new Users();
                                foreach ($user->find_all() as $u) {
                                    echo "<tr>";
                                    echo "<td>". $u->getEmri() . "</td>";
                                    echo "<td>". $u->getMbiemri() . "</td>";
                                    echo "<td>". $u->getTelefoni() . "</td>";
                                    echo "<td>". $u->getEmail() . "</td>";
                                    echo "<td><a href='modifikoUser.php?userid=". $u->getId() ."'>Edit</td>";
                                    echo "<td><a href='fshijUser.php?userid=". $u->getId() ."'>Delete</a></td>";
                                    echo "</tr>";

                                }
                    
                                ?>
                                    </tbody>
                                </table>
                    <!-- tabela -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php include "includes/footer.php"?>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
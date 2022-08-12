<head>
<meta charset="utf-8">
    <title>Apliko</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Google Web Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body >
    <?php

use Admin\Libs\Aplikimet;

 include 'includes/header.php'?>
    <?php 
        $rezervimet = new Admin\Libs\Aplikimet;
        if(isset($_POST['apliko']) && isset($_FILES['cv'])){
                $rezervimet->setPid($_POST['pid']);
                $rezervimet->setEmri($_POST['emri']);
                $rezervimet->setMbiemri($_POST['mbiemri']);
                $rezervimet->setEmail($_POST['email']);
                $rezervimet->setTelefoni($_POST['telefoni']);
                $rezervimet->setCvImage($_FILES['cv']);
                $rezervimet->create();
                ?><script>
                    alert("Aplikimi u krye me Sukses")
                
                </script>
                
                
        <?php
        }

    ?>
<section  style="background-color: #00B074; height: 120vh;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <h1 class="text-white mb-4">Aplikimi per Pune</h1>

            <form method="post" enctype="multipart/form-data">

 

        </div>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">


          <?php
                                $punet = new Admin\Libs\Punet();
                                if (isset($_GET['pid'])) {
                                    $punet = $punet->find_id(($_GET['pid']));
                                ?>

            <div class="col-md-9 pe-5">

<input type="text" class="form-control form-control-lg" name="pid" hidden placeholder="Pid" value="<?php if (isset($_GET['pid'])) echo $_GET['pid']   ?>" />

</div>
<?php  } ?>
            <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Emri</h6>
                </div>
                <div class="col-md-9 pe-5">
                    <input type="text" class="form-control form-control-lg" name="emri" placeholder="Emri" />
                </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Mbiemri</h6>
                </div>
              <div class="col-md-9 pe-5">
                    <input type="text" name ="mbiemri"class="form-control form-control-lg" placeholder="Mbiemri" />
              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Email Adresa</h6>
                </div>
                <div class="col-md-9 pe-5">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email Adresa " />
                </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Telefoni</h6>
                </div>
              <div class="col-md-9 pe-5">
                   <input type="text" name="telefoni" class="form-control form-control-lg" placeholder="Telefoni" />
              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Vendose CV</h6>
                </div>
                <div class="col-md-9 pe-5">
                    <input class="form-control form-control-lg" name="cv" id="formFileLg" type="file" />
                <div class="small text-muted mt-2">Vendose CV/Resume ne Forme te Fotos. Madhesia e CV/Resumet
                  duhet te jete me pak se 2 MB</div>
                </div>
            </div>

            <hr class="mx-n3">

            <div class="px-5 py-4">
              <input type="submit" name="apliko" value="Apliko" class="btn btn-primary btn-lg"></input>
            </div>

          </div>
        </div>
      </div>
    </div>
</form>
</section>
</body>

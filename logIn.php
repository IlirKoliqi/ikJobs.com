<?php
ob_start();
require_once ('admin/autoloader.php');?>
<head>
<meta charset="utf-8">
    <title>LogIn ne Admin</title>
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
 
<body>
    <?php

use Admin\Libs\Session;

    $session = new Session();
    if($session->isSignedIn()){
        header("Location: admin/admin.php");
    }
    
    ?>
<?php

use Admin\Libs\Users;

		if (isset($_POST['kyqu'])) {
			$email=$_POST['email'];
			$fjalekalimi=$_POST['fjalekalimi'];
			$user=new Users();
			$user=$user->verifyUser($email,$fjalekalimi);
			if($user){
				$session->login($user);
				header("Location: admin/admin.php");
			}else{
				?>
                <script> 
                alert("Email ose Fjalekalimi eshte gabim")
            </script>
            <?php
			}
		}else{
			$email="";
			$password="";
			$session->message();
		}
    ?>

<section class="vh-100" style="background-color: #00B074;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img/logInPhoto.jpg" 
                alt="login form" class="img-fluid" style="border-radius: 1rem 1rem 1rem 1rem; height:600px;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form method="post" id="kyqu" action="">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <a href= "index.php"><img src="img/logInLogo.png" style="height:100px; width :100px;"></a>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Hyr ne Admin Panel</h5>

                  <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Email adresa</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="fjalekalimi" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Fjalekalimi</label>
                  </div>

                  <div class="pt-1 mb-4">
                  <input class="btn btn-primary" id="kyqu" value="kyqu" type="submit" name="kyqu" style="border-radius:5px;"/>
                  </div>

                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
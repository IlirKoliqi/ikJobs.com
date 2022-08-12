
<head>
    <title>Krijo CV</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/orbit-1.css">
    <style>
        .gradient-custom{
    background-color: #00B074;
    height: 150vh;
        }

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
    </style>
</head> 
    
<section class=" gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Krijo CV</h3>
            <form action="cv.php" method="post" >

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="emriMbiemri" id="EmriMbiemri" class="form-control form-control-lg" />
                    <label class="form-label" for="EmriMbiemri">Emri dhe Mbiemri</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="profesioni" id="Profesioni" class="form-control form-control-lg" />
                    <label class="form-label" for="Profesioni">Profesioni</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" name="vitiIlindjes" class="form-control form-control-lg" id="VitiiLindjes" />
                    <label for="VitiiLindjes" class="form-label">Viti i Lindjes</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" name="komuna" class="form-control form-control-lg" id="Komuna" />
                    <label for="Komuna" class="form-label">Komuna</label>
                  </div>

                </div>
                
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text"name="llojiEdukimit" id="LlojiEdukimit" class="form-control form-control-lg" />
                    <label class="form-label" for="LlojiEdukimit">Lloji i Edukimit</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" name="fakullteti" id="Fakullteti" class="form-control form-control-lg" />
                    <label class="form-label" for="Fakullteti">Fakullteti</label>
                  </div>

                </div>
              </div>

              <div class="row">
              <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text"name="gjuhet" id="Gjuhet" class="form-control form-control-lg" />
                    <label class="form-label" for="Gjuhet">Gjuhet</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" name="telefoni" id="Telefoni" class="form-control form-control-lg" />
                    <label class="form-label" for="Telefoni">Telefoni</label>
                  </div>

                </div>
              </div>
              <div class="row">
              <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email"name="email" id="Email" class="form-control form-control-lg" />
                    <label class="form-label" for="Email">Email</label>
                  </div>

                </div>
              </div>

              <div class="row">
              <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <textarea type="text" name="profiliKarrieres" id="ProfiliKarrieres" rows="3" class="form-control form-control-lg" ></textarea>
                    <label class="form-label" for="ProfiliKarrieres">Profili i Karriers</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <textarea  name="skills" id="Skills" rows="3" class="form-control form-control-lg" ></textarea>
                    <label class="form-label" for="Skills">Skills</label>
                  </div>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input style="background-color:#00B074; border-color:#00B074" class="btn btn-primary btn-lg" type="submit" name="krijoCv" value="Krijoje Cv" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
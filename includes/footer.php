       <?php

use Admin\Libs\NewsLetter;

       ob_start();
       require_once ('admin/autoloader.php');
       ?>
       <!-- Footeri -->
       <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5 d-flex justify-content-between" >
                    <div class="col-lg-3 col-md-6 " >
                       <h5 id="contact" class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Mitrovice, Kosove</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>049 582 443</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>ilirkoliqi2@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <?php
                    $newsletter = new NewsLetter();
                    if (isset($_POST['subscribe'])){
                        $newsletter->setPershkrimi($_POST['pershkrimi']);
                        $newsletter->setEmail($_POST['email']);
                        $newsletter->create();
                        header("Location: index.php");
                    }
                    ?>
                    
                <div class="col-lg-3 col-md-6 " >
                    <form method="post">
                        <h5 class="text-white mb-4">Newsletter</h5>
                            <p>Subscribe ne Newsletter per Punet ne Fushen Tuaj</p>
                            <label for="Pershkrimi">Shkruani Fushen ne te cilen jeni te Interesuar</label>
                        <input type="text" class="form-control bg-transparent w-100 py-3 ps-4 pe-5" name="pershkrimi" id="Pershkrimi" ></input>
                        <br>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" name="email" placeholder="Shkruani Email ">
                                <input type="submit" name="subscribe" value="Subscribe" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"></input>
                        </div>
                    </form>
                </div>
                    
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 ">
                            &copy; <a class="border-bottom" href="#">ikJobs.com</a>, All Right Reserved. 
							Designed By <a class="border-bottom" href="https://htmlcodex.com">Ilir Koliqi</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Footeri -->
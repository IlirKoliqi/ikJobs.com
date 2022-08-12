<!DOCTYPE html>
<html lang="en">
    

<?php

use Admin\Libs\Kategorit;
use Admin\Libs\Punet;

    include "includes/header.php";
?>

        <!-- Carousel -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Të gjitha ëndrrat tona mund të realizohen</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Zgjidhni një punë që e doni dhe nuk do t'ju duhet të punoni asnjë ditë në jetën tuaj.</p>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Nuk është kurrë vonë për të qenë ai që mund të keni qenë.</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Apliko dhe jetoni jeten qe e imagjinoni</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel -->



        <!-- Kategorit -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Gjeni sipas Kategorise</h1>
                <div class="row g-4">
                
                    <?php
                        $kategorit = new Kategorit();
                        foreach($kategorit->find_all() as $k){
                            
                            echo '<div class="col-lg-3 col-sm-6 wow fadeInUp align-items-center" data-wow-delay="0.1s">';
                            echo "<td><a  class='cat-item rounded p-4' href='punetSipasKategorise.php?kategoriaid=". $k->getId() ."'></td>";
                            echo '<h6 class="mb-3 ">'.$k->getEmri().'</h6>';
                            echo '</a>';
                            echo '</div>';
                            
                        }
                    
                    ?>
                    </div>
            </div>
        </div>
        <!-- Kategorit -->

        <!-- Punet -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Konkurset e Fundit</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    
                     <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                                <?php
                                    $pune = new Admin\Libs\Punet();
                                    $i = 0;
                                    foreach($pune->find_all() as $p){
                                        echo '<div class="job-item p-4 mb-4">';
                                        echo '<div class="row g-4">';
                                        echo '<div class="col-sm-12 col-md-8 d-flex align-items-center">';
                                        echo '<div class="text-start ps-4 ">';
                                        echo '<h5 class="mb-2">' .$p->getTitulliPunes().'</h5>';
                                        echo '<div class="d-inline>"';
                                        echo '<span class="text-truncate me-3 mb-2 ">'. $p->getPershkrimi().'</span>';
                                        echo '</div>';
                                        echo '<span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>'. $p->getKomuna().'</span>';
                                        echo '<span class="text-truncate me-3"><i class="fa-solid fa-building text-primary me-2"></i>'. $p->getKompania().'</span>';
                                        echo '<span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>'. $p->getPaga().'</span>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '<div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">';
                                        echo '<div class="d-flex mb-3">';
                                        echo "<a class='btn btn-primary' href='apliko.php?pid=".$p->getId()."'>Apliko</a>";
                                        echo'</div>';
                                        echo '<small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line:'. $p->getData().'</small>';
                                        echo'</div>';
                                        echo'</div>';
                                        echo '</div>';
                                        echo '<br>';
                                        echo '<br>';
                                        $i++;
                                    if($i > 4) {
                                        break;
                                    }
                                    }
                                    
                                    
                                ?>
                                
                            <!-- <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Wordpress Developer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apliko</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Punet --> 

        <!-- Klientet -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="text-center mb-5">Klientet tane!</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>"
                            Për të qenë një kampion i madh, duhet të besosh se je më i miri. Nëse nuk jeni, pretendoni se jeni."
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Altin Selmani</h5>
                                <small>Arkitekt</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>"Askush nuk shkon shumë larg nëse nuk e arrin të pamundurën të paktën një herë në ditë." </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Albion Rexha</h5>
                                <small>Avokat</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>
                            “Ne mendojmë se detyra jonë është të marrim përgjegjësinë për përvojën e plotë të përdoruesit.”
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Festim Lushta</h5>
                                <small>QA Engineer</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>"Bazat e biznesit janë të qëndroni sa më afër klientëve tuaj - të kuptoni sjelljen e tyre etj."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Hysen Breznica</h5>
                                <small>Web Developer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Klientet -->
        
        <?php
            include "includes/footer.php"
        ?>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>
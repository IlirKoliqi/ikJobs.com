<?php

use Admin\Libs\Kategorit;
use Admin\Libs\Punet;

    include "includes/header.php";
?>
<!DOCTYPE html>
<head>
    <title>Punet Sipas Kategorise</title>
</head>
<html lang="en">
<body>

    <!-- Punet -->
<div class="container-xxl py-5">

    <div class="container">
            <?php
            $kategoria = new Kategorit();
            if (isset($_GET['kategoriaid'])) {
                    foreach($kategoria->find_EmriById($_GET['kategoriaid']) as $k){
                        echo '<h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Konkurset per '.$k->getEmri().' </h1>';

                    }
        
            }

        ?>

                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    
                     <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                                <?php
                                     $punet = new Punet();
                                     if (isset($_GET['kategoriaid'])) {
                                        foreach($punet->gjejPunetSipasKategorise(($_GET['kategoriaid'])) as $p){
                                        echo '<div class="job-item p-4 mb-4">';
                                        echo '<div class="row g-4">';
                                        echo '<div class="col-sm-12 col-md-8 d-flex align-items-center">';
                                        echo '<div class="text-start ps-4">';
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
                                    }
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Punet --> 

        <!-- Kategorite -->
        <div class="container-xxl py-5">
        <div class="container">
        <?php
            $kategoria = new Kategorit();
            if (isset($_GET['kategoriaid'])) {
                    foreach($kategoria->find_EmriById($_GET['kategoriaid']) as $k){
                        echo '<h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Konkurset per '.$k->getEmri().' Sipas Komunes </h1>';

                    }
        
            }

        ?>
                <div class="row g-4">
                    <?php
                    if (isset($_GET['kategoriaid'])) {
                        $puna = new Punet();
                        
                        foreach($puna->gjejKomunat() as $p){
                            
                            echo '<div class="col-lg-3 col-sm-6 wow fadeInUp align-items-center" data-wow-delay="0.1s">';
                            echo "<td><a  class='cat-item rounded p-4' href='punetSipasKomunes.php?komuna=". $p->getKomuna().'&kategoria='.($_GET['kategoriaid'])."'></td>";
                            echo '<h6 class="mb-2 text-center">'.$p->getKomuna().'</h6>';
                            echo '</a>';
                            echo '</div>';
                            
                        }
                    }
                    ?>
                </div>
            </div>
                    <!-- Kategorite -->
        
</div>
<?php
            include "includes/footer.php"
        ?>
</body>
</html>
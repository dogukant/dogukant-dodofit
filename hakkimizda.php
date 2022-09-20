 <?php
 $sayfa="hakkımızda"; 
 include 'include/db.php';
 $sorgu=$baglanti->prepare("SELECT * FROM hakkimizda");
  $sorgu->execute();
  $sonuc=$sorgu->fetch();
  $tanimlama=$sonuc["tanimlama"];
  $anahtar=$sonuc["anahtar"];

  include 'include/header.php'; ?>

        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mt-3"><?php echo $sonuc ["baslik"] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $sonuc ["icerik"] ?></h3>
                </div>

                     <?php
                     $sorgu2=$baglanti->prepare("SELECT * FROM tarihce");
                    $sorgu2->execute();
                    $yon=false;
                    while ($sonuc2=$sorgu2->fetch()) {  
                                      
                    ?>

                <ul class="timeline">
                    <li <?php if($yon==true) echo 'class="timeline-inverted"'; ?>>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/<?php echo $sonuc2["foto"] ?>" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo $sonuc2["tarih"] ?></h4>
                                <h4 class="subheading"><?php echo $sonuc2["baslik"] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $sonuc2["icerik"] ?></p></div>
                        </div>
                    </li>

                    <?php 
                    $yon=!$yon;
                } ?>

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
                
            </div>
        </section>


        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo $sonuc ["alt_baslik"] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $sonuc ["alt_icerik"] ?></h3>
                </div>
                                <div class="row">

                 <?php
                     $sorgu3=$baglanti->prepare("SELECT * FROM takım");
                    $sorgu3->execute();
                    while ($sonuc3=$sorgu3->fetch()) {  
                                       
                    ?>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/<?php echo $sonuc3 ["foto"] ?>" alt="" />
                            <h4><?php echo $sonuc3 ["isim"] ?></h4>
                            <p class="text-muted"><?php echo $sonuc3 ["meslek"] ?></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="<?php echo $sonuc3 ["twitter"] ?>"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="<?php echo $sonuc3 ["facebook"] ?>"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="<?php echo $sonuc3 ["linkedin"] ?>"></i></a>
                        </div>
                    </div>

                <?php } ?>
                  </div>

                </div>
              <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"><?php echo $sonuc ["alt_icerik2"] ?></p></div>
                </div>
            </div>
        </section>


         <?php include 'include/footer.php'; ?>
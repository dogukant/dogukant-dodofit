 <?php
 $sayfa="Portfolyo"; 
  include 'include/db.php'; 

  $sorgu=$baglanti->prepare("SELECT * FROM portfolyo");
  $sorgu->execute();
  $sonuc=$sorgu->fetch();
  $tanimlama=$sonuc["tanimlama"];
  $anahtar=$sonuc["anahtar"];

  include 'include/header.php'; ?>


        <!-- Portfolio Grid-->
        <section class="page-section bg-light " id="portfolyo">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mt-3"><?php echo $sonuc ["baslik"] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $sonuc ["alt_baslik"] ?></h3>
                </div>
                  <div class="row">

                    <?php
                    $sorgu2=$baglanti->prepare("SELECT * FROM portfolyolar");
                    $sorgu2->execute();
                    while ($sonuc2=$sorgu2->fetch()) {
                     ?>     
                         


                    
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?php echo $sonuc2["id"]?>>
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/<?php echo $sonuc2["kucuk_foto"]?>" alt="" />
                            </a>
                            <div class="portfolio-caption">

                                <div class="portfolio-caption-heading"><?php echo $sonuc2["client"] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $sonuc2["category"] ?></div>
                            </div>
                        </div>

                    <?php } ?>
             </div>
        </section>
    </body>

         <?php include 'include/footer.php'; ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
</html>

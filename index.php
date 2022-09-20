<?php
$sayfa="Ana Sayfa";
include 'include/db.php'; 


$sorgu=$baglanti->prepare("SELECT * FROM anasayfa");
$sorgu->execute();
$sonuc=$sorgu->fetch();
$tanimlama=$sonuc["tanimlama"];
$anahtar=$sonuc["anahtar"];

include 'include/header.php';
 ?>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><?php echo $sonuc["ust_baslik"] ?></div>
                <div class="masthead-heading text-uppercase"><?php echo $sonuc["alt_baslik"] ?></div>
                <a class="btn btn-primary btn-xl text-uppercase" href="<?php echo $sonuc["link"] ?>"><?php echo $sonuc["link_metin"] ?></a>
            </div>
        </header>
        
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <?php
                     $sorgu2=$baglanti->prepare("SELECT * FROM referans WHERE aktif=1 ORDER BY sira");
                    $sorgu2->execute();
                    while ($sonuc2=$sorgu2->fetch()) {
                       
                   
                    ?>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="<?php echo $sonuc2["link"] ?>"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/<?php echo $sonuc2["foto"] ?>" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                 <?php } ?>
                </div>
            </div>
        </div>
       
       
       <?php include 'include/footer.php'; ?>
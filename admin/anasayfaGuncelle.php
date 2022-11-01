<?php
$sayfa="Ana Sayfa";
include 'inc/aheader.php';
$sorgu=$baglanti->prepare("SELECT * FROM anasayfa WHERE id");
$sorgu->execute();
$sonuc=$sorgu->fetch();

if ($_POST) {

    $guncelleSorgu=$baglanti->prepare("UPDATE anasayfa set ust_baslik=:ust_baslik, alt_baslik=:alt_baslik, link_metin:link_metin, link=:link, tanimlama=:tanimlama, anahtar=:anahtar where id=:id");
    $guncelle=$guncelleSorgu->execute([
        'ust_baslik'=>$_POST["ust_baslik"],
        'alt_baslik'=>$_POST["alt_baslik"],
        'link_metin'=>$_POST["link_metin"],
        'link'=>$_POST["link"],
        'tanimlama'=>$_POST["tanimlama"],
        'anahtar'=>$_POST["anahtar"],
        'id'=>$_GET["id"]
    ]);

   
}
?>

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ana Sayfa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">Ana Sayfa</li>
                        </ol>
                   
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                <div class="form-group">
                                    <lable>Üst Başlık</lable>
                                    <input type="text" name="ust_baslik" required class="form-control" value="<?php echo $sonuc["ust_baslik"] ?>">
                                </div>

                                </div>
                            <div class="card-body">
                                <form action="" method="post">
                                <div class="form-group">
                                    <lable>Alt Başlık</lable>
                                    <input type="text" name="alt_baslik" required class="form-control" value="<?php echo $sonuc["alt_baslik"] ?>">
                                </div>

                                </div>
                            <div class="card-body">
                                <form action="" method="post">
                                <div class="form-group">
                                    <lable>Link Metin</lable>
                                    <input type="text" name="link_metin" required class="form-control" value="<?php echo $sonuc["link_metin"] ?>">
                                </div>

                                </div>
                            <div class="card-body">
                                <form action="" method="post">
                                <div class="form-group">
                                    <lable>Link</lable>
                                    <input type="text" name="Link" required class="form-control" value="<?php echo $sonuc["link"] ?>">
                                </div>

                                </div>
                            <div class="card-body">
                                <form action="" method="post">
                                <div class="form-group">
                                    <lable>Tanımlama</lable>
                                    <input type="text" name="tanimlama" required class="form-control" value="<?php echo $sonuc["tanimlama"] ?>">
                                </div>

                                </div>
                            <div class="card-body">
                                <form action="" method="post">
                                <div class="form-group">
                                    <lable>Anahtar</lable>
                                    <input type="text" name="anahtar" required class="form-control" value="<?php echo $sonuc["anahtar"] ?>">
                                </div>

                                </div>
                            <div 
                                <div class="form-group">
                         
                                <input type="submit" name="anahtar" value="Güncelle" class="btn btn-primary">
                                </div>

                                

                                </form>

                            </div>
                        </div>
                    </div>
                </main>

        <?php
        include 'inc/afooter.php';
        ?>
                

<?php
$sayfa="Ana Sayfa";
include 'inc/aheader.php';
$sorgu=$baglanti->prepare("SELECT * FROM anasayfa");
$sorgu->execute();
$sonuc=$sorgu->fetch();
?>

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ana Sayfa Güncelle</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">Ana Sayfa Güncelle</li>
                        </ol>
                   
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            
                            </div>
                            <div class="card-body">
                                
                                    <thead>
                                        <tr>
                                            <th>Üst Başlık</th>
                                            <th>Alt Başlık</th>
                                            <th>Link Metin</th>
                                            <th>Link</th>
                                            <th>Tanimlama</th>
                                            <th>anahtar</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr>
                                            <td><?php echo $sonuc["ust_baslik"]?></td>
                                            <td><?php echo $sonuc["alt_baslik"]?></td>
                                            <td><?php echo $sonuc["link_metin"]?></td>
                                            <td><?php echo $sonuc["link"]?></td>
                                            <td><?php echo $sonuc["tanimlama"]?></td>
                                            <td><?php echo $sonuc["anahtar"]?></td>
                                            <td><a  href="anasafyaGuncelle.php?id=<?php echo $sonuc["id"]?>"> 
                                        <span class="fa fa-edit fa-2x"></span>
                                        </a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

        <?php
        include 'inc/afooter.php';
        ?>
                

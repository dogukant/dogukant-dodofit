<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Kullanıcı Girişi</h3></div>
                                    <div class="card-body">

                                    <?php  
                                    session_start();
                                    include '../include/db.php';  

                                    if(isset($_SESSION["Oturum"]) && $_SESSION["Oturum"]=="6789"){

                                        header("location:index.php");
                                    }

                                    elseif(isset($_COOKIE["cerez"])){

                                        $sorgu=$baglanti->prepare("SELECT kullanici_adi,yetki from kullanici where aktif=1");
                                        $sorgu->execute();
                                        while ($sonuc=$sorgu->fetch()){
                                            if($_COOKIE["cerez"]==md5("aa".$kullanici_adi."bb")){
                                             $_SESSION["Oturum"]="6789";
                                             $_SESSION["kullanici_adi"]=$kullanici_adi;
                                             $_SESSION["yetki"]=$sonuc["yetki"];
                                             header("location:index.php");

                                            }

                                        }

                                    }


                                    $kullanici_adi="";
                                    
                                    if($_POST){
                                        $kullanici_adi=$_POST["kullanici_adi"];
                                        $parola=$_POST["parola"];

                                    }

                                    md5(md5("56"."1234"."23"));

                                    ?>

                                        <form method="post" action="login.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="kullanici_adi" value="<?php echo "$kullanici_adi" ?>" type="text" placeholder="kullanıcı adınızı giriniz" />
                                                <label for="inputEmail">Kullanıcı adı</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="parola" type="password" placeholder="Şifre giriniz" />
                                                <label for="inputPassword">Parola</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" name="cbHatirla" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Beni Hatırla</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Şifremi unuttum</a>
                                                <input type="submit" class="btn btn-primary" value="Giriş" />
                                                
                                            </div>
                                        </form>

                                        <?php 
                                        if($_POST)
                                        {
                                            $sorgu=$baglanti->prepare("SELECT parola,yetki from kullanici where kullanici_adi=kullanici_adi and aktif=1");
                                            $sorgu->execute();
                                            $sonuc=$sorgu->fetch();
                                            if(md5(md5("56".$parola."23"))==$sonuc['parola']){


                                             $_SESSION["Oturum"]="6789";
                                             $_SESSION["kullanici_adi"]=$kullanici_adi;
                                             $_SESSION["yetki"]=$sonuc["yetki"];

                                             if(isset($_POST["cbHatirla"])){
                                                    setcookie("cerez",md5("aa"."$kullanici_adi"."bb", time()+(60*60*24*7)));
                                            }
                         
                                    
                                                header("location:index.php");

                                            }
                                        }



                                        ?>

                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

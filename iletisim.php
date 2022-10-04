  <?php 
  $sayfa="iletisim"; 

  include 'include/db.php';
  $tanimlama="iletişim sayfası";
  $anahtar="iletişim";
  $sorgu=$baglanti->prepare("SELECT * FROM iletisim");
  $sorgu->execute();
  $sonuc=$sorgu->fetch();

  include 'include/header.php'; ?>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mt-3">Bize Ulaşın</h2>
                    <h3 class="section-subheading text-muted">Aşağıdan bize ulaşabilirsiniz</h3>
                </div>
                <form id="contactForm" name="sentMessage" method="post" action="iletisim">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" name="ad" type="text" placeholder="Adınız *" required="required" data-validation-required-message="Lütfen adınızı giriniz" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" name="mail" placeholder="Mail adresiniz *" required="required" data-validation-required-message="Lütfen mail adresinizi giriniz" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" name="tel" placeholder="Telefon numaranız *" required="required" data-validation-required-message="Lütfen telefon numaranızı giriniz" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" name="mesaj" placeholder="Mesajınız *" required="required" data-validation-required-message="Lütfen mesajınızı yazınız"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Gönder</button>
                    </div>
                </form>

        
                <?php

              
                if($_POST){
                    $sorgu=$baglanti->prepare("INSERT INTO iletisimformu (ad, email, telefon, mesaj) VALUES(':ad',':email',':telefon',':mesaj')");
                    $ekle=$sorgu->execute(
                 
                  
                    );
                    }
                ?>

            </div>
        </section>

        <?php include 'include/footer.php'; ?>
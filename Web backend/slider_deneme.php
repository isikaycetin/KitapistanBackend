<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kitapistan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}

$sql_kitaplar = "SELECT urunAdi, yazar, yayinevi, fiyat FROM urunler";
$result_kitaplar = $conn->query($sql_kitaplar);

$kitaplar = [];

if ($result_kitaplar->num_rows > 0) {
    while ($row = $result_kitaplar->fetch_assoc()) {
        $kitaplar[] = $row;
    }
} else {
    echo "Veri bulunamadı";
}

// Kitapları 3 gruba ayır (her bir grup 4 kayıt içerecek)
$gruplar = array_chunk($kitaplar, 4);

$sql_kategoriler = "SELECT * FROM kategoriler";
$result_kategoriler = $conn->query($sql_kategoriler);

$kategoriler = [];

if ($result_kategoriler->num_rows > 0) {
    while ($row = $result_kategoriler->fetch_object()) {
        $kategoriler[] = $row;
    }
} else {
    echo "0 sonuç";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="shortcut icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/2702/2702154.png"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="slider1.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
</head>
<body>

<header >
        <div class="container">

     <a href="#"><img src="indir.jpeg" alt="" class="img-1" style="position: relative; top: 15px;"></a>
    <a href=""><strong><p style="text-align: center; position: relative; bottom: 12px; font-size: 30px; color: rgba(0, 0, 0, 0.992); filter: drop-shadow(10px 7px 5px);">Kitapistan</p></strong></a>
    
    <form style="display: inline-block; padding-left: 25px;"  action="aranilan.php" method="get" class="search">
    <input type="text" placeholder="Arama yap" name = "q">
    <button type="submit">Ara</button>
    
    <ul class="giris-uye">
        <li><a href="loginsayfa.html"><strong style="font-size: 22px; position: relative; top: 13px;">Giriş Yap</strong></a></li>
        <li><a style="position: relative; top: 19px;" href="uyeol.html
            ">&nbsp;&nbsp;&nbsp;&nbsp;Üye Ol</a></li>
      </ul>
      
      <ul class="sepet">
        <li>
            <a href=""><img src="sepet.png" alt="" class="img-2" style="position: relative; top: 25px;"></a>
            <a href=""><strong style="text-align: center; font-size: 18px; position: relative; bottom: 0px;">Sepetim</strong></a>
           
        </li>
      </ul>
</form>
</div>
<div class="nav-container">
      <nav class="navbar-menu">
            <ul>
              <li><a href="#">Anasayfa</a></li>
              <li><a href="#">Hakkımızda</a></li>
              <li><a href="#">İletişim</a></li>
              <li><a href="#">Çok Satanlar</a></li>
            </ul> 
      </nav>
     
    </div>
    </header>

<div id="cookie-banner">
    Bu web sitesi çerez kullanmaktadır. Devam ederek çerez kullanımını kabul ediyorsunuz.
    <button onclick="closeCookieBanner()">Kapat</button>
</div>

<aside>
        <h1 style="font-size: larger;">Kategoriler</h1>
        <ul>   
        <?php foreach($kategoriler as $kategori) { ?>
            <li><a href="kategoriler.php?id=<?php echo $kategori->kategoriID; ?>"><?php echo $kategori->kategoriAdi; ?></a></li>
        <?php } ?>
</ul>

        <hr size="6">
        <h1 style="text-align: center; font-size: larger; line-height: 20px;">Günün Sözü</h1>
        <p style="line-height: normal;">&nbsp;"Portakalı soymadan içinden &nbsp;ne çıkıcak bilemezsin yeğen"</p>
        <img src="ramiz.jpeg" alt="">
     
        <p style="font-size: smaller; line-height: 22px; text-align: center;">Türkiye Sinema tarihinin eşsiz oyuncu ve yönetmenlerinden biri olan Tuncel Kurtiz 
            1 Şubat 1936 tarihinde İzmit’te dünyaya gelmiştir.Üniverste yıllarında kısa bir süre Hukuk öğrenimi gören usta oyuncu 
            daha sonra diğer branşlarda (filoloji, felsefe, psikoloji ve sanat tarihi) öğrenim görmüştür.1981 yılında Antalya Altın Portakal Festivalinde En iyi senaryo Ödülük aleme aldığı Gül Hasan isimli filmin senaryosuyla kazanmıştır. Kurtiz eserleri şu şekilde dir;

        </p>
        <ul style="line-height: 21px;">
            <li> Ezel</li>
            <li>Muhteşem Yüzyıl</li>
            <li> Sürü</li>
            <li> Yaşamın Kıyısında</li>
            <li>Asi</li>
        </ul>

    </aside>


<section>

<article class="article">
            <h1 style="text-align: center; font-size: 32px;">Çok Satanlar</h1>

            <div class="main" id="main1">
                <div class="slider">
                    <img src="1984.jpg" alt="" width="100%">
                   
                    <div class="buton">
                        <i class="fa-solid fa-arrow-left fa-2x" onclick="next()"></i>
                        <i class="fa-solid fa-arrow-right fa-2x" onclick="back()"></i>
                    </div>
                </div>
             </div><br>
        </article>

        <article>
            <h1 ><strong style="position: relative; top: 100px; left: 150px; font-size:32px;">Kitaplar</strong></h1>
            <div class="dropdown">
                <button class="dropbtn">Filtrele</button>
                 <div class="dropdown-content">
                  <a href="#"></a>
                  <a href="#">En Düşük Fiyat</a>
                  <a href="#">Önerilen</a>
                  <a href="#">Puanlama</a>
                  <a href="#">En Yüksek Fiyat</a>
            </div>   
        </div>
           

        </article>
    <?php foreach ($gruplar as $grup): ?>
        <article class="article">
            <?php foreach ($grup as $kitap): ?>
                <div class="kitaplar">
                    <a href="kitapsf.php">
                        <img class="kitapresim" src="1984.jpg" alt="">
                        <h2><?php echo $kitap['urunAdi']; ?></h2>
                        <h2><?php echo $kitap['yazar']; ?></h2>
                        <h2><?php echo $kitap['yayinevi']; ?></h2>
                        <h2>Fiyat : <?php echo $kitap['fiyat']; ?> TL</h2>
                    </a>
                    <button class="sepet-ekle-button" type="button" onclick="sepeteEkle();">Sepete Ekle</button>
                </div>
            <?php endforeach; ?>
        </article>
    <?php endforeach; ?>
</section>


<div class="numaralandırma">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#" >2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">&raquo;</a>
          </div>
    </section>
    
    <footer>
        <div class="sol">
              <ul>
                 <li><a href="#">Kurumsal</a></li>
                 <li><a href="#">Hakkımızda</a></li>
                 <li><a href="#">Biz Kimiz</a></li>
                 <li><a href="#">Sözleşme</a></li>
             </ul>
 
              <ul>
                 <li><a href="#">İletişim</a></li>
                 <li><a href="#">Yardım</a></li>
                 <li><a href="#">Destek Hattı</a></li>
             </ul>
 
             <ul>
                 <li><a href="uyeol.html">Üye Ol</a></li>
                 <li><a href="#">Sık Sorulanlar</a></li>
                 <li><a href="loginsayfa.html">Üye Grişi</a></li>
             </ul>
        </div>
        
        <div class="sag">
               <p>&nbsp;&nbsp;&nbsp;Bizi Takip Edin</p>
               <a href="#"><img class="img-2 ikon-img" src="facebook.png" alt=""></a>
               <a href="#"><img class="img-2 ikon-img" id="twit-ikon" src="twitter.png" alt=""></a>
               <a href="#"><img class="img-2 ikon-img" src="instagram.jpg" alt=""></a>
               <a href="#"><img class="img-2 ikon-img" src="whatsap.jpg" alt=""></a>
               <br><br>
               <h1 style="margin-right: 40%; font-size: 25px; ">+905333701456</h1>
        </div>
     
       <div class="alt">
           <h2 style="float:left; margin-left: 60px;">Ödeme Yöntemleri</h2>
           <h2 style="display: inline-block; margin-left: 810px; position: relative; top: -5px;" >Güvenli ve Kolay Alışveriş</h2>
           <ul style="position: relative; top: -5px; left: -10px;">
             <li><img class="img-2 ikon-img" src="axess.jpg" alt="" style="border-radius: 25px;"></li>
             <li><img class="img-2 ikon-img" src="paraf.jpg" alt=""></li>
             <li><img class="img-2 ikon-img" src="world.jpg" alt=""></li>
           </ul>
                   
           <ul style="position: relative; top: -5px; left: -10px;">
             <li><img class="img-2 ikon-img" src="mastercard.jpg" alt=""></li>
             <li><img class="img-2 ikon-img" src="papara.jpg" alt=""></li>
             <li><img class="img-2 ikon-img" src="visa.jpg" alt=""></li>
           </ul>
 
       </div>
 
 </footer>


 <script src="https://kit.fontawesome.com/4cfc548dd4.js" crossorigin="anonymous"></script> 
    <script>
        var mainimg=document.querySelector('.slider img')
var imagess=['1984.jpg','images/kitapimg3.webp','images/kitap1.jpeg'];
var num=0;
const auto=true
const IntervalTime=5000;
let slideInterval


function next() {
    num++
    if(num>=imagess.length){
        num=0;
        mainimg.src=imagess[num]
    }else{
        mainimg.src=imagess[num]
    }
}

function back(){
    num--
    if(num<0){
        num=imagess.length-1
        mainimg.src=imagess[num]
    }else{
        mainimg.src=imagess[num]
}
}
    </script>

  <script>
    function closeCookieBanner() {
        document.getElementById('cookie-banner').style.display = 'none';
}
function sepeteEkle() {
      alert('Giriş Yapmalısınız!');
    }
</script>

</body>
</html>
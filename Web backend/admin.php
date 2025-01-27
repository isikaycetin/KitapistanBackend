<?php session_start();
$kullaniciAdi = isset($_SESSION['kullaniciAdi']) ? $_SESSION['kullaniciAdi'] : header("Location: admingiris.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <nav>
        <h1 class="h1">Kitapistan</h1>
        <form style="display: inline-block; padding-left: 25px;" action="" method="get" class="search">
            <input type="text" placeholder="Arama yap">
            <button type="submit">Ara</button>
        </form>

        <ul>
            <li><a href="#"><i class="fa-solid fa-envelope" style="color: orange;"></i></a></li>
            <li><a href="#" style="color: orange;"><i class="fa-solid fa-bell"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-user" style="color: grey;"></i>&nbsp;&nbsp;<?php echo $_SESSION['kullaniciAdi']; ?>
            </a></li>
        </ul>
    </nav>

    <aside>
        <ul>
            <li><a href="#"><i class="fa-solid fa-house"></i>&nbsp;Dashboard</a></li>
            <li><a href="#"><i class="fa-solid fa-envelope"></i>&nbsp;E-mail</a></li>
            <li><a href="#"><i class="fa-regular fa-comment"></i>&nbsp;Chat</a></li>
            <li><a href="#"><i class="fa-solid fa-calendar-days"></i>&nbsp;Takvim</a></li>
            <li><a href="#"><i class="fa-solid fa-chart-column"></i>&nbsp;Grafikler</a></li>
            <li><a href="#"><i class="fa-solid fa-table-list"></i>&nbsp;Form</a></li>
            <li><a href="#"><i class="fa-solid fa-table"></i>&nbsp;Tables</a></li>
            <li><a href="#"><i class="fa-solid fa-globe"></i>&nbsp;Haritalar</a></li>
            <li><a href="#"><i class="fa-solid fa-file"></i>&nbsp;Sayfalar</a></li>
            <li><a href="#"><i class="fa-solid fa-shield-halved"></i>&nbsp;Güvenlik</a></li>
            <li><a href="#"><i class="fa-solid fa-cookie"></i>&nbsp;Çerezler</a></li>
            <li><a href="#"><i class="fa-solid fa-pen-nib"></i>&nbsp;UI Design</a></li>
            <li><a href="#"><i class="fa-solid fa-bell"></i>&nbsp;Bildirimler</a></li>
            <li><a href="#"><i class="fa-solid fa-newspaper"></i></i>&nbsp;Editör</a></li>
            <li><a href="#"><i class="fa-solid fa-icons"></i>&nbsp;İkonlar</a></li>
            <li><a href="#"><i class="fa-solid fa-address-book"></i></i>&nbsp;Kullanıcı Sayfası</a></li>
            <li><a href="#"><i class="fa-solid fa-book"></i>&nbsp;Dökumantasyon</a></li>

            <a href="adminlogout.php"><button type="submit" class="cikis"><i
                        class="fa-solid fa-right-from-bracket"></i>&nbsp;Çıkış Yap</button></a>
        </ul>
    </aside>

    <section>
        <!--Kartlar-->
        <div class="card" style="width: 18rem; height: 400px;">
            <img src="visiters.jpg" style="border-radius: 10px;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Ziyaretçiler</h5>
                <p class="card-text">Bugün sitenizi ziyaret eden toplam kişi sayısı aşağıdaki gibidir.</p>
                <strong> <a href="#" class="text-warning" style="margin-left: 80px;">36.453</a></strong>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="sales.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Satışlar</h5>
                <p class="card-text">Bugün sitenizde gerçekleşti-rilen toplam alışveriş miktarı aşağıdaki gibidir.</p>
                <strong><a href="#" class="text-warning" style="margin-left: 80px;">1.500</a></strong>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="chats.png" class="card-img-top" alt="..." style="height: 200px;">
            <div class="card-body">
                <h5 class="card-title">Yorumlar</h5>
                <p class="card-text">Bugün sitenize yapılan toplam olumlu ve olumsuz yorum sayı-ları sırasyıla aşağıdaki
                    gibidir.</p>
                <a href="#" style="color: #2f4625; margin-left: 50px; margin-right: 50px;"><strong>500</strong></a> <a
                    href="#" class="text-danger"><strong>50</strong></a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="profit.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Ciro</h5>
                <p class="card-text">Bugünkü satışlardan elde ettiğiniz toplam gelir (cironuz) aşağıdaki gibidir.</p>
                <strong><a href="#" class="text-warning" style="margin-left: 80px;">150.365</a></strong>
            </div>
        </div>
        <!--Kartlar-->

        <!-- Team -->
        <div class="card" style="width: 18rem; background-color:#F0FFF0;">
            <img src="team.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Proje Ekibi</h5>

            </div>
            <ul class="list-group list-group-flush" style="font-size: medium;  background-color: #F0FFF0;">
                <li class="list-group-item "><a href="#"><strong style="font-size: small;">Yıldıray PARLAK</strong>
                        <span>15m
                            ago</span></a></li>
                <li class="list-group-item"><a href="#"><strong style="font-size: small;">Işıkay ÇETİN</strong><span>15h
                            ago</span s></a></li>
                <li class="list-group-item"><a href="#"><strong style="font-size: small;">Kutay
                            YILDIRIM</strong><span>45m
                            ago</span></a></li>
                <li class="list-group-item"><a href="#"><strong style="font-size: small;">Melih GÖNAN</strong><span>12h
                            ago</span></a></li>
            </ul>

        </div>
        <!-- team -->

        <!--Projeler-->
        <ol class="list-group" style="display: inline-block; width: 60%; position: relative; top: -65px; left: 20px;">
            <li class="list-group-item d-flex justify-content-between align-items-start" style="height: 70px; ">
                <div class="ms-2 me-auto">
                    <a class="proje-a" href="">
                        <div class="fw-bold">Admin Panel Dizaynı</div>
                    </a>

                </div>

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start" style="height: 70px; ">
                <div class="ms-2 me-auto">
                    <a class="proje-a" href="">
                        <div class="fw-bold">UI Design</div>
                    </a>

                </div>

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start" style="height: 70px; ">
                <div class="ms-2 me-auto">
                    <a class="proje-a" href="">
                        <div class="fw-bold">Proje Toplanstısı</div>
                    </a>

                </div>

            <li class="list-group-item d-flex justify-content-between align-items-start" style="height: 70px; ">
                <div class="ms-2 me-auto">
                    <a class="proje-a" href="">
                        <div class="fw-bold">Ekibi Düzenle</div>
                    </a>

                </div>

        </ol>




        <ol class="list-group" style="display: inline-block; width: 81%; position: relative; top: 30px; left: 13px;">
            <li class="list-group-item d-flex justify-content-between align-items-start"
                style="height: 60px; background-color: #F0FFF0; ">
                <div class="ms-2 me-auto">
                    <div class="fw-bold" style="font-size: 25px;">Sayfa Düzenle</div></a>
                </div>


            <li class="list-group-item d-flex justify-content-between align-items-start" style="height: 60px; ">
                <div class="ms-2 me-auto">
                    <a class="proje-a" href="">
                        <div class="fw-bold" style="font-size: 17px;">Header Düzenle</div>
                    </a>

                </div>

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start" style="height: 60px; ">
                <div class="ms-2 me-auto">
                    <a class="proje-a" href="">
                        <div class="fw-bold" style="font-size: 17px;">Section Düzenle</div>
                    </a>

            <li class="list-group-item d-flex justify-content-between align-items-start" style="height: 60px; ">
                <div class="ms-2 me-auto">

                    <a class="proje-a" href="">
                        <div class="fw-bold" style="font-size: 17px;">Kategori Ekle - Çıkar</div>
                        <form action="kategori.php" class="kategoriEkleCıkar" method="post">
                            <div class="mb-3 Kategoriad">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input type="text" class="form-control" name="kategoriAdi" placeholder="Kategori adı">
                            </div>
                            <select class="form-select Kategoriselect" name="islem" aria-label="Default select example">
                                <option value="ekle" name="ekle">ekle</option>
                                <option value="cikar" name="cikar">cikar</option>
                            </select>
                            <input type="submit" name="gonder" class="gonderKategori">
                        </form>
                    </a>

                </div>

                </div>

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start" style="height: 60px; ">
                <div class="ms-2 me-auto">
                    <a class="proje-a" href="kitapekle.php">
                        <div class="fw-bold" style="font-size: 17px;">Kitap Ekle - Çıkar</div>

                    </a>
                </div>

            <li class="list-group-item d-flex justify-content-between align-items-start" style="height: 60px; ">
                <div class="ms-2 me-auto">
                    <a class="proje-a" href="">
                        <div class="fw-bold" style="font-size: 17px;">Footer Düzenle</div>
                    </a>

                </div>


        </ol>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>



</body>

</html>
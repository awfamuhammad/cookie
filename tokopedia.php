<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: tokopedia.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/tokopedia.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <title>Tokopedia</title>
</head>

<body>

    <nav class="menu">
        <div class="navbar">
            <img src="img/tokopedia.svg" alt="">
        </div>
    </nav>

    <div class="container">
        <header class="header">
            <div class="content">
                <p> <a href="">Beranda</a> > <a href="">Kategori Utama</a> > <a href="">Buku</a> > <a href="">Arsitektur Desain</a> > Buku Bangunan</p>
            </div>
        </header>
    </div>

    <div class="container">
        <content class="contents">
            <aside class="aside">
                <div class="card" style="width: 20rem;">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">
                        <h5>Buku</h5>
                        <ul class="aside-list">
                            <li class="active">
                                <a class="title-sublist title-arsitektur" href="#arsitektur-sublist" data-bs-toggle="collapse" aria-expanded="false">Arsitektur & Design <span class="arsitektur"><img src="
                                img/arrow.svg" alt=""></span></a>
                                <ul class="collapse aside-list" id="arsitektur-sublist">
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a class="title-sublist title-bukuhukum" href="#bukuhukum" data-bs-toggle="collapse" aria-expanded="false">Buku Hukum <span class="bukuhukum"><img src="
                                img/arrow.svg" alt=""></span></a>
                                <ul class="collapse aside-list" id="bukuhukum">
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a class="title-sublist title-bukuimport" href="#bukuimport" data-bs-toggle="collapse" aria-expanded="false">Buku Imposrt <span class="bukuimport"><img src="
                                img/arrow.svg" alt=""></span></a>
                                <ul class="collapse aside-list" id="bukuimport">
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a class="title-sublist title-kamus" href="#kamus" data-bs-toggle="collapse" aria-expanded="false">Kamus <span class="kamus"><img src="
                                img/arrow.svg" alt=""></span></a>
                                <ul class="collapse aside-list" id="kamus">
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a class="title-sublist title-ekonomidanbisnis" href="#ekonomidanbisnis" data-bs-toggle="collapse" aria-expanded="false">Ekonomi & Bisnis <span class="ekonomidanbisnis"><img src="
                                img/arrow.svg" alt=""></span></a>
                                <ul class="collapse aside-list" id="ekonomidanbisnis">
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                    <li><a href="#">Buku & Design</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <hr>

                    <div class="card-body" style="width: 20rem;">
                        <div class="location-list">
                            <h5>Lokasi</h5>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">DKI Jakarta</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Bandung</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Semarang</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Jogja</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="card-body" style="width: 20rem;">
                        <div class="delivery-list">
                            <h5>Pengiriman</h5>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">JNE</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">GO-Send</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Ninja Express</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">GrabExpress</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="card-body" style="width: 20rem;">
                        <div class="services-list">
                            <h5>Penawaran</h5>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Cashback</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Gratis Ongkir</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">COD</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Diskon</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Harga Grosir</label>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <main class="main">
                <div class="product-list">
                    <div class="satu">
                        <div class="card" style="width: 15rem;">
                            <img src="img/ebook.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Ecohouse Ebook</h5>
                                <h4 class="card-price">Rp200.000</h4>
                                <p>Surabya</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="dua">
                        <div class="card" style="width: 15rem;">
                            <img src="img/ebook.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Ecohouse Ebook</h5>
                                <h4 class="card-price">Rp200.000</h4>
                                <p>Surabya</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="tiga">
                        <div class="card" style="width: 15rem;">
                            <img src="img/ebook.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Ecohouse Ebook</h5>
                                <h4 class="card-price">Rp200.000</h4>
                                <p>Surabya</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="empat">
                        <div class="card" style="width: 15rem;">
                            <img src="img/ebook.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Ecohouse Ebook</h5>
                                <h4 class="card-price">Rp200.000</h4>
                                <p>Surabya</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="lima">
                        <div class="card" style="width: 15rem;">
                            <img src="img/ebook.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Ecohouse Ebook</h5>
                                <h4 class="card-price">Rp200.000</h4>
                                <p>Surabya</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="enam">
                        <div class="card" style="width: 15rem;">
                            <img src="img/ebook.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Ecohouse Ebook</h5>
                                <h4 class="card-price">Rp200.000</h4>
                                <p>Surabya</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="tujuh">
                        <div class="card" style="width: 15rem;">
                            <img src="img/ebook.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Ecohouse Ebook</h5>
                                <h4 class="card-price">Rp200.000</h4>
                                <p>Surabya</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </content>

        <!-- <footer class="footer">Footer</footer> -->
    </div>

    <script>
        $('.title-arsitektur').click(function() {
            $('.aside .aside-list .arsitektur').toggleClass("rotate");
        });
        $('.title-bukuhukum').click(function() {
            $('.aside .aside-list .bukuhukum').toggleClass("rotate");
        });
        $('.title-bukuimport').click(function() {
            $('.aside .aside-list .bukuimport').toggleClass("rotate");
        });
        $('.title-kamus').click(function() {
            $('.aside .aside-list .kamus').toggleClass("rotate");
        });
        $('.title-ekonomidanbisnis').click(function() {
            $('.aside .aside-list .ekonomidanbisnis').toggleClass("rotate");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>
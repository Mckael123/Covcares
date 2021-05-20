<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href={{ asset('css/home.css') }}>
    
</head>

<body>
    <div class="container">
        <section class="header">
            <div class="logo"><a href="/index.html"><img src={{ asset('img/HomePageLOGO.png') }}></a></div>
            <a href="" class="inactive">Home</a>
            <a href="/produk/landproduk.html" class="inactive">See Covid Kits</a>
            <a href="/news/news.html" class="inactive">News</a>
            <a href="/aboutus/about.html" class="inactive">About Us</a>
            <a href="/info-covid/covinfo.html" class="inactive">What Is COVID-19?</a>
            <button class="login"> <a href="/login-form/login.html"><div class="logintxt">Login</div></a></button>
        </section>
        <!-- image slider start -->
        <section class="slider">
            <div class="slides">
                <!-- radio button start -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <!-- radio button end -->
                <!-- slide image start -->
                <div class="slide first">
                    <img class="img-slide" src={{ asset('img/slide1.png') }} alt="">
                </div>
                <div class="slide">
                    <img class="img-slide" src={{ asset('img/slide2.png') }} alt="">
                </div>
                <div class="slide">
                    <img class="img-slide" src={{ asset('img/slide3.png') }} alt="">
                </div>
                <!-- slide image end-->
            </div>
            <!-- automatic navigation start -->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>
            <!-- automatic navigation end -->
            <!-- manual navigation start -->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>
            <!-- manual navigation end -->
            <!-- JS for slide -->
            <script type="text/javascript">
                var counter = 1;
                setInterval(function () {
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if (counter > 3) {
                        counter = 1;
                    }
                }, 4200);
            </script>

        </section>
        <section class="content">
            <div class="top-content">
                <div class="news-header">
                    <h1 class="title-content">News</h1>
                    <div class="garis"></div>
                </div>
                <a id="link-news" href="#"><button class="more-btn">
                    <div class="txt-btn">See More</div>
                    <div class="iconnext">
                        <img src={{ asset('img/nextbtn.png') }} alt="">
                    </div></a>
                </button>
            </div>
            <div class="isi-content">
                <div class="boxcontent">
                    <div class="insidebox">
                        <div class="gambarbox">
                            <img src={{ asset('img/news-img.png') }} alt="">
                        </div>
                        <div class="contenttxt">
                            <h2>
                                Pasien Sembuh Meningkat Menjadi 1.136.054 Orang
                            </h2>
                            <p>
                                Perkembangan pasien sembuh per 27 Februari 2021, jumlahnya sudah melebihi angka 1 juta
                                orang
                                atau angka tepatnya bertambah menjadi 1.136.054 orang dengan persentasenya menjadi
                                85,5%.
                                Angka kesembuhan kumulatif ini meningkat dengan adanya penambahan pasien sembuh harian
                                sebanyak 7.382 orang.
                            </p>
                            <span> Read More >></span>
                        </div>
                    </div>
                </div>
                <div class="boxcontent">
                    <div class="insidebox">
                        <div class="gambarbox">
                            <img src={{ asset('img/news-img.png') }} alt="">
                        </div>
                        <div class="contenttxt">
                            <h2>
                                Pasien Sembuh Meningkat Menjadi 1.136.054 Orang
                            </h2>
                            <p>
                                Perkembangan pasien sembuh per 27 Februari 2021, jumlahnya sudah melebihi angka 1 juta
                                orang
                                atau angka tepatnya bertambah menjadi 1.136.054 orang dengan persentasenya menjadi
                                85,5%.
                                Angka kesembuhan kumulatif ini meningkat dengan adanya penambahan pasien sembuh harian
                                sebanyak 7.382 orang.
                            </p>
                            <span> Read More >></span>
                        </div>
                    </div>
                </div>
                <div class="boxcontent">
                    <div class="insidebox">
                        <div class="gambarbox">
                            <img src={{ asset('img/news-img.png') }} alt="">
                        </div>
                        <div class="contenttxt">
                            <h2>
                                Pasien Sembuh Meningkat Menjadi 1.136.054 Orang
                            </h2>
                            <p>
                                Perkembangan pasien sembuh per 27 Februari 2021, jumlahnya sudah melebihi angka 1 juta
                                orang
                                atau angka tepatnya bertambah menjadi 1.136.054 orang dengan persentasenya menjadi
                                85,5%.
                                Angka kesembuhan kumulatif ini meningkat dengan adanya penambahan pasien sembuh harian
                                sebanyak 7.382 orang.
                            </p>
                            <span> Read More >></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="connect">
                <label class="conus">Connect with Us</label><br>
                <a href="https://www.instagram.com" class="iconconnect"><img src={{ asset('img/instagram.png') }} alt=""></a>
                <a href="https://www.facebook.com" class="iconconnect"><img src={{ asset('img/Facebook.png') }} alt=""></a>
            </div>
            <div class="contact">
                <label class="contus">Contact us:</label><br>
                <div class="baris">
                    <img src={{ asset('img/wa.png') }} alt=""><label class="rightfooter">+62 822-1780-2911</label>
                </div>
                <div class="baris">
                    <img src={{ asset('img/email.png') }} alt=""><label class="rightfooter">covcare@gmail.com</label>
                </div>
            </div>
        </section>

    </div>
</body>

</html>
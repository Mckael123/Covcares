<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Covcare</title>
    <link rel="stylesheet" href={{ asset('css/about.css') }}>
    <link rel="shortcut icon" href="/img/HomePageLOGO.png" type="image/x-icon">

</head>

<body>
    <div class="container">
        <section class="header">
            <div class="logo"><a href="/indexlogin.html"><img src={{ asset('img/HomePageLOGO.png') }}></a></div>
            <a href="../indexlogin.html" class="inactive">Home</a>
            <a href="/produk/landproduk2.html" class="inactive">See Covid Kits</a>
            <a href="/news/news2.html" class="inactive">News</a>
            <a href="/aboutus/about2.html" class="inactive">About Us</a>
            <a href="/info-covid/covinfo2.html" class="inactive">What Is COVID-19?</a>
            <div class="humicon"> <a href="/edit-profile/profile.html"><img src={{asset('img/humicon.png')}}></a></div>
        </section>
        <section class="content">
            <h1>WHO WE ARE </h1>
            <div class="garis"></div>
            <h3>Covcare is a platform that provides information and assistance services for Covid-19. Covcare provides
                information in the form of news about Covid-19 and other health news. Covcare also provides information
                to the public about tools and materials, such as medicines needed when facing the Covid-19 pandemic.
            </h3>

        </section>
        <div class="virus1"></div>
        <div class="virus2"></div>
        <div class="virus3"></div>
        <div class="virus4"></div>
        <div class="orang"></div>
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
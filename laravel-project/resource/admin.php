<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin landing page</title>
    <link rel="stylesheet" href="css/adminhome.css">
</head>

<body>
    <div class="container">
        <h1>Admin Home Page</h1>
        <div class="horizontal">

            <a href="/edit-berita/berita-edit.html">
                <div class="newscontain">
                    <div class="news">
                        <img src={{ asset('img/newshover.png') }} alt="" class="news-back">
                        <img src={{ asset('img/news.png') }} alt="" class="news-front">
                    </div>
            </a>
            <h2>News Editing</h2>
        </div>

        <div class="verificontain">
            <a href="/verifyadmin/verifyadmin.html">
                <div class="verifi">
                    <img src={{asset('img/verificationhover.png')}} alt="" class="verifi-back">
                    <img src={{asset('img/verify.png')}} alt="" class="verifi-front">
                </div>
            </a>
            <h2>Verification</h2>
        </div>
        <div class="newscontain">
            <a href="/edit-produk/produk-edit.html">
                <div class="news">
                    <img src={{asset('img/producthover.png')}} alt="" class="news-back">
                    <img src={{asset('img/product.png')}} alt="" class="news-front">
                </div>
            </a>
            <h2>Product Editing</h2>
        </div>
        <div class="newscontain">
            <a href="/login-form/login.html">
                <div class="news">
                    <img src={{asset('img/logouthover.png')}} alt="" class="news-back">
                    <img src={{asset('img/logout.png')}} alt="" class="news-front">
                </div>
            </a>
            <h2>Log Out</h2>
        </div>
    </div>
    </div>
</body>

</html>
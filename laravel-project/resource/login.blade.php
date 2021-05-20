<!doctype html>
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
        </style>
        <title>
            login page
        </title>
        <link rel="stylesheet" href={{ asset('css/login.css') }}>
        <link rel="shortcut icon" href="/img/HomePageLOGO.png" type="image/x-icon">
    </head>

    <body>
        <div id="header">
            <div class="head-form">
            </div>
            <div class="LOGO-form">
                <a href="{{url('/')}}"> <img src="/img/HomePageLOGO.png"></a>
            </div>
        </div>

        <div id="container">
            <div class="left">
                <div class="judul">
                    <h1 class="textjudul">
                        Sign In
                    </h1>
                    <div class="line">
                    </div>
                </div>
                <div class="content">
                    <form id="input" action="../edit-berita/berita-edit.html">
                        <input type="text" class="pass-input" placeholder="Username" required>
                        <input type="password" class="pass-input" placeholder="Password" required>
                        <button type="submit" class="login login-txt" >Log In</button>
                    </form>
                    <div class="alt-signup">
                        <p1 class="alternative">
                            Alternatively you can
                        </p1><a href="{{url('/registrasi')}}" id="signup">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="right">
                
            </div>
        </div>

        <div id="footer">
            <div class="contactus">
                <h1 class="textconnect">
                    Contact Us :
                </h1>
                <div class="contactdetail">
                    <div class="wa">
                        <img src="/img/wa.png">
                        <p1 class="textcontact-det">
                            +62 822-1780-2911
                        </p1>
                    </div>
                    <div class="email">
                        <img src="/img/email.png">
                        <p1 class="/img/textcontact-det">
                            covcare@gmail.com
                        </p1>
                    </div>
                </div>
            </div>
            <div class="connectus">
                <h1 class="textconnect">
                    Connect with Us
                </h1>
                <div id="icon">
                    <a href="https://www.instagram.com/"><img src="/img/instagram.png"></a>
                    <a href="https://www.facebook.com/"><img src="/img/Facebook.png"></a>
                </div>
            </div>
        </div>

    </body>
</html>
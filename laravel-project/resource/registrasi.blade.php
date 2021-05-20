<!doctype html>
<html>

<head>
    <title> from registrasi covcare</title>
    <link rel="stylesheet" href={{asset('css/registrasi.css')}}>
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

    <div class="box">

        <div id="konten">
            <div id="title">
                <div class="judul">
                    <h3> Create a New Account </h3>
                </div>
                <div id="garis-line"> </div>
            </div>
            <form id="input-group" action="{{url('/login')}}">
                <input type="text" class="input-field" placeholder="Username" required>
                <input type="password" class="input-field" placeholder="Password" required>
                <input type="email" class="input-field" placeholder="Email address" required>
                <input type="text" class="input-field" placeholder="address" required>
                <input type="text" class="input-field" placeholder="Phone Number" required>
                <button type="submit" class="submit-btn input-field">Sign Up</button>
            </form>
            <div id="sign-login">

                <div class="txt-bawah">
                    Already have an account?
                </div>
                <a href="{{url('/login')}}" id="sign">Log In</a>
            </div>

        </div>
    </div>

    <div class="foot-form">
        <div id="connect-sosmed">
            <h3 class="h3-foot"> Connect with Us </h3>
            <div id="sosmed-icons">
                <a href="https://www.facebook.com/"><img src="/img/Facebook.png"> </a>
                <a href="https://www.instagram.com/"> <img src="/img/instagram.png"></a>
            </div>
        </div>
        <div id="contact-sosmed">
            <h3 class="h3-foot"> Contact Us : </h3>
            <div id="contact-detail">
                <div id="phone-contact"> <img src="/img/telp.png">
                    <p1 class="text-p1">+62 822-1780-2911</p1>>
                </div>
                <div id="msg-contact"><img src="/img/msg.png">
                    <p1 class="text-p1">covcare@gmail.com</p1>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
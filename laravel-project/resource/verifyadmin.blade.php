<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href=/css/verifyadmin.css>
    <link rel="shortcut icon" href="/img/HomePageLOGO.png" type="image/x-icon">
</head>

<body>
    <div class="header">
        <div class="nav">
            <div class="logo">
                <!-- <a href="#"> <img src="humicon.png"></a> -->
            </div>
            <div class="menu">
                <a href="{{url('/admin')}}">
                    <h1 class="menu-font"> Home</h1>
                </a>
                <a href="{{url('/editnews')}}">
                    <h1 class="menu-font"> Edit News</h1>
                </a>
                <a href="{{url('/editproduct')}}">
                    <h1 class="menu-font"> Edit Product</h1>
                </a>
                <a href="{{url('/verifylist')}}">
                    <h1 class="menu-font">Verification</h1>
                </a>
                <a href="{{url('/login')}}">
                    <h1 class="menu-font">Log out</h1>
                </a>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="con-title">
            <p1 class="title"> verification Payment</p1>
        </div>
        <div class="line"></div>
        <div class="form" action="">
            <form>
                <div class="form-group">
                    <label for="nama">Order ID</label>
                    <h1 name="name" class='form-control col-md-9'>QcjBEn242BE</h1>
                </div>
                <div class="form-group">
                    <label for="nama">Amount transferred</label>
                    <h1 name="name" class='form-control col-md-9'>Rp.150.000</h1>
                </div>
                <div class="form-group">
                    <label for="nama">Payment date</label>
                    <h1 name="name" class='form-control col-md-9'>22-10-2020</h1>
                </div>
                <div class="form-group">
                    <label for="nama">Payment method</label>
                    <h1 name="name" class='form-control col-md-9'>Bank 1</h1>
                </div>
                <div>
                    <label>Fund transfer receipt</label><br>
                    <div class="upload-image">
                        <img src="img" width="300px" height="300px"
                            style='border-radius :500px;'> <br>
                    </div>
                </div>

                <div class="action">
                    <div class="btn-submit">
                        <button class="btn_submit greenbtn" type="submit">verify</button>
                    </div>
                    <div class="btn-submit">

                        <button class="btn_submit redbtn" type="submit"><a href="/verifyadmin/verifyadmin.html">cancel
                            </a></button>

                    </div>
                    <div class="btn-submit">
                        <button class="btn_submit yellowbtn" type="submit">denied</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>

</html>
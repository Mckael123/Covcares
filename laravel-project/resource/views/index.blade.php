@extends('oriheadfoot')
@section('title','Home Page')
<!-- image slider start -->
@section('slider')
<section class="slider">
    <div class="slides">
        <!-- radio button start -->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <!-- radio button end -->
        <!-- slide image start -->
        <div class="slide first">
            <img class="img-slide" src="/image/slide1.png" alt="">
        </div>
        <div class="slide">
            <img class="img-slide" src="/image/slide2.png" alt="">
        </div>
        <div class="slide">
            <img class="img-slide" src="/image/slide3.png" alt="">
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
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 3) {
                counter = 1;
            }
        }, 4200);
    </script>

</section>
@endsection

@section('content')
<section class="content">
    <div class="top-content">
        <div class="news-header">
            <h1 class="title-content">News</h1>
            <div class="garis"></div>
        </div>
        <a id="link-news" href="#"><button class="more-btn">
                <div class="txt-btn">See More</div>
                <div class="iconnext">
                    <img src="nextbtn.png" alt="">
                </div></a>
        </button>
    </div>
    <div class="isi-content">
        <div class="boxcontent">
            <div class="insidebox">
                <div class="gambarbox">
                    <img src="news-img.png" alt="">
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
                    <img src="news-img.png" alt="">
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
                    <img src="news-img.png" alt="">
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
@endsection
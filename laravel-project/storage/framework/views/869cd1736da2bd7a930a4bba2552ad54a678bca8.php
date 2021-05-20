<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="shortcut icon" href="/image/HomePage LOGO.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <section class="header">
            <div class="logo"><a href="<?php echo e(url('/')); ?>"><img src="/image/HomePage LOGO.png"></a></div>
            <a href="<?php echo e(url('/')); ?>" class="inactive">Home</a>
            <a href="/landproduk" class="inactive">See Covid Kits</a>
            <a href="/news" class="inactive">News</a>
            <a href="/about" class="inactive">About Us</a>
            <a href="/covinfo" class="inactive">What Is COVID-19?</a>
            <button class="login"> <a href="/login">
                    <div class="logintxt">Login</div>
                </a></button>
        </section>
        <!-- image slider start -->
        <?php echo $__env->yieldContent('slider'); ?>
        <?php echo $__env->yieldContent('content'); ?>

        <section class="footer">
            <div class="connect">
                <label class="conus">Connect with Us</label><br>
                <a href="https://www.instagram.com" class="iconconnect"><img src="/image/instagram.png" alt=""></a>
                <a href="https://www.facebook.com" class="iconconnect"><img src="/image/Facebook.png" alt=""></a>
            </div>
            <div class="contact">
                <label class="contus">Contact us:</label><br>
                <div class="baris">
                    <img src="/image/wa.png" alt=""><label class="rightfooter">+62 822-1780-2911</label>
                </div>
                <div class="baris">
                    <img src="/image/email.png" alt=""><label class="rightfooter">covcare@gmail.com</label>
                </div>
            </div>
        </section>

    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\Laravel project\covcarelaravel\resources\views/oriheadfoot.blade.php ENDPATH**/ ?>
<?php
    $koneksi =mysqli_connect("localhost","root","","person_034");
    
    if(mysqli_connect_errno($koneksi)){
        echo "koneksi gagal".mysqli_connect_error();
    }
?>
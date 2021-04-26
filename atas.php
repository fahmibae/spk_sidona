<?php include "config/koneksi.php"; ?>
<?php
function tglIndonesia($str){
    $tr   = trim($str);
    $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
    return $str;
  }  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Pariwisata Cirebon - Lifestyle Blog Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<style type="text/css">
    li.dropdown {
        display: inline-block;
    }

    .dropdown:hover .isi-dropdown {
        display: block;
    }

    .isi-dropdown a:hover {
        color: #f9f9f9 !important;
    }

    .isi-dropdown {
        margin-bottom:100px;
        position: absolute;
        display: none;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0,2);
        z-index: 500;
        background-color: #ffffff;
    }

    .isi-dropdown a {
        color: #3c3c3c !important;
    }

    .isi-dropdown a:hover {
        color: #232323 !important;
        background: #f3f3f3 !important;
    }

</style>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-sm-8">
                        <div class="breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">Selamat Datang</a></li>
                                    <li><a href="#">anda dapat akses website ini</a></li>
                                    <li><a href="#">matur suwun</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area text-center" style="height: 110px;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <a href="index.html" class="original-logo"><img src="img/core-img/sd.jpeg" width="270" height="135" alt=""></a>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav Area -->

        <div class="original-nav-area" id="stickyNav">
            
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">
                        

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li class="dropdown"><a href="#">Wisata</a>
                                        <ul class="isi-dropdown">
                                            <?php 
                                $sql = mysqli_query($konek,"SELECT * FROM wisata");
                                while ($data = mysqli_fetch_array($sql)) { 
                                ?>     
                                    <a href="single-post.php?id=<?php echo $data['id'];?>"><?php echo $data['nama_lokasi']; ?></a>
                                <?php } ?>
                                        </ul>
                                    </li>
                                   
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>

                                <!-- Search Form  -->
                                <div id="search-wrapper">
                                    <form action="index.php" method="get">
                                        <input type="text" id="search" name="search" placeholder="Cari Loksi Wisata Anda..">
                                        <input class="d-none" type="submit" value="Cari">
                                    </form>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
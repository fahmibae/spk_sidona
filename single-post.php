<?php include "atas.php"; ?>
<?php $id = $_GET['id'];
  $query = mysqli_query($konek,"SELECT * FROM wisata WHERE id='$id'");
  $data  = mysqli_fetch_array($query);
  ?>
    <!-- ##### Single Blog Area Start ##### -->
    <div class="single-blog-wrapper section-padding-0-100">

        <!-- Single Blog Area  -->
        <div class="single-blog-area blog-style-2 mb-50">
            <div class="single-blog-thumbnail" align="center">
                <img src="img/bg-img/<?php echo $data['gambar']; ?>" alt="" style="border-radius: 30px; width: 1321px;">
                <div class="post-tag-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="post-date">
                                    <a href="#"><?php echo tglIndonesia(date('d')); ?><span><?php echo tglIndonesia(date('F')); ?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div class="col-12 col-lg-12">
                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            
                            <h4><a href="#" class="post-headline mb-0"><?php echo $data['nama_lokasi'];?></a></h4>
                            <div class="post-meta mb-50">
                                <p>By <a href="#">Dinas Pariwisata Kota Cirebon</a>
                            </div>
                            <p><?php echo $data['deskripsi'];?></p>
                        </div>
                        
                        <a href="maps.php?id=<?php echo $data['id'];?>" class="btn btn-danger col-12" style="border-radius: 50px;"><i style="font-size: 75px;" class="fa fa-map-marker"></i><h1 style="font-size: 20px; color: #fff;">PLACE OF LOCATION</h1></a>
                    </div>
                    
                </div>

                <!-- ##### Sidebar Area ##### -->
                
            </div>
        </div>
    </div>
    <!-- ##### Single Blog Area End ##### -->

    <!-- ##### Instagram Feed Area Start ##### -->
    <div class="instagram-feed-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="insta-title">
                        <h5>Pilih wisata yang diinginkan</h5>
                        <hr >
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Slides -->
        <div class="instagram-slides owl-carousel" align="center">
            <?php 
         $sql = mysqli_query($konek,"SELECT * FROM wisata");
         while($data2 = mysqli_fetch_array($sql)) { ?>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed" style="width: 300px; height: 187px;">
                <img src="img/bg-img/<?php echo $data2['gambar']; ?>">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="single-post.php?id=<?php echo $data2[id]; ?>" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        <?php } ?>
            
            
        </div>
    </div>
    <!-- ##### Instagram Feed Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Nav Area -->
                    <div class="classy-nav-container breakpoint-off">
                        <!-- Classy Menu -->
                        <nav class="classy-navbar justify-content-center">

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">travel</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>
<?php include "bawah.php"; ?>
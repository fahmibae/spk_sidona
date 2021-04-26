<?php include "atas.php"; ?>
    
    <!-- ##### Hero Area Start ##### -->

    <div class="hero-area">
        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->

             <?php

              if(isset($_GET['search'])){
              $search = $_GET['search'];
              $sql  = mysqli_query($konek, "SELECT * FROM wisata WHERE nama_lokasi LIKE '%$search%' ORDER BY id DESC ");
              }else{
              $sql = mysqli_query($konek, "SELECT * FROM wisata"); 
              }
            while($data = mysqli_fetch_array($sql)) { ?>
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/<?php echo $data['gambar'];?>); height: 500px;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">Visit Me</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.php?id=<?php echo $data[id];?>"><?php echo $data['nama_lokasi'];?></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Welcome</a>
                            <h4><a href="#" class="post-headline">Selamat Datang Di Website Pariwisata Cirebon</a></h4>
                            <p>Website Pariwisata Cirebon Merupakan situs yang menyediakan berbagai macam wisata-wisata di cirebon. wisata yang memiliki nilai histori atau sebuah pengalaman bagi para pengunjung website agar dapat menemukan tempat wisata yang menarik di cirebon dengan mudah</p>
                            
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                

        
    </div>
   <?php include "bawah.php"; ?>
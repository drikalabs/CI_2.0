<!doctype html>
<html class="no-js " lang="en">
<head>

<body>  

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

       

        <section id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <p id="animasi">Temukan Destinasimu</p>
                    <small>Disini kamu akan menemukan tempat berlibur,hiburan,event,kulinner,dan destinasi wisata di Indonesia </small>
                   <!-- end row -->
                </div>
            </div>
            <div class="slider-bottom">
                <span>Explore <i class="fa fa-angle-down"></i></span>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="custom-module">
                            <img src="<?php echo base_url() ?>assets/upload/device_01_iklan.png" alt="" class="img-responsive wow slideInLeft">
                        </div><!-- end module -->
                    </div><!-- end col -->
                    <div class="col-md-8">
                        <div class="custom-module p40l">
                            <h2>Kami memberikan informasi <mark>Destinasi Wisata</mark> dari<br>
                            seluruh Indonesia.
                            </h2>

                            <p> Kamu juga dapat menemukan Hotel atau sarana lain Terdekat dengan Destinasi yang kamu mau seperti ini.</p>

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
                                    <ul class="check">
                                        <li>Pantai</li>
                                        <li>Gunung</li>
                                        <li>Taman Bermain</li>
                                        <li>Hotel</li>
                                        <li>Wisata Religi</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <ul class="check">
                                        <li>Shopping</li>
                                        <li>Kuliner</li>
                                        <li>Bangunan bersejarah</li>
                                        <li>Dll</li>
                                        
                                    </ul><!-- end check -->    
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last"></div><!-- end col-lg-4 --> 
                            </div><!-- end row -->   

                            <hr class="invis">

                            <div class="btn-wrapper">
                                
                            </div>

                        </div><!-- end module -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Sedang Populer</h3>
                    <p>Tempat wisata yang banyak dikunjungi akhir-akhir ini .</p>
                </div><!-- end title -->

                <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                <?php foreach ($index as $des) { ?>
                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="<?php echo base_url() ?>uploads/<?php echo $des->gambar ?>" style="height: 130px;" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="<?php echo base_url() ?>C_public/detil/<?php echo $des->id_wisata ?>" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Destinasi Wisata</small>
                                    <a href="<?php echo base_url() ?>C_public/detil/<?php echo $des->id_wisata ?>" title=""><?php echo $des->nama_wisata ?></a>
                                </h4>
                                <?php echo substr($des->informasi, 0 ,98) ?>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> <?php echo $des->tanggal_post ?></a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#"></a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->
                <?php } ?>
                </div><!-- end row -->

                <hr class="invis">

                <div class="section-button text-center">
                    <a href="<?php echo site_url('C_public/destinasi') ?>" class="btn btn-primary">Lihat Semua Destinasi</a>
                </div>
            </div><!-- end container -->
        </section>


        <section class="section db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer"><?php echo $jumu ?></h4>
                            <h3><i class="flaticon-black-graduation-cap-tool-of-university-student-for-head"></i> Registered User</h3>
                            <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer"><?php echo $jumn ?></h4>
                            <h3><i class="flaticon-online-course"></i> Post News</h3>
                            <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer"><?php echo $jumd ?></h4>
                            <h3><i class="flaticon-coffee-cup"></i> Post Tours</h3>
                            <p>Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. </p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Recent News</h3>
                    <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
                </div><!-- end title -->

                <div class="row">
                <?php foreach ($index2 as $n) { ?>
                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="<?php echo site_url() ?>uploads/<?php echo $n->image ?>" alt="" style="height: 180px;" class="img-responsive">
                                <div class="magnifier">
                                     <a href="<?php echo site_url() ?>C_public/readmore/<?php echo $n->id_berita ?>" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                            <div class="blog-desc" style="height: 200px;">
                                <h4><a href="<?php echo site_url() ?>C_public/readmore/<?php echo $n->id_berita ?>"><?php echo $n->judul ?></a></h4>
                
                                <?php echo substr($n->isi, 50,100) ?>
                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a href="#"><?php echo $n->tanggal ?></a></li>
                                    <li><a href="#">by <?php echo $n->penulis ?></a></li>
                                    
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->
                <?php } ?>
                     <hr class="invis">

                <div class="section-button text-center">
                    <a href="<?php echo site_url('C_public/news') ?>" class="btn btn-primary" style="margin-top: 6%" >Lihat Semua Berita</a>
                </div>
                </div><!-- end row -->
            </div><!-- end container -->

        </section>

        

        
</body>
</html>
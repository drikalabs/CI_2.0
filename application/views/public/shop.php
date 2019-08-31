<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

</head>
<body>  

    <!-- LOADER -->
    <section class="section db p120"></section>
    
        <section class="section lb p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Destinasi</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Destiny</a></li>
                                <li class="active">Destinasi</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                    <div class="shop-top">
                        <div class="clearfix">
                            <div class="pull-left">
                                <p> </p>
                            </div>
                            <div class="pull-right">
                            
                            </div>
                        </div>
                    </div>

                    <div class="row blog-grid shop-grid">
                    <?php foreach ($wisata as $w) { ?>
                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="<?php echo site_url() ?>uploads/<?php echo $w->gambar ?>" alt="" class="img-responsive" style="height: 130px;">
                                    <div class="magnifier">
                                        <a href="<?php echo base_url() ?>C_public/detil/<?php echo $w->id_wisata ?>" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center" style="height: 100px;">
                                    <h4>
                                        <a href="<?php echo base_url() ?>C_public/detil/<?php echo $w->id_wisata ?>" title=""><?php echo $w->nama_wisata ?></a>
                                        <small>Wisata</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class=""></i></a></li>
                                        </ul>
                                    </div><!-- end left -->

                                    <div class="pull-right">
                                        <ul class="list-inline">
                                            <li><a href="#"></a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div>
                    <?php } ?><!-- end col --><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="row text-center">
                        <div class="col-md-12">
                            <ul class="pagination">
                                <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">3</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">&raquo;</a></li>
                            </ul>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div><!-- end container -->
        </section>

        <!-- end footer -->

        
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
   

</body>
</html>
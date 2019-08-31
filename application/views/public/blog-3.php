<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

  
</head>
<body>  

     <section class="section db p120"></section>

        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Service</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Destiny</a></li>
                                <li class="active">Service</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                    <div class="row blog-grid">
                        <?php foreach ($service as $key ) {?>
                        <div class="col-md-4">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="<?php echo base_url() ?>uploads/<?php echo $key->gambar ?>" alt="" class="img-responsive">
                                    <div class="magnifier">
                                         <a href="<?php echo site_url() ?>C_public/detil2/<?php echo $key->id_post ?>" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small><?php echo $key->type ?></small>
                                        <a href="<?php echo site_url() ?>C_public/detil2/<?php echo $key->id_post ?>" title=""><?php echo $key->bisname ?></a>
                                    </h4>
                                   <?php echo substr($key->tentang, 0 ,30) ?>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            
                                            <li><a href="#"><i class="fa fa-clock-o"></i> <?php echo $key->tangggal ?></a></li>
                                          
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->
                        <?php } ?>
                       
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="pagination ">
                                <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">3</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">&raquo;</a></li>
                            </ul>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end boxed -->
            </div><!-- end container -->
        </section>

       

</body>
</html>
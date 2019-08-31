<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

</head>
<body>  

        <section class="section db p120">
        </section>
        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Blog & News</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Destiny</a></li>
                                <li class="active">Blog</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
        <?php foreach ($read as $r ) { ?>
        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="content blog-list">
                                <div class="blog-wrapper clearfix">
                                    <div class="blog-meta">
                                        <small><a href="#"><?php echo $r->type ?></a></small>
                                        <h3><?php echo $r->judul ?></h3>
                                        <ul class="list-inline">
                                            <li><?php echo $r->tanggal ?></li>
                                            <li><span>written by</span> <a href="#"><?php echo $r->penulis ?></a></li>
                                        </ul>
                                    </div><!-- end blog-meta -->

                                    <div class="blog-media">
                                        <img src="<?php echo site_url() ?>uploads/<?php echo $r->image ?>" alt="" class="img-responsive img-rounded">
                                    </div><!-- end media -->

                                    <div class="blog-desc-big">
                                        <?php echo $r->isi ?>
                                        <hr class="invis">

                                        <!-- end list-widget -->

                                    </div><!-- end desc -->
                                </div><!-- end blog -->
                            </div><!-- end content -->

                            <div class="authorbox">
                                <div class="site-publisher clearfix">
                                    <img src="<?php echo site_url()?>assets/upload/people_10.jpeg" alt="" class="img-responsive img-circle">
                                    <a href="single-agency.html" title=""><h4><small>about</small> <span><?php echo $r->penulis ?></span></h4></a>
                                    <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth.</p>

                                    <div class="authorbox-social">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                        </ul><!-- end list -->
                                    </div><!-- end share -->
                                </div><!-- end publisher -->
                            </div><!-- end details -->

                            <div class="content boxed-comment clearfix" id="komen">
                                <h3 class="small-title"><?php echo $jum ?> Comments</h3>
                                <div class="comments-list">
                                <?php foreach ($komen as $kom) { ?>
                                    <div class="media">
                                        <p class="pull-right"><small><?php echo $kom->tanggal ?></small></p>
                                        <a class="media-left" href="#">
                                            <img src="<?php echo base_url() ?>assets/upload/people_12.jpeg" alt="" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading user_name"><?php echo $kom->nama ?></h4>
                                            <p><?php echo $kom->komentar ?></p>
                                            <br/>
                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                        </div>
                                    </div>
                                <?php } ?>
                                    
                                </div>
                            </div><!-- end content -->

                            <div class="content boxed-comment clearfix">
                                <h3 class="small-title">Leave a Comment</h3>
                                <form class="big-contact-form" action="<?php echo site_url('C_public/komen')?>" role="form" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div >
                                        <div class="form-group">
                                        <input type="hidden" name="ikom" value="<?php echo $r->id_berita ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea placeholder="Your message" class="form-control" name="komen"></textarea>
                                        <button class="btn btn-primary" type="submit">SEND COMMENT</button>
                                    </div>
                                </form>
                            </div><!-- end content -->

                        </div><!-- end col -->

                         <div class="sidebar col-md-4">
                            <div class="widget clearfix">
                                <div class="banner-widget">
                                    <img src="upload/banner.jpeg" alt="" class="img-responsive img-rounded">
                                </div>
                            </div>

                            <div class="widget clearfix">
                                <h3 class="widget-title">Popular Posts</h3>
                                <div class="post-widget">
                                    <?php foreach ($popular as $key) {?>
                                    <div class="media">
                                        <img src="<?php echo site_url() ?>uploads/<?php echo $key->image ?>" alt="" class="img-responsive alignleft img-rounded">
                                        <div class="media-body">
                                            <h5 class="mt-0"><a href="<?php echo site_url() ?>C_public/readmore/<?php echo $key->id_berita ?>"><?php echo $key->judul ?></a></h5>
                                            <div class="blog-meta">
                                                <ul class="list-inline">
                                                    <li><?php echo $key->tanggal?></li>
                                                    <li><span>by</span> <a href="#"><?php echo $key->penulis?></a></li>
                                                </ul>
                                            </div><!-- end blog-meta -->
                                        </div>
                                    </div>
                                        <?php } ?>
                                </div><!-- end post-widget -->
                            </div><!-- end widget -->

                           <!-- end widget -->

                            <div class="widget clearfix">
                                <h3 class="widget-title">Popular Tags</h3>
                                <div class="tags-widget">   
                                   <ul class="list-inline">
                                    <li><a href="#">Pantai</a></li>
                                    <li><a href="#">Hotel</a></li>
                                    <li><a href="#">Kuliner</a></li>
                                    <li><a href="#">Shopping</a></li>
                                </ul>
                                </div><!-- end list-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end row -->
                </div><!-- end boxed -->
            </div><!-- end container -->
        </section>
        <?php } ?>

</body>
</html>
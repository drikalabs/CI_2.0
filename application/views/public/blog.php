<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

 
</head>
<body>  



    
        <section class="section db p120" >
            
        </section>

        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Blog & News</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Edulogy</a></li>
                                <li class="active">Blog</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="content blog-list">
                            <?php foreach ($news as $key) { ?>
                                <div class="blog-wrapper clearfix">
                                    <div class="blog-meta">
                                        <small><a href="#"><?php echo $key->type; ?></a></small>
                                        <h3><a href="blog-single.html" title=""><?php echo $key->judul; ?></a></h3>
                                        <ul class="list-inline">
                                            <li><?php echo $key->tanggal; ?></li>
                                            <li><span>written by</span> <a href="#"><?php echo $key->penulis ?></a></li>
                                        </ul>
                                    </div><!-- end blog-meta -->

                                    <div class="blog-media">
                                        <a href="blog-single.html" title=""><img src="<?php echo site_url() ?>uploads/<?php echo $key->image ?>" alt="" class="img-responsive img-rounded"></a>
                                    </div><!-- end media -->

                                    <div class="blog-desc-big">
                                        <!-- p class="lead">You can get all the icon versions by checking out our standard license that come with every free icons..</p>
                                        <p> --><?php echo substr($key->isi, 0 ,470) ?>
                                        <br/><a href="<?php echo site_url() ?>C_public/readmore/<?php echo $key->id_berita ?>" class="btn btn-primary">Read More</a>
                                    </div><!-- end desc -->
                                </div>
                                <br/><!-- end blog -->
                                <?php } ?>
                            </div><!-- end content -->

                            <?php echo $this->pagination->create_links(); ?>
                            
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

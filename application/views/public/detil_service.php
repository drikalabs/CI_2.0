<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<head>

    <!-- Basic -->

</head>
<body>  

    <!-- LOADER -->
    

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
       
        <!-- END # MODAL LOGIN -->
 <section class="section db p120"></section>
<section class="section cb"></section>        

        <section class="section cb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tagline-message page-title">
                            <h3>Detil Informasi</h3>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-6 text-right">
                        <ul class="breadcrumb">
                            <li><a href="javascript:void(0)">Destiny</a></li>
                            <li class="active">Detil</li>
                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
        <?php foreach ($detil as $d) {?>
        <section class="section">
            <div class="container">
                <div class=" ">
                    <div class="row">
                        <div class="col-md-6 shop-media">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="image-wrap entry">
                                    <img src="<?php echo base_url() ?>uploads/<?php echo $d->gambar ?>" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a rel="prettyPhoto[inline]" href="<?php echo base_url() ?>uploads/<?php echo $d->gambar ?>" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <!-- end row -->
                        </div><!-- end col -->

                        <div class="col-md-6">
                            <div class="shop-desc">
                                <h3><?php echo $d->bisname ?></h3>
                                <small></small>
                                <?php echo $d->tentang ?>
                                <!-- end shop meta -->
                            </div><!-- end desc -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="row">   
                        <div class="col-md-12">
                            <div class="shop-extra">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Additional information</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Reviews (<?php echo $jum; ?>)</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <?php echo $d->deskripsi_usaha ?>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <h3>Additional information</h3>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Location</strong></td>
                                                    <td><?php echo $d->alamat ?></td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <h3>Reviews</h3>

                                        <p>Your email address will not be published. Required fields are marked *</p>

                                        <div class="rating">
                                            <p>Your Rating</p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>

                                        <hr class="invis">
                                       
                                                <div class="comments-list">
                                                <?php foreach ($review as $kom) { ?>
                                                    <div class="media">
                                                        <p class="pull-right"><small><?php echo $kom->tanggal ?></small></p>
                                                        <a class="media-left" href="#">
                                                            <img src="<?php echo base_url() ?>assets/upload/people_12.jpeg" alt="" class="img-circle">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading user_name"><?php echo $kom->name ?></h4>
                                                            <p><?php echo $kom->review ?></p>
                                                            <br/>
                                                            
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                    
                                                </div>
                                      

                                    <hr class="invis">

                                    <?php if (! $this->session->userdata('status') == "login") { ?>
                                        <form class="big-contact-form row" role="search">
                                            <div class="col-md-12">
                                                <textarea class="form-control" disabled placeholder="Your reviews.."></textarea>
                                            </div>              
                                            <div class="">   
                                                <input type="hidden" class="" disabled >
                                            </div>     
                                            <div class="">   
                                                <input type="hidden" disabled >
                                            </div>             
                                            <div class="col-md-12">
                                                <button type="submit" disabled class="btn btn-primary">Submit</button>
                                            </div>              
                                        </form>
                                    <?php }else{  ?>
                                        <form class="big-contact-form row" role="search" action="<?php echo site_url('C_public/review')?>" role="form" method="POST" enctype="multipart/form-data">
                                            <div class="col-md-12">
                                                <textarea class="form-control" placeholder="Your reviews.." name="review"></textarea>
                                            </div>              
                                            <div class="">   
                                                <input type="hidden" class="" name="nama" value="<?php echo $this->session->userdata('nama'); ?>">
                                            </div>     
                                            <div class="">   
                                                <input type="hidden" name="iwis" value="<?php echo $d->id_post ?>" >
                                            </div>  
                                             <div class="">   
                                                <input type="hidden" name="ius" value="<?php echo $this->session->userdata('id'); ?>" >
                                            </div>           
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>              
                                        </form>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div><!-- end shop-extra -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                   <!-- end related -->
                </div><!-- end boxed -->
            </div><!-- end container -->
        </section>
        <?php } ?>
        
</body>
</html>
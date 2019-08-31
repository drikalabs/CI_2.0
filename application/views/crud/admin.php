<!DOCTYPE html>
<html>
<head>
</head>
<body>
	 <div class="jumbotron" data-pages="parallax">
      <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20 m-t-50 p-t-25 p-b-25">
        <div class="inner container">
          <h3 class="">Dashboard</h3>
          <p>Stay connected with our Network just because it's so much easier. You can set your  business in place.</p>
        </div>
      </div>
    </div>
    <div class="bg-master-lightest">
      <div class="container">  
        <div class="row">
          <div class="panel panel-transparent">
            <h3 class="font-heading">Recent Post of Tours</h3><hr class="m-r-30" />
          </div>
        </div>

          <div class="row">
            <div class="col-md-3">
              <div class="thumbnail" style="position: relative;">
              &nbsp; <span class="glyphicon glyphicon-asterisk" style="position: absolute;right: 5%;top: 5%;"></span>
                <hr>
                <div class="card-description">
                  <div class="text-center m-r-30 m-l-30">
                    <span class="glyphicon glyphicon-plus-sign" style="font-size: 700%;"></span>
                    <p>
                      Add a Destinantion to your listing and get started rent it
                    </p>
                    <a class="btn btn-cons btn-primary" href="<?php echo site_url('crud/add_destination') ?>">Add Destination</a>
                  </div>
                </div>
                <div class="card-footer clearfix">
                  &nbsp;
                </div>
              </div>
            </div>
            <?php foreach ($wisata as $key ) {   ?>
            <div class="col-md-3">
              <div class="thumbnail">
                <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                </div>
                  <h5>&nbsp;<strong><?php echo $key->nama_wisata ?></strong></h5>
                <hr>
                <div class="card-description">
                  <div class="text-center m-r-30 m-l-30">
                    <img src="<?php echo site_url() ?>uploads/<?php echo $key->gambar ?>" width="200" height="200" style="border-radius: 100px;" />
                  </div>
                </div>
                <div class="card-footer clearfix">
                  <h5>Description :</h5>
                  <?php echo substr($key->informasi, 0 ,20); ?>
               </div>
              </div>
            </div>
          <?php } ?>
          </div>
        <hr>
        <!-- news -->
        <div class="bg-master-lightest">
      <div class="container">  
        <div class="row">
          <div class="panel panel-transparent">
            <h3 class="font-heading">Recent Post of News</h3><hr class="m-r-30" />
          </div>
        </div>

          <div class="row">
            <div class="col-md-3">
              <div class="thumbnail" style="position: relative;">
              &nbsp; <span class="glyphicon glyphicon-asterisk" style="position: absolute;right: 5%;top: 5%;"></span>
                <hr>
                <div class="card-description">
                  <div class="text-center m-r-30 m-l-30">
                    <span class="glyphicon glyphicon-plus-sign" style="font-size: 700%;"></span>
                    <p>
                      Add a News to your listing and get started rent it
                    </p>
                    <a class="btn btn-cons btn-primary" href="<?php echo site_url('crud/add_news') ?>">Add News</a>
                  </div>
                </div>
                <div class="card-footer clearfix">
                  &nbsp;
                </div>
              </div>
            </div>
        <?php foreach ($news as $row ) { ?>
            <div class="col-md-3">
              <div class="thumbnail">
                <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                </div>
                  <h5>&nbsp;<strong><?php echo $row->judul ?></strong></h5>
                <hr>
                <div class="card-description">
                  <div class="text-center m-r-30 m-l-30">
                    <img src="<?php echo site_url() ?>uploads/<?php echo $row->image ?>" width="200" height="200" style="border-radius: 100px;" />
                  </div>
                </div>
                <div class="card-footer clearfix">
                  <h5>Type :</h5>
                  <?php echo $row->type; ?>
                </div>
              </div>
            </div>
            
        <?php } ?>
          </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
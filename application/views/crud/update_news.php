<!DOCTYPE html>
<html>
<head>
</head>
</head>
<body>
<div class="jumbotron" data-pages="parallax">
	<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20 m-t-50 p-t-25 p-b-25">
        <div class="inner container">
        <h3><b>Update News</b></h3>
        </div>
        </div>
</div>
<?php foreach ($news as $key ) {

?>
<div class="container">
	 <form id="form_Add" action="<?php echo site_url('Crud/news_update_proses')?>/<?php echo $key->id_berita ?>" role="form" method="POST" enctype="multipart/form-data">


		<div class="row">
			<div class="col-md-4 col-lg-4">
				<div class="form-grup">
				<label>Judul</label>
				<input type="text" class="form-control" name="judul" value="<?php echo $key->judul ?>" ></input>
				</div>	
			</div>
			<div class="col-md-4 col-lg-4 col-sm-6 ">
				<div class="form-grub">
					<label>Penulis</label>
					<input type="text" class="form-control" name="penulis" value="<?php echo $key->penulis ?>"></input>
				</div>
			</div>
			<div class=" col-md-4 col-lg-4 col-sm-6 ">
				<div class="form-grub">
					<label>Type</label>
					<input type="text" class="form-control" name="type" value="<?php echo $key->type ?>"></input>
				</div>
			</div>
			<div class="col-md-12 col-lg-12">
				<div class="form-grub">
					<label>Text Berita</label>
					<textarea name="berita" class="form-control" rows="17" ><?php echo $key->isi ?></textarea>
				</div>
			</div>
			<div class="col-md-12 col-lg-12">
				<div class="form-grub">	
				<label>Gambar</label>
				<input type="file" name="gambar" class="form-control" ></input>
				<img style="height: 50%;width: 50%" src="<?php echo site_url() ?>uploads/<?php echo $key->image ?>">	
				</div>
			</div>
			<div  style="margin-top: 15px;" class="col-md-6 col-lg-6">
			<div class="form-grub">	
			<button type="reset" class="btn btn-info form-control">Reset</button>	
			</div>
			</div>
			<div style="margin-top: 15px;" class="col-md-6 col-lg-6">
			<div class="form-grub">	
			<button type="submit" class="btn btn-success form-control" value="upload" >Post</button>
			</div>
			</div>
		</div>
	</form>
</div>
<?php } ?>
<hr>
</body>
</html>
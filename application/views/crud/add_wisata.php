<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<div class="jumbotron" data-pages="parallax">
	<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20 m-t-50 p-t-25 p-b-25">
        <div class="inner container">
        <h3><b>Add Tours</b></h3>
        </div>
        </div>
</div>
<div class="container">
	<form id="form_Add" action="<?php echo site_url('Crud/proses_add_wisata')?>" role="form" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-6 col-lg-6 col-sm-6 ">
				<div class="form-grup">
				<label>Nama Tempat</label>
				<input type="text" class="form-control" name="wisata" ></input>
				</div>	
			</div>
			<div class="col-md-6 col-lg-6 col-sm-6 ">
				<div class="form-grub">
					<label>Lokasi</label>
					<input type="text" class="form-control" name="lokasi"></input>
				</div>
			</div>
			<div class=" col-md-4 col-lg-4">
				<div class="form-grub">
					<label>Informasi singkat</label>
					<textarea name="informasi" class="form-control" rows="17"></textarea>
				</div>
			</div>
			<div class="col-md-8 col-lg-8">
				<div class="form-grub">
					<label>Deskripsi</label>
					<textarea name="deskripsi" class="form-control" rows="17"></textarea>
				</div>
			</div>
			<div class="col-md-12 col-lg-12 col-sm-12 ">
				<div class="form-grub">	
				<label>Gambar</label>
				<input type="file" name="gambar" class="form-control"></input>	
				</div>
			</div>
			
			<div  style="margin-top: 15px;" class="col-md-6 col-lg-6 col-sm-6 ">
			<div class="form-grub">	
			<button type="reset" class="btn btn-info form-control">Reset</button>	
			</div>
			</div>
			<div style="margin-top: 15px;" class="col-md-6 col-lg-6 col-sm-6 ">
			<div class="form-grub">	
			<button type="submit" class="btn btn-success form-control">Post</button>
			</div>
			</div>
		</div>
	</form>
</div>
<hr>
</body>
</html>
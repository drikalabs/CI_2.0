<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <section class="section db p120"></section>
<section class="section cb">
	 <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>User Bussines</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Destiny</a></li>
                                <li class="active">Bussines</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
</section>
<div class="container">
	<form id="form_Add" action="<?php echo site_url('C_public/proses_add_ubis')?>" role="form" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-6 ">
				<div class="form-grup">
				<label>Nama Usaha</label>
				<input type="text" class="form-control" name="usaha" ></input>
				</div>	
			</div>
			<div class="col-md-4 col-lg-4 col-sm-6 ">
				<div class="form-grub">
					<label>Alamat</label>
					<input type="text" class="form-control" name="alamat"></input>
				</div>
			</div>
			<div class=" col-md-4 col-lg-4">
				<div class="form-grub">
					<label>Jenis usaha</label>
					<select class="full-width form-control" data-init-plugin="select2" required name="type">
							<optgroup label="Penginapan">
								<option>Hotel</option>
								<option>Apartemen</option>
							</optgroup>
							<optgroup label="Toko/Kuliner">
								<option>Toko Oleh-oleh</option>
								<option>Restoran</option>
								<option>Cafe</option>
								<option>Travel</option>
							</optgroup>
						</select>
				</div>
			</div>
			<div class="col-md-4 col-lg-4">
				<div class="form-grub">
					<label>tentang</label>
					<textarea name="tentang" class="form-control" rows="17"></textarea>
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
				<input type="hidden" name="iduser" value="<?php echo $this->session->userdata('id'); ?>"></input>	
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
<hr class="invis">
</body>
</html>
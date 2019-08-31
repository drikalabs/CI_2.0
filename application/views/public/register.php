<section class="section db p120">
        </section>
        <section class="section gb nopadtop">
<div class="content">
	<div class="container">
				<p class="p-t-40 p-l-50 p-b-40 fs-16 font-heading">Sign up your account</p>
				<form id="form-login" class="p-l-50 p-r-50 p-b-40 text-master" role="form" method="post" action="<?php echo site_url('C_public/proses_regis');?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group form-group-default required">
								<label>First Name</label>
								<input type="text" class="form-control" placeholder="First Name" name="fristname" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group-default required">
								<label>Surname</label>
								<input type="text" class="form-control" placeholder="Surname" name="surename" required />
							</div>
						</div>
					</div>
					<div class="form-group form-group-default required">
						<label>Company</label>
						<div class="controls">
							<input type="text" class="form-control" placeholder="Company" required name="company" />
						</div>
					</div>
					<div class="form-group form-group-default form-group-default-select2 required">
						<label>Country</label>
						<select class="full-width form-control" data-init-plugin="select2" required name="country">
							<optgroup label="Asia">
								<option>Indonesia</option>
								<option>Malaysia</option>
							</optgroup>
							<optgroup label="Europe">
								<option>Holland</option>
								<option>Germany</option>
								<option>Argentina</option>
							</optgroup>
						</select>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group form-group-default required">
								<label>Contact No: Country Code</label>
								<input type="number" class="form-control" placeholder="e.g.60199" required name="countrycode" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone Number</label>
								<input type="number" class="form-control" placeholder="+628xxx/08xxxxx" name="phone"></input>
							</div>
						</div>
					</div>
					<div class="form-group form-group-default required">
						<label>Email</label>
						<input type="mail" name="email" class="form-control" placeholder="admin@default.com" required name="email" />
					</div>
					<div class="form-group form-group-default required">
						<label>Password</label>
						<input type="password" class="form-control" required name="password" />
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="checkbox check-primary ">
								<input type="checkbox" value="1" id="checkbox1" name="check" required >
								<label for="checkbox1" class="text-white">Accept Terms & Conditions</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary">Sign Up</button>
							</div>
						</div>
						<div class="row">
							&nbsp;
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-5"></div>
	</div>
</div>
  </section>
<div class="content">  

        <section class="section db p120">
        </section>

        <section class="section gb nopadtop">
	<div class="container">
		<div class="">
			<div class="">
				<div class="">
					<p class="p-t-35 fs-16">Sign into your account</p>
					<!-- START Login Form -->
					<form method="post" action="<?php echo site_url('C_public/proses_login'); ?>" class="p-t-15 p-d-20" id="form-login" role="form-login">
						<!-- START Form Control-->
						<div class="form-group form-group-default">
							<label class="text-master">Login</label>
							<div class="controls">
								<input type="email" name="email" placeholder="Email" id="email" class="form-control" required>
							</div>
						</div>
						<!-- END Form Control-->
						<!-- START Form Control-->
						<div class="form-group form-group-default">
							<label class="text-master">Password</label>
							<div class="controls">
								<input type="password" class="form-control" name="password" id="password" placeholder="Credentials" required>
							</div>
						</div>
						<!-- START Form Control-->
						<div class="row">
							<div class="col-md-6 no-padding">
								<div class="checkbox ">
									<input type="checkbox" value="1" id="checkbox1">
									<label for="checkbox1">Keep Me Signed in</label>
								</div>
							</div>
							<div class="col-md-6 text-right">
								<a href="<?php echo site_url('C_auth/forgot');?>" class="text-white small"><u>Forgot Password</u></a>
							</div>
						</div>
						<!-- END Form Control-->
						<button type="submit" name="submit" class="btn btn-primary btn-cons m-t-10" value="form-login">Sign in</button>
					</form>
				</div>
				<!--END Login Form-->
			</div>
        </section>
		</div>
		<div class="col-md-6">
		</div>
	</div>
</div>
<script>
	$(function() {
		if (localStorage.chkbx && localStorage.chkbx != '') {
			$('#checkbox1').attr('checked', 'checked');
			$('#email').val(localStorage.usrname);
			$('#password').val(localStorage.pass);
			} else {
			$('#checkbox1').removeAttr('checked');
			$('#email').val('');
			$('#password').val('');
		}
		
		$('#checkbox1').click(function() {
			
			if ($('#checkbox1').is(':checked')) {
				// save email and password
				localStorage.usrname = $('#email').val();
				localStorage.pass = $('#password').val();
				localStorage.chkbx = $('#checkbox1').val();
			} 
			else {
				localStorage.usrname = '';
				localStorage.pass = '';
				localStorage.chkbx = '';
			}
		});
	});
</script>

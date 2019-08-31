<div class="page-content-wrapper">
	<div class="content">
		<div class="social-wrapper">
			<div class="social " data-pages="social">
				<div class="jumbotron" data-pages="parallax" data-social="cover">
					
					<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
						<div class="inner">
							<div class="pull-bottom bottom-left m-b-40">
								<h3 class="text-white no-margin">Manage your <span class="semi-bold">Users</span> here</h3>
							</div>
						</div>
						
					</div>
				</div>
				<div class="feed" style="overflow: hidden;">
					<div class="day no-margin">
						<div class="card no-border full-width">
							<div class="row">
								<div class="bg-master-lightest">
									<div class="container-fluid sm-p-l-20 sm-p-r-20 p-t-10 p-b-25">
										<div class="inner">
											<h3 class="m-l-100">Registered User</h3><hr />
											
											<div class="panel panel-featured m-r-20">
												<div class="panel-heading">
													<div class="panel-title">
														Users List
													</div>
													
													<div class="clearfix"></div>
												</div>
												<div class="panel-body">
													<div class="table-responsive">
														<table class="table table-hover" id="Data_table">
															<thead>
																<tr>
																	<!-- NOTE * : Inline Style Width For Table Cell is Required as it may differ from user to user
																		Comman Practice Followed
																	-->
																	
																	<th style="width:10%">Firstname</th>
																	<th style="width:10%">Surname</th>
																	<th style="width:10%">Company</th>
																	<th style="width:10%">Country</th>
																	<th style="width:10%">Country Code</th>
																	<th style="width:10%">Phone Number</th>
																	<th style="width:10%">Email Address</th>
																	<th style="width:5%">Aksi</th>
																</tr>
															</thead>
															
															<tbody>
																<?php 
																	foreach($user as $user) { 
																	?>
																	<tr>
																		
																		<td class="v-align-middle">
																			<p><?php echo $user->fname; ?></p>
																		</td>
																		<td class="v-align-middle ">
																			<p><?php echo $user->surename; ?></p>
																		</td>
																		<td class="v-align-middle">
																			<p><?php echo $user->company; ?></p>
																		</td>
																		<td>
																			<p><?php echo $user->contry; ?></p>
																		</td>
																		<td>
																			<p><?php echo $user->cocode;?></p>
																		</td>
																		<td>
																			<p><?php echo $user->phone; ?></p>
																		</td>
																		<td>
																			<p><?php echo $user->email; ?></p>
																		</td>
																		<td>
																			<a href="<?php echo site_url() ?>Crud/delete_user/<?php echo $user->id_user; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
																		</td>
																	</tr>
																<?php } ?>

															</tbody>
															
														</table>
														<?php echo $this->pagination->create_links(); ?>
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
<script type="text/javascript">
	/*$(document).ready(function(){
		$('#delete_check').click(function(){
			var id = [];
			
			$(':checkbox:checked').each(function(i){
				id[i] = $(this).val();
			});
			
			if(id.length === 0) //tell you if the array is empty
			{
				alert("Please Select atleast one checkbox");
				return false;
			}
			else
			{
				if(confirm("Are you sure you want to delete this?"))
				{
					$.ajax({
						url:'<?php echo site_url('')?>',
						method:'POST',
						data:{id:id},
						success:function()
						{
							for(var i=0; i<id.length; i++)
							{
								$('tr#'+id[i]+'').css('background-color', '#ccc');
								$('tr#'+id[i]+'').fadeOut('slow');
							}
							location.reload();
						}
						
					});
				}
				
			}
		});
	});
	
	function toggle(source) {
		var checkboxes = document.querySelectorAll('input[type="checkbox"]');
		for (var i = 0; i < checkboxes.length; i++) {
			if (checkboxes[i] != source)
			checkboxes[i].checked = source.checked;
		}
	}*/
</script>

<script type="text/javascript">
	/*$(document).ready(function(){
		table = $('#Data_table').DataTable({
			"bInfo": false,
			"bLengthChange": false,
			"bAutoWidth": false,
			"bPaginate":false
		});		
		
		$('div.dataTables_filter').css("margin-left","-100%").css("width","100%");
		
		$('#checkbox').change(function(){
			cells = table.cells().nodes();
			$(cells).find(':checkbox').prop('checked', $(this).is(':checked'));
		});
	});*/
</script>	
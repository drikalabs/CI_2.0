<div class="page-content-wrapper">
	<div class="content">
		<div class="social-wrapper">
			<div class="social " data-pages="social">
				<div class="jumbotron" data-pages="parallax" data-social="cover">
					
					<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
						<div class="inner">
							<div class="pull-bottom bottom-left m-b-40">
								<h3 class="text-white no-margin">Manage your <span class="semi-bold">listing</span> here</h3>
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
											<h3 class="m-l-100">User Post</h3><hr />
											
											<div class="panel panel-featured m-r-20">
												<div class="panel-heading">
													<div class="panel-title">
														Post List
													</div>
													
													<div class="clearfix"></div>
												</div>
												<div class="panel-body">
													<div class="table-responsive">
														<table class="table table-hover" id="Data_table">
															<thead>
																<tr>
										
																	<th style="width:10%">Bisnis</th>
																	<th style="width:10%">Alamat</th>
																	<th style="width:10%">Type</th>
																	<th style="width:10%">Tentang Usaha</th>
																	<th style="width:10%">Deskripsi</th>
																	<th style="width:10%">Tanggal</th>
																	<th style="width:5%">Aksi</th>
																</tr>
															</thead>
															
															<tbody>
																<?php 
																	foreach($list as $user) { 
																	?>
																	<tr>
																		
																		<td class="v-align-middle">
																			<p><?php echo $user->bisname; ?></p>
																		</td>
																		<td class="v-align-middle ">
																			<p><?php echo substr($user->alamat, 0 ,20); ?></p>
																		</td>
																		<td class="v-align-middle">
																			<p><?php echo $user->type; ?></p>
																		</td>
																		<td>
																			<p><?php echo substr($user->tentang, 0 ,20); ?></p>
																		</td>
																		<td>
																			<p><?php echo substr($user->deskripsi_usaha, 0 ,20);?></p>
																		</td>
																		<td>
																			<p><?php echo $user->tangggal; ?></p>
																		</td>
																		
																		<td>
																			<div class="section-button text-center">
																				<a href="<?php echo site_url() ?>Crud/accept/<?php echo $user->id_post; ?>" class="btn btn-info">Accept</a>
																			</div>
																		</td>
																	</tr>
																<?php } ?>

															</tbody>
															
														</table>
														
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
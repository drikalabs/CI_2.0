<div class="page-content-wrapper">
	<div class="content">
		<div class="social-wrapper">
			<div class="social " data-pages="social">
				<div class="jumbotron" data-pages="parallax" data-social="cover">
					
					<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
						<div class="inner">
							<div class="pull-bottom bottom-left m-b-40">
								<h3 class="text-white no-margin">Manage your <span class="semi-bold">News</span> here</h3>
							</div>
						</div>
						<div class="top-left m-t-80 m-l-30">
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
											<h3 class="m-l-100">Posted News</h3><hr />
											
											<div class="panel panel-featured m-r-20">
												<div class="panel-heading">
													<div class="panel-title">
														<h5><b>News List</b></h5>
													</div>
													<div class="btn-group pull-right m-b-10">
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
																	<th style="width:10%">Penulis</th>
																	<th style="width:10%">Judul</th>
																	<th style="width:10%">Type</th>
																	<th style="width:10%">Isi</th>
																	<th style="width:10%">Gambar</th>
																	<th style="width:10%">Tanggal</th>
																	<th style="width:10%">Aksi</th>
																</tr>
															</thead>
															<tbody>
															<?php 
															foreach ($news as $row ) {
															 ?>
																<tr>
																<td class="v-align-middle">
																	<p><?php echo $row->penulis; ?></p>
																</td>
																<td class="v-align-middle ">
																	<p><?php echo $row->judul; ?></p>
																</td>
																<td class="v-align-middle">
																	<p><?php echo $row->type; ?></p>
																</td>
																<td class="v-align-middle">
																	<p><?php echo substr($row->isi, 0,30); ?></p>
																</td>
																<td>
																	<p><img style=" height: 50%;width: 50%;"
																	src="<?php echo base_url()?>uploads/<?php echo $row->image ;?>"></p>
																</td>
																<td>
																	<p><?php echo $row->tanggal ?></p>
																</td>
																<td>
																	<div class="btn-group">
																	 <a href="<?php echo base_url() ?>crud/news_edit/<?php echo $row->id_berita; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
																	 <a href="<?php echo base_url() ?>crud/delete_news/<?php echo $row->id_berita; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
																	</div>
																</td>
																			
																		</tr>		
															</tbody>
															<?php } ?>
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

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js" type="text/javascript" charset="utf-8" ></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
	<script src="<?php echo base_url() ?>assets/js/npm.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="border-radius: 0px;">
  <div class="container-fluid">
  	<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url() ?>Crud" style="margin-bottom:2%;"><img src="<?php echo base_url() ?>assets/images/dashboardinactive.png" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      	<li style="margin-top: 3%;" class="dropdown">
      		<a a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrative <span class="caret"></span></a>
      		<ul class="dropdown-menu" style="border-radius: 5px;">
      			<li><a href="<?php echo base_url() ?>Crud/news_list">News</a></li>
      			<li><a href="<?php echo base_url() ?>Crud/registered">Registered User</a></li>
      			<li><a href="<?php echo base_url() ?>Crud/list_wisata">Tours</a></li>
            <li><a href="<?php echo base_url() ?>Crud/bisnis_list">user business</a></li>
      		</ul>
      	</li>
      <li style="margin-top: 3%;" class="dropdown">
      		<a a class="dropdown-toggle" data-toggle="dropdown" href="#">Listing <span class="caret"></span></a>
      		<ul class="dropdown-menu" style="border-radius: 5px;">
      			<li><a href="<?php echo base_url() ?>Crud/add_news">Add news</a></li>
      			<li><a href="<?php echo base_url() ?>Crud/add_destination">Add destination</a></li>
      		</ul>
      	</li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      	<li style="margin-top: 3%;"><a href="<?php echo site_url() ?>crud/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
	</div>
  </div>
</nav>
</body>
</html>
<?php require_once 'GetData1.php';?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/admetro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Mar 2020 10:37:44 GMT -->
<head>
	<meta charset="utf-8" />
	<title>COVID-19 Cases</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="corona virus detail and detection" name="COVID-19" />

	<meta content="Detection coronavirus recover,dead patient" name="COVID-19" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="assets/css/app.min.css" rel="stylesheet" />
    <link href="assets/w3.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<header id="header" class="app-header">
			<!-- BEGIN navbar-toggle-minify -->
			<button type="button" class="navbar-toggle navbar-toggle-minify" data-click="sidebar-minify">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- END navbar-toggle-minify -->
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand">
					COVID-19 Cases
				</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN navbar-nav -->
			<ul class="navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" data-display="static" class="nav-link">
						<i class="fa fa-stethoscope nav-icon"></i>
					</a>
					
				</li>
				
						
						
					
						
				
			</ul>
			<!-- END navbar-nav -->
			<!-- BEGIN navbar-search -->
			
			<!-- END navbar-search -->
		</header>
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
		<sidebar id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- BEGIN nav -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="profile-img">
							<img src="assets/img/Covid-19.jpeg" />
						</div>
						<div class="profile-info">
							<h4>COVID-19 Cases</h4>
							<p>In All World</p>
						</div>
					</li>
					<li class="nav-divider"></li>
					<li class="nav-header">Total Cases in World</li>
					<li class="nav-divider"></li>
					
					<li class="has-sub">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-user-md w3-text-purple fa-2x"></i> </span>
							<span class="nav-text">Total Cases <span class="nav-label  w3-text-purple"><?= Data(0   ,'TotalCases',$data);?></span></span>
							
						</a>
						
					</li>
					
					<li class="has-sub">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-meh w3-text-red fa-2x"></i> </span>
							<span class="nav-text">TotalDeaths <span class="nav-label  w3-text-red"><?= Data(0,'TotalDeaths',$data);?></span></span>
							
						</a>
						
					</li>
					<li class="has-sub">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-smile  w3-text-green fa-2x"></i> </span>
							<span class="nav-text">TotalRecovered <span class="nav-label w3-text-green"><?= Data(0,'TotalRecovered',$data);?></span></span>
							
						</a>
						
					</li>
					<li class="has-sub">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-ambulance w3-text-blue fa-2x"></i> </span>
							<span class="nav-text">NewCases <span class="nav-label w3-text-blue"><?= Data(0,'NewCases',$data);?></span></span>
						
						</a>
						
					</li>
					
					
									
				
				</ul>
				<!-- END nav -->
			</div>
			<!-- END scrollbar -->
		</sidebar>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
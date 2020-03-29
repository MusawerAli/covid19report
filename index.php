		<?php
		
		include_once 'header.php';
	
		?>
		<!-- BEGIN page-header -->
			<h1 class="page-header">
			COVID-19 Cases <small>All over world</small>
			</h1>
			<h1 class="page-header">
			Updated at:  <small class="w3-code w3-text-red">Sun Mar 29, 08:43 AM</small>
			</h1>
			<!-- END page-header -->
			<div class="row">
				<!-- BEGIN col-6 -->
				<div class="col-12 col-md-12 m-b-5">
					<div class="f-s-12 m-b-5"><b></b></div>
					<!-- BEGIN widget-card -->
					<a href="#" class="widget-card dynamic text-center">
						<div class="widget-card-cover" style="background-image: url(assets/img/world.jpg)">
							<div class="cover-bg"></div>
						</div>
						<div class="widget-card-content">
							<div class="m-b-10 m-t-30">
								<img src="assets/img/mask.jpg" width="100" height="50" class="img-circle" alt="" />
							</div>
							<h4 class="widget-title widget-title-inverse">COVID-19 Cases</h4>
							<div class="widget-desc widget-desc-inverse m-b-15">Overall the world</div>
						</div>
						<div class="widget-card-content bg-white p-15">
							<!-- BEGIN row -->
							<div class="row">
								<!-- BEGIN col-4 -->
								<div class="col-4">
									<div class="widget-title text-black f-s-18"><?= Data(403,'TotalCases',$data);?></div>
									<div class="widget-desc w3-text-purple fa fa-user-md fa-2x"> TotalCases</div>
								</div>
								<!-- END col-4 -->
								<!-- BEGIN col-4 -->
								<div class="col-4">
									<div class="widget-title  text-black f-s-18"><?= Data(403,'TotalDeaths',$data);?></div>
									<div class="w3-text-red fa fa-meh fa-2x widget-desc"> TotalDeaths</div>
								</div>
								<!-- END col-4 -->
								<!-- BEGIN col-4 -->
								<div class="col-4">
									<div class="widget-title text-black f-s-18"><?= Data(403,'TotalRecovered',$data);?></div>
									<div class="widget-desc w3-text-green fa fa-smile fa-2x"> TotalRecovered</div>
								</div>

							
								<!-- END col-4 -->
							</div>

							<div class="row">
							<div class="col-4">
									<div class="widget-title text-black f-s-18"><?= Data(403,'NewCases',$data);?></div>
									<div class="widget-desc w3-text-yellow fa fa-ambulance fa-2x"> NewCases</div>
								</div>
								<!-- END col-4 -->
								<!-- BEGIN col-4 -->
								<div class="col-4">
									<div class="widget-title text-black f-s-18"><?= Data(403,'Serious,Critical',$data);?></div>
									<div class="widget-desc w3-text-orange fa fa-meh fa-2x"> Serious,Critical</div>
								</div>
								<!-- END col-4 -->
								<!-- BEGIN col-4 -->
								<div class="col-4">
									<div class="widget-title text-black f-s-18"><?= Data(403,'NewDeaths',$data);?></div>
									<div class="widget-desc w3-text-pink fa fa-meh fa-2x"> NewDeaths</div>
								</div>
							</div>
							<!-- END row -->
						</div>
						<!-- END widget-card-content -->
					</a>
					<!-- END widget-card -->
				</div>
				<!-- END col-6 -->
				<!-- BEGIN col-6 -->
				<div class="col-12 col-md-6 m-b-5">
					
					
				</div>
				<!-- END col-6 -->
			</div>
			<!-- BEGIN row -->
			<div class="row">
			<!-- BEGIN col-6 -->
				<div class="col-12 col-md-6 m-b-5">
					<div class="f-s-20 m-b-5"><b>Cases in Islamic Countries</b></div>
					<hr class="f-s-12 m-b-5"><b></b></hr>
					<!-- BEGIN row -->
					<div class="row">
						<!-- BEGIN col-6 -->
						<div class="col-6">
							<!-- BEGIN widget-card -->
							<a href="#" class="widget-card widget-card-inverse dynamic text-center">
								<div class="widget-card-cover" style="background-image: url(assets/img/country/<?=Data(29,'Country,Other',$data);?>.jpg">
									<div class="cover-bg"></div>
								</div>
								<div class="widget-card-content p-t-40 p-b-40">
									<h4 class="widget-title widget-title-inverse  f-s-20 m-b-5">Total Cases: <?= Data(29,'TotalCases',$data);?></h4>
									<h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-green">Recover Paitent:  <span class="d-none d-md-inline"></span><?= Data(29,'TotalRecovered',$data);?></h4>
                                    <h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-red">Death Paitent:  <span class="d-none d-md-inline"></span><?= Data(29,'TotalDeaths',$data);?></h4>
								</div>
							</a>
							<!-- END widget-card -->
						</div>
						<!-- END col-6 -->
						<!-- BEGIN col-6 -->
						<div class="col-6">
							<!-- BEGIN widget-card -->
							<a href="#" class="widget-card widget-card-inverse dynamic text-center">
								<div class="widget-card-cover" style="background-image: url(assets/img/country/<?=Data(12,'Country,Other',$data);?>.jpg">
									<div class="cover-bg"></div>
								</div>
								<div class="widget-card-content p-t-40 p-b-40">
									<h4 class="widget-title widget-title-inverse  f-s-20 m-b-5">Total Cases: <?= Data(12,'TotalCases',$data);?></h4>
									<h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-green">Recover Paitent:  <span class="d-none d-md-inline"></span><?= Data(12,'TotalRecovered',$data);?></h4>
                                    <h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-red">Death Paitent:  <span class="d-none d-md-inline"></span><?= Data(12,'TotalDeaths',$data);?></h4>
								</div>
							</a>
							<!-- END widget-card -->
						</div>
						<!-- END col-6 -->
					</div>
					<!-- BEGIN row -->
					<div class="row">
						<!-- BEGIN col-6 -->
						<div class="col-6">
							<!-- BEGIN widget-card -->
							<a href="#" class="widget-card widget-card-inverse dynamic text-center">
								<div class="widget-card-cover" style="background-image: url(assets/img/country/<?=Data(208,'Country,Other',$data);?>.jpg">
									<div class="cover-bg"></div>
								</div>
								<div class="widget-card-content p-t-40 p-b-40">
									<h4 class="widget-title widget-title-inverse  f-s-20 m-b-5">Total Cases: <?= Data(208,'TotalCases',$data);?></h4>
									<h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-green">Recover Paitent:  <span class="d-none d-md-inline"></span><?= Data(208,'TotalCases',$data);?></h4>
                                    <h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-red">Death Paitent:  <span class="d-none d-md-inline"></span><?= Data(208,'TotalCases',$data);?></h4>
								</div>
							</a>
							<!-- END widget-card -->
						</div>
						<!-- END col-6 -->
						<!-- BEGIN col-6 -->
						<div class="col-6">
							<!-- BEGIN widget-card -->
							<a href="#" class="widget-card widget-card-inverse dynamic text-center">
								<div class="widget-card-cover" style="background-image: url(assets/img/country/<?=Data(97,'Country,Other',$data);?>.jpg">
									<div class="cover-bg"></div>
								</div>
								<div class="widget-card-content p-t-40 p-b-40">
									<h4 class="widget-title widget-title-inverse  f-s-20 m-b-5">Total Cases: <?= Data(97,'TotalCases',$data);?></h4>
									<h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-green">Recover Paitent:  <span class="d-none d-md-inline"></span><?= Data(97,'TotalCases',$data);?></h4>
                                    <h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-red">Death Paitent:  <span class="d-none d-md-inline"></span><?= Data(97,'TotalCases',$data);?></h4>
								</div>
							</a>
							<!-- END widget-card -->
						</div>
						<!-- END col-6 -->
					</div>
					<!-- END row -->

					<!-- BEGIN row -->
					<div class="row">
						<!-- BEGIN col-6 -->
						<div class="col-6">
							<!-- BEGIN widget-card -->
							<a href="#" class="widget-card widget-card-inverse dynamic text-center">
								<div class="widget-card-cover" style="background-image: url(assets/img/country/Saudiarabia.jpg">
									<div class="cover-bg"></div>
								</div>
								<div class="widget-card-content p-t-40 p-b-40">
									<h4 class="widget-title widget-title-inverse  f-s-20 m-b-5">Total Cases: <?= Data(236,'TotalCases',$data);?></h4>
									<h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-green">Recover Paitent:  <span class="d-none d-md-inline"></span><?= Data(236,'TotalRecovered',$data);?></h4>
                                    <h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-red">Death Paitent:  <span class="d-none d-md-inline"></span><?= Data(236,'TotalDeaths',$data);?></h4>
								</div>
							</a>
							<!-- END widget-card -->
						</div>
						<!-- END col-6 -->
						<!-- BEGIN col-6 -->
						<div class="col-6">
							<!-- BEGIN widget-card -->
							<a href="#" class="widget-card widget-card-inverse dynamic text-center">
								<div class="widget-card-cover" style="background-image: url(assets/img/country/<?=Data(266,'Country,Other',$data);?>.png">
									<div class="cover-bg"></div>
								</div>
								<div class="widget-card-content p-t-40 p-b-40">
									<h4 class="widget-title widget-title-inverse  f-s-20 m-b-5">Total Cases: <?= Data(266,'TotalCases',$data);?></h4>
									<h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-green">Recover Paitent:  <span class="d-none d-md-inline"></span><?= Data(266,'TotalRecovered',$data);?></h4>
                                    <h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-red">Death Paitent:  <span class="d-none d-md-inline"></span><?= Data(266,'TotalDeaths',$data);?></h4>
								</div>
							</a>
							<!-- END widget-card -->
						</div>
						<!-- END col-6 -->
					</div>
					<!-- END row -->
					<!-- END row -->
				</div>
				<!-- END col-6 -->
				<!-- BEGIN col-6 -->
				<div class="col-12 col-md-6 m-b-5">
					<div class="f-s-20 m-b-5"><b>Cases in Other Countries</b></div>
					<hr class="f-s-12 m-b-5"><b></b></hr>
					<!-- BEGIN row -->
					<div class="row">
						<!-- BEGIN col-6 -->
						<div class="col-6">
							<!-- BEGIN widget-card -->
							<a href="#" class="widget-card widget-card-inverse dynamic text-center">
								<div class="widget-card-cover" style="background-image: url(assets/img/country/<?=Data(39,'Country,Other',$data);?>.jpg">
									<div class="cover-bg"></div>
								</div>
								<div class="widget-card-content p-t-40 p-b-40">
									<h4 class="widget-title widget-title-inverse  f-s-20 m-b-5">Total Cases: <?= Data(39,'TotalCases',$data);?></h4>
									<h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-green">Recover Paitent:  <span class="d-none d-md-inline"></span><?= Data(39,'TotalRecovered',$data);?></h4>
                                    <h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-red">Death Paitent:  <span class="d-none d-md-inline"></span><?= Data(39,'TotalDeaths',$data);?></h4>
								</div>
							</a>
							<!-- END widget-card -->
						</div>
						<!-- END col-6 -->
						<!-- BEGIN col-6 -->
						<div class="col-6">
							<!-- BEGIN widget-card -->
							<a href="#" class="widget-card widget-card-inverse dynamic text-center">
								<div class="widget-card-cover" style="background-image: url(assets/img/country/<?=Data(0,'Country,Other',$data);?>.jpg">
									<div class="cover-bg"></div>
								</div>
								<div class="widget-card-content p-t-40 p-b-40">
									<h4 class="widget-title widget-title-inverse  f-s-20 m-b-5">Total Cases: <?= Data(0,'TotalCases',$data);?></h4>
									<h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-green">Recover Paitent:  <span class="d-none d-md-inline"></span><?= Data(0,'TotalRecovered',$data);?></h4>
                                    <h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-red">Death Paitent:  <span class="d-none d-md-inline"></span><?= Data(0,'TotalDeaths',$data);?></h4>
								</div>
							</a>
							<!-- END widget-card -->
						</div>
						<!-- END col-6 -->
					</div>
					<!-- BEGIN row -->
					<div class="row">
						<!-- BEGIN col-6 -->
						<div class="col-6">
							<!-- BEGIN widget-card -->
							<a href="#" class="widget-card widget-card-inverse dynamic text-center">
								<div class="widget-card-cover" style="background-image: url(assets/img/country/<?=Data(200,'Country,Other',$data);?>.jpg">
									<div class="cover-bg"></div>
								</div>
								<div class="widget-card-content p-t-40 p-b-40">
								
									<h4 class="widget-title widget-title-inverse  f-s-20 m-b-5">Total Cases: <?= Data(200,'TotalCases',$data);?></h4>
									<h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-green">Recover Paitent:  <span class="d-none d-md-inline"></span><?= Data(200,'TotalRecovered',$data);?></h4>
                                    <h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-red">Death Paitent:  <span class="d-none d-md-inline"></span><?= Data(200,'TotalDeaths',$data);?></h4>
								</div>
							</a>
							<!-- END widget-card -->
						</div>
						<!-- END col-6 -->
						<!-- BEGIN col-6 -->
						<div class="col-6">
							<!-- BEGIN widget-card -->
							<a href="#" class="widget-card widget-card-inverse dynamic text-center">
								<div class="widget-card-cover" style="background-image: url(assets/img/country/<?=Data(216,'Country,Other',$data);?>.jpg">
									<div class="cover-bg"></div>
								</div>
								<div class="widget-card-content p-t-40 p-b-40">
									<h4 class="widget-title widget-title-inverse  f-s-20 m-b-5">Total Cases: <?= Data(216,'TotalCases',$data);?></h4>
									<h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-green">Recover Paitent:  <span class="d-none d-md-inline"></span><?= Data(216,'TotalRecovered',$data);?></h4>
                                    <h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-red">Death Paitent:  <span class="d-none d-md-inline"></span><?= Data(216,'TotalDeaths',$data);?></h4>
								</div>
							</a>
							<!-- END widget-card -->
						</div>
						<!-- END col-6 -->
					</div>
					<!-- END row -->


					<div class="row">
						<!-- BEGIN col-6 -->
						<div class="col-6">
							<!-- BEGIN widget-card -->
							<a href="#" class="widget-card widget-card-inverse dynamic text-center">
								<div class="widget-card-cover" style="background-image: url(assets/img/country/<?=Data(220,'Country,Other',$data);?>.jpg">
									<div class="cover-bg"></div>
								</div>
								<div class="widget-card-content p-t-40 p-b-40">
								
									<h4 class="widget-title widget-title-inverse  f-s-20 m-b-5">Total Cases: <?= Data(220,'TotalCases',$data);?></h4>
									<h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-green">Recover Paitent:  <span class="d-none d-md-inline"></span><?= Data(220,'TotalRecovered',$data);?></h4>
                                    <h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-red">Death Paitent:  <span class="d-none d-md-inline"></span><?= Data(220,'TotalDeaths',$data);?></h4>
								</div>
							</a>
							<!-- END widget-card -->
						</div>
						<!-- END col-6 -->
						<!-- BEGIN col-6 -->
						<div class="col-6">
							<!-- BEGIN widget-card -->
							<a href="#" class="widget-card widget-card-inverse dynamic text-center">
								<div class="widget-card-cover" style="background-image: url(assets/img/country/<?=Data(32,'Country,Other',$data);?>.jpg">
									<div class="cover-bg"></div>
								</div>
								<div class="widget-card-content p-t-40 p-b-40">
									<h4 class="widget-title widget-title-inverse  f-s-20 m-b-5">Total Cases: <?= Data(32,'TotalCases',$data);?></h4>
									<h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-green">Recover Paitent:  <span class="d-none d-md-inline"></span><?= Data(32,'TotalRecovered',$data);?></h4>
                                    <h4 class="widget-title f-s-20 m-b-5 widget-title-inverse w3-text-red">Death Paitent:  <span class="d-none d-md-inline"></span><?= Data(32,'TotalDeaths',$data);?></h4>
								</div>
							</a>
							<!-- END widget-card -->
						</div>
						<!-- END col-6 -->
					</div>
					<!-- END row -->
				</div>
				<!-- END col-6 -->
			</div>
					</div>
		<!-- END #content -->
		



<?php
include_once 'footer.php';
?>

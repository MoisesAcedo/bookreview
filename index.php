<!DOCTYPE html>
<html lang="en">

<head>

	<?php
	include_once 'obf.php';
	include_once 'config/conexion.php';
	include_once 'layout/head.php';
	?>

</head>

<body class="body">

	<!-- header -->
	<?php

	include_once 'layout/header.php';

	?>

	<!-- end header -->

	<!-- home -->
	<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="assets/img/bg1.jpg"></div>
			<div class="item home__cover" data-bg="assets/img/bg2.jpg"></div>
			<div class="item home__cover" data-bg="assets/img/bg3.jpg"></div>
			<div class="item home__cover" data-bg="assets/img/bg4.jpg"></div>
		</div>
		<!-- end home bg -->

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>DESTACADOS</b> <?php echo date('d/m/Y') ?></h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<!-- Libros Destacados -->
				<div class="col-12">
					<div class="owl-carousel home__carousel">
						
							<!-- card 1 -->

							<?php
							include_once 'src/queries/q-destacados.php';
							include_once 'layout/w-destacados.php';
							?>

							<!-- end card 1-->
						

						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">TOP LISTAS</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">

							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="false">FICCIÓN TAPA DURA</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">NO FICCIÓN TAPA DURA</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="New items">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="false">MOVIES</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">


				<!-- TAB 1 START-->

				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
						<!-- card 1 -->

						<?php

						include_once 'src/queries/q-json-ficcion.php';
						include_once 'layout/w-top-listas-ficcion.php';

						?>





						<!-- end card 1 -->






					</div>
				</div>

				<!-- TAB 1 END -->



				<!-- TAB 2 START-->

				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
					<div class="row">
						<!-- card 1 -->

						<?php

						include_once 'src/queries/q-json-noficcion.php';
						include_once 'layout/w-top-listas-noficcion.php';

						?>
						<!-- end card 1 -->


					</div>
				</div>

				<!-- TAB 2 END -->

			</div>
			<!-- end content tabs -->
		</div>
	</section>
	<!-- end content -->

	<!-- partners -->

	<section class="section section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--no-margin">COLABORADORES</h2>
				</div>
				<!-- end section title -->

				<!-- section text -->
				<div class="col-12">
					<p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
				</div>
				<!-- end section text -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/themeforest-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/audiojungle-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/codecanyon-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/photodune-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/activeden-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/3docean-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->
			</div>
		</div>
	</section>
	<!-- end partners -->

	<!-- footer -->
	<?php

	include_once 'layout/footer.php';


	?>


	<!-- end footer -->

	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
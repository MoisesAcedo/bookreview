<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include_once 'layout/head.php';
	?>
</head>
<body class="body">
	
	
	<!-- header -->
	<?php

	include_once 'layout/header.php';


	?>
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">CATÁLOGO</h2>
						<!-- end section title -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- filter -->
	<div class="filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<div class="filter__items">
							<!-- filter item -->
							<div class="filter__item" id="filter__genre">
								<span class="filter__item-label">ORDENAR: <?php if(!empty($_GET['filtro'])){
									echo $_GET['filtro'];
									}?></span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="Seleccionar opción">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
									<li><a href="catalogo.php?filtro=az"> Título de la A-Z </a></li>
									<li><a href="catalogo.php?filtro=za"> Título de la Z-A </a></li>
									<li><a href="catalogo.php?filtro=mayor">Nota Mayor a Menor</a></li>
									<li><a href="catalogo.php?filtro=menor">Nota Menor a Mayor</a></li>

								</ul>
							</div>
							<!-- end filter item -->
						</div>
						
						<!-- filter btn -->
						<button class="filter__btn" type="button">apply filter</button>
						<!-- end filter btn -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end filter -->

	<!-- catalog -->
	<div class="catalog" style="margin-top: 50px;">
		<div class="container">
			<div class="row">
				<!-- card 1 -->

				<?php
				include_once 'config/conexion.php';
				include_once 'src/queries/q-catalogo.php';
				include_once 'layout/w-catalogo.php';

				
				?>
				



				<!-- end card 1 -->

				

			</div>
		</div>
	</div>
	
	<!-- end catalog -->


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
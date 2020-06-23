<?php
if ($resultado->num_rows > 0) {


    while ($registro = $resultado->fetch_assoc()) {


        


?>


<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="<?php echo $registro['imagen'] ?>" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-book"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#"><?php echo $registro['titulo'] ?></a></h3>
							<span class="card__category">
								<a href="#"><?php echo $registro['autor'] ?></a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $registro['nota'] ?></span>
						</div>
					</div>
                </div>
                

                <?php


        
    }
}


?>
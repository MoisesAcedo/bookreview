

<?php for ($i=0; $i < 12; $i++) { 
         ?> 

<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo $ficcion->results->books[$i]->book_image ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-book"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $ficcion->results->books[$i]->title?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $ficcion->results->books[$i]->author ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-trophy"></i><?php echo $ficcion->results->books[$i]->rank?>º</span>
								</div>
							</div>
                        </div>
                        
<?php } ?>
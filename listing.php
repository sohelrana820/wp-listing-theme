<?php
/*
Template Name: Listing (list layout)
*/
?>

<?php get_header();?>

<div class="page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="breadcrumb-area">
					<h2><?php echo get_field('banner_title')?></h2>
					<div class="line-dec"></div>
					<h5><?php echo get_field('banner_subtitle')?></h5>
					<p>
						<a href="index.html" class="home-btn">Home</a>
						<a href="car_list.html" class="active-page">Car Listing</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="car-list content-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="option-bar">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="section-heading">
								<i class="fa fa-car"></i>
								<h2><?php echo get_field('listing_title')?></h2>
								<div class="border"></div>
								<h4><?php echo get_field('listing_subtitle')?></h4>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 text-right">
							<div class="sorting-options">
								<select class="sorting">
									<option>Price: High to low</option>
									<option>Price: Low to high</option>
									<option>Sells: High to low</option>
									<option>Sells: Low to high</option>
								</select>
								<a href="car_list.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
								<a href="car_grid.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
							</div>
						</div>
					</div>
				</div>

				<?php
				$vehiclesPerPage = 2;
				$vehicles = getActiveVehicles(['posts_per_page' => $vehiclesPerPage]);
				$listingView = get_field('listing_view');
				while($vehicles->have_posts()): $vehicles->the_post();
				?>
					<?php if($listingView == 'Grid'): ?>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<?php get_template_part('elements/listing-grid') ?>
						</div>
					<?php else:?>
						<?php get_template_part('elements/listing-list') ?>
					<?php endif;?>


				<?php endwhile;?>


				<?php
				var_dump($vehicles->max_num_pages);
				var_dump($vehicles->max_num_pages);
				?>

				<?php if($vehicles->max_num_pages): ?>
					<div class="page-count"><?php _e('Page','progressionstudios'); ?> <?php echo $paged; ?> <?php _e('of','progressionstudios'); ?> <?php echo $vehicles->max_num_pages; ?></div>
					<?php kriesi_pagination($vehicles->max_num_pages, $vehiclesPerPage); ?>
				<?php endif; ?>

				<!-- Page navigation start-->
				<nav aria-label="Page navigation">
					<ul class="pagination">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">«</span>
							</a>
						</li>
						<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">»</span>
							</a>
						</li>
					</ul>
				</nav>
				<!-- Page navigation end-->
			</div>

			<div class="col-lg-4 col-md-4 col-xs-12">
				<!-- Sidebar start-->
				<aside class="sidebar">
					<div class="section-heading">
						<i class="fa fa-search"></i>
						<h2>Search Car</h2>
						<div class="border"></div>
						<h4>Search your desire car</h4>
					</div>

					<div class="search-block">
						<h2 class="title">Review Rating</h2>
						<ul class="ratings">
							<li>
								<a href="#">
									<i class="fa fa-star-o orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<span>(100)</span>
								</a>
							</li>
							<li>
								<a href="">
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<span>(1525)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<span>(252)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<span>(5665)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star-o orange-color"></i>
									<span>(1587)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star orange-color"></i>
									<i class="fa fa-star orange-color"></i>
									<span>(554)</span>
								</a>
							</li>
						</ul>
					</div>

					<div class="search-block">
						<h2 class="title">Price</h2>

						<div class="slider-price-amont">
							<span class="pull-left">$1000</span>
							<span class="pull-right">$100000</span>
						</div>
						<div class="slider slider-horizontal" style="width: 318px;"><div class="slider-track"><div class="slider-selection" style="left: 9.09091%; width: 40.404%;"></div><div class="slider-handle round" style="left: 9.09091%;"></div><div class="slider-handle round" style="left: 49.4949%;"></div></div><div class="tooltip top" style="top: -30px; left: 46.6515px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">10000 : 50000</div></div><input type="text" class="price-slider" style="width: 100%;" data-slider-min="1000" data-slider-max="100000" data-slider-step="1000" data-slider-value="[10000,50000]"></div>

						<br>
						<br>
						<div class="row">
							<div class="price-box">
								<div class="col-lg-6">
									<label>Min price</label>
									<input class="form-control" placeholder="Min price" id="minPrice" value="1000">
								</div>
								<div class="col-lg-6">
									<label>Max price</label>
									<input class="form-control" placeholder="Min price" id="maxPrice" value="50000">
								</div>
							</div>
						</div>
					</div>

					<div class="search-block">
						<h2 class="title">Brands</h2>

						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox8" type="checkbox">
							<label for="checkbox8">
								Audi
							</label>
						</div>

						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox9" type="checkbox">
							<label for="checkbox9">
								BMW
							</label>
						</div>

						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox10" type="checkbox">
							<label for="checkbox10">
								Mercedes benz
							</label>
						</div>

						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox11" type="checkbox">
							<label for="checkbox11">
								Lamborghini
							</label>
						</div>

						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox12" type="checkbox">
							<label for="checkbox12">
								Buick
							</label>
						</div>

						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox13" type="checkbox">
							<label for="checkbox13">
								Bugatti
							</label>
						</div>

						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox14" type="checkbox">
							<label for="checkbox14">
								Acura
							</label>
						</div>
					</div>

					<div class="search-block">
						<h2 class="title">Popular cars</h2>

						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox5" type="checkbox">
							<label for="checkbox5">
								Lamborghini 2016
							</label>
						</div>

						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox7" type="checkbox">
							<label for="checkbox7">
								Audi
							</label>
						</div>
						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox4" type="checkbox">
							<label for="checkbox4">
								Jaguar F-Type R
							</label>
						</div>

						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox3" type="checkbox">
							<label for="checkbox3">
								Porsche-Cayen-Last
							</label>
						</div>

						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox2" type="checkbox">
							<label for="checkbox2">
								Mercedes Benz C Class
							</label>
						</div>

						<div class="checkbox checkbox-theme checkbox-circle">
							<input id="checkbox1" type="checkbox">
							<label for="checkbox1">
								Vencer Sarthe Supercar
							</label>
						</div>
					</div>

					<div class="search-block">
						<h2 class="title">Latest comments</h2>
						<ul class="list-1">
							<li>
								Entiri on <a href="#">Lamborghini 2016</a>
							</li>
							<li>
								Entiri on <a href="#">Jaguar F-Type R</a>
							</li>
							<li>
								Entiri on <a href="#">Porsche-Cayen-Last</a>
							</li>
							<li>
								Entiri on <a href="#">Mercedes Benz C Class</a>
							</li>
							<li>
								Entiri on <a href="#">Vencer Sarthe Supercar</a>
							</li>
						</ul>
					</div>

					<div class="search-block"></div>
				</aside>
				<!-- Sidebar end-->

				<!-- Recent news Start-->
				<div class="Recent-news">
					<h2 class="title">Recent News</h2>
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img class="media-object" src="img/recent/recent-1.jpg" alt="recent-1">
							</a>
						</div>
						<div class="media-body">
							<a href="car_details.html">Mercedes Benz C Class</a>
							<div class="line-dec-o"></div>
							<span>$42.000</span>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img class="media-object" src="img/recent/recent-2.jpg" alt="recent-2">
							</a>
						</div>
						<div class="media-body">
							<a href="car_details.html">Jaguar f-type r</a>
							<div class="line-dec-o"></div>
							<span>$105,400</span>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<a href="car_details.html">
								<img class="media-object" src="img/recent/recent-3.jpg" alt="recent-3">
							</a>
						</div>
						<div class="media-body">
							<a href="car_details.html">BMW e46 m3 diski serie</a>
							<div class="line-dec-o"></div>
							<span>$49.000</span>
						</div>
					</div>
				</div>
				<!-- Recent news end-->

				<!-- Car box Start-->
				<div class="thumbnail car-box">
					<a href="#" class="sale">
						<span>sale</span>
					</a>
					<img src="img/grid/audi_q7_2017.jpg" alt="audi_q7_2017">
					<div class="caption car-content">
						<div class="header b-items-cars-one-info-header s-lineDownLeft">
							<h3>
								<a href="car_details.html">Audi q7 2017</a>
								<span>$42,605</span>
							</h3>
						</div>
						<p>Next level Pinterest farm-to-table selvage gentrify street art raw denim Helvetica street art pork belly.</p>
						<div class="car-tags">
							<ul>
								<li>2016</li>
								<li>Bensin</li>
								<li>Sport</li>
								<li>10.888m</li>
							</ul>
						</div>
						<a href="car_details.html" class="btn details-button">Preview</a>
					</div>
				</div>
				<!-- Car box end-->
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>
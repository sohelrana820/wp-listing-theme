<?php get_header();?>



<!-- Recent car start-->
<div class="recent-car content-area">
    <div class="container">
        <div class="recent-car-content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading">
                        <i class="fa fa-car"></i>
                        <h2>Recent cars</h2>
                        <div class="border"></div>
                        <h4>Check our recent motors</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $args = array(
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'category'         => '',
                    'category_name'    => '',
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'include'          => '',
                    'exclude'          => '',
                    'meta_key'         => '',
                    'meta_value'       => '',
                    'post_type'        => 'vehicles',
                    'post_mime_type'   => '',
                    'post_parent'      => '',
                    'author'	   => '',
                    'author_name'	   => '',
                    'post_status'      => 'publish',
                    'suppress_filters' => true
                );
                $vehicles = get_posts( $args );
                foreach ($vehicles as $vehicle):
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="thumbnail car-box">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/grid/bmw_emw_m3_diski_serie.jpg" alt="bmw_emw_m3_diski_serie">
                        <div class="caption car-content">
                            <div class="header b-items-cars-one-info-header s-lineDownLeft">
                                <h3>
                                    <a href="car_details.html"><?php echo $vehicle->post_title;?></a>
                                    <span>$49.000</span>
                                </h3>
                            </div>



                            <p><?php
                                var_dump($vehicle->post_content);
                                $result = get_post_meta($vehicle->ID, "carhouse_vehicle_features", true);
                                var_dump($result);
                                var_dump(rwmb_meta( 'carhouse_vehicle_features',[], $vehicle->ID));
                                ?>
                            </p>
                            <div class="car-tags">
                                <ul>
                                    <li>2016</li>
                                    <li>Bensin</li>
                                    <li>Sport</li>
                                    <li>12.888m</li>
                                </ul>
                            </div>
                            <div class="ster-fa">
                                <i class="fa fa-star orange-color"></i>
                                <i class="fa fa-star orange-color"></i>
                                <i class="fa fa-star orange-color"></i>
                                <i class="fa fa-star orange-color"></i>
                                <i class="fa fa-star-o orange-color"></i>
                            </div>
                            <a href="car_details.html" class="btn details-button">Preview</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<!-- Recent car end-->

<!-- Testimonials start-->
<div class="testimonials">
    <div class="col-lg-12">
        <div id="carouse2-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouse2-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carouse2-example-generic" data-slide-to="1"></li>
                <li data-target="#carouse2-example-generic" data-slide-to="2"></li>
                <li data-target="#carouse2-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2 testimonials-inner">
                            <ul class="star-rating orange-color">
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="line-dec"></div>
                            <p>
                                <em>"</em>
                                Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique
                                percipitur ea. Ut fugit quaestio Lorem ipsum dolor sit amet, nemore facete quo cu, sumo
                                tincidunt pri ex, usu ubique percipitur ea. Ut fugit quaestio
                                <em>"</em>
                            </p>
                            <div class="author-rate">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/testimonial/04-testimonial.jpg" alt="04-testimonial">
                                <h4>Maria Morris</h4>
                                <div class="line-dec2"></div>
                                <span>Car Dealer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="col-md-12 col-md-8 col-md-offset-2 testimonials-inner">
                            <ul class="star-rating">
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star active"></i>
                                </li>
                            </ul>
                            <div class="line-dec"></div>
                            <p>
                                <em>"</em>
                                Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique
                                percipitur ea. Ut fugit quaestio Lorem ipsum dolor sit amet, nemore facete quo cu, sumo
                                tincidunt pri ex, usu ubique percipitur ea. Ut fugit quaestio
                                <em>"</em>
                            </p>
                            <div class="author-rate">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/testimonial/02-testimonial.jpg" alt="02-testimonial">
                                <h4>Maria Morris</h4>
                                <div class="line-dec2"></div>
                                <span>Car Dealer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="col-md-12 col-md-8 col-md-offset-2 testimonials-inner">
                            <ul class="star-rating">
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star active"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star active"></i>
                                </li>
                            </ul>
                            <div class="line-dec"></div>
                            <p>
                                <em>"</em>
                                Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique
                                percipitur ea. Ut fugit quaestio Lorem ipsum dolor sit amet, nemore facete quo cu, sumo
                                tincidunt pri ex, usu ubique percipitur ea. Ut fugit quaestio
                                <em>"</em>
                            </p>
                            <div class="author-rate">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/testimonial/03-testimonial.jpg" alt="03-testimonial">
                                <h4>Maria Morris</h4>
                                <div class="line-dec2"></div>
                                <span>Car Dealer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="col-md-12 col-md-8 col-md-offset-2 testimonials-inner">
                            <ul class="star-rating">
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star active"></i>
                                </li>
                            </ul>
                            <div class="line-dec"></div>
                            <p>
                                <em>"</em>
                                Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique
                                percipitur ea. Ut fugit quaestio Lorem ipsum dolor sit amet, nemore facete quo cu, sumo
                                tincidunt pri ex, usu ubique percipitur ea. Ut fugit quaestio
                                <em>"</em>
                            </p>
                            <div class="author-rate">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/testimonial/01-testimonial.jpg" alt="01-testimonial">
                                <h4>Maria Morris</h4>
                                <div class="line-dec2"></div>
                                <span>Car Dealer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carouse2-example-generic" role="button" data-slide="prev">
              <span class="slider-mover-left" aria-hidden="true">
                 <img src="<?php echo get_template_directory_uri()?>/assets/img/png/left-chevron.png" alt="left-chevron">
              </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carouse2-example-generic" role="button" data-slide="next">
                <span class="slider-mover-right" aria-hidden="true">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/png/right-chevron.png" alt="right-chevron">
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- Testimonials end-->

<?php get_footer();?>
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
                <?php
                $vehicles = getActiveVehicles($args = ['posts_per_page' => 3]);
                while ($vehicles->have_posts()): $vehicles->the_post(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <?php get_template_part('elements/listing') ?>
                    </div>
                <?php endwhile; ?>
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
<?php
/*
Template Name: Home
*/
?>
<?php get_header();?>

<!-- Recent car start-->
<div class="recent-car content-area">
    <div class="container">
        <div class="recent-car-content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading">
                        <i class="fa fa-car"></i>
                        <h2><?php echo get_field( "title" );?></h2>
                        <div class="border"></div>
                        <h4><?php echo get_field( "subtitle" )?></h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                $vehicles = getActiveVehicles($args = ['posts_per_page' => 6]);
                while ($vehicles->have_posts()): $vehicles->the_post(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <?php get_template_part('elements/listing-grid') ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<!-- Recent car end-->

<?php
$testimonials = getVisibleTestimonial(['posts_per_page' => 5]);
$countTestimonials = $testimonials->post_count;
if($countTestimonials > 0 && get_field('enabled_disable_testimonial_section') == 'Yes'):
?>
<!-- Testimonials start-->
<div class="testimonials">
    <div class="col-lg-12">
        <div id="carouse2-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php while ($countTestimonials > 0): $counter?>
                <li data-target="#carouse2-example-generic" data-slide-to="<?php echo $counter;?>" <?php if($counter == 0){echo 'class="active"';}?>></li>
                <?php $countTestimonials--; $counter++?>
                <?php endwhile;?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $counter = 0;
                while ($testimonials->have_posts()): $testimonials->the_post();
                ?>
                <div class="item <?php if($counter == 0){echo 'active';} $counter++?>">
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2 testimonials-inner">
                            <?php
                            $star = (int) get_post_meta(get_the_ID(), 'testimonial_rating', true);
                            $unStar = 5 - $star;
                            ?>
                            <ul class="star-rating">
                                <?php while ($star > 0): ?>
                                    <li>
                                        <i class="fa fa-star orange-color"></i>
                                    </li>
                                <?php $star--; endwhile; ?>

                                <?php while ($unStar > 0): ?>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                <?php $unStar--; endwhile; ?>
                            </ul>
                            <div class="line-dec"></div>
                            <p>
                                <em>"</em>
                                <?php the_content();?>
                                <em>"</em>
                            </p>
                            <div class="author-rate">
                                <?php
                                $clientImage = array_values(rwmb_meta( 'testimonial_image',[], get_the_ID()));
                                $clientName = get_post_meta(get_the_ID(), 'testimonial_client', true);
                                if(sizeof($clientImage) > 0){
                                    echo "<img src='{$clientImage[0]['url']}' alt='{$clientName}'>";
                                } else {
                                    echo "<img src='http://via.placeholder.com/150x150' alt='{$clientName}'>";
                                }
                                ?>

                                <h4><?php echo get_post_meta(get_the_ID(), 'testimonial_client', true)?></h4>
                                <div class="line-dec2"></div>
                                <span>Car Dealer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
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
<?php endif;?>

<?php get_footer();?>
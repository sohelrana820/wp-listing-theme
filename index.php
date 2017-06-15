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
                        <h2><?php echo get_field( "subtitle" );?></h2>
                        <div class="border"></div>
                        <h4><?php echo get_field( "subtitle" )?></h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                $vehicles = getActiveVehicles($args = ['posts_per_page' => 0]);
                while ($vehicles->have_posts()): $vehicles->the_post(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <?php get_template_part('elements/listing-grid') ?>
                    </div>
                <?php endwhile; wp_reset_postdata();?>
            </div>
        </div>
    </div>
</div>
<!-- Recent car end-->

<?php
if(get_field('enabled_disable_testimonial_section') == 'Yes'){
    get_template_part('elements/testimonials');
}
?>

<?php get_footer();?>
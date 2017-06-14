<div class="thumbnail car-box">
    <?php
    $image = array_values(rwmb_meta( 'vehicle_main_image',[], get_the_ID()));
    if(sizeof($image) > 0){
        echo "<img src='{$image[0]['url']}' alt='bmw_emw_m3_diski_serie'>";
    } else {
        echo "<img src='http://via.placeholder.com/350x250' alt='bmw_emw_m3_diski_serie'>";
    }
    ?>

    <div class="caption car-content">
        <div class="header b-items-cars-one-info-header s-lineDownLeft">
            <h3>
                <a href="<?php echo get_permalink()?>"><?php echo the_title()?></a>
                <span>$<?php echo number_format(get_post_meta(get_the_ID(), 'vehicle_sale_price', true), 2)?></span>
            </h3>
        </div>
        <p>
            <?php echo get_post_meta(get_the_ID(), 'vehicle_short_description', true)?>
        </p>
        <div class="car-tags">
            <ul>
                <li><?php echo get_post_meta(get_the_ID(), 'vehicle_manufacture_year', true)?></li>
                <li>
                    <?php
                    $brand = rwmb_meta( 'vehicle_brand',[], get_the_ID());
                    echo $brand->name;
                    ?>
                </li>
                <li>
                    <?php
                    $category = rwmb_meta( 'vehicle_category',[], get_the_ID());
                    echo $category->name;
                    ?>
                </li>
                <li><?php echo get_post_meta(get_the_ID(), 'vehicle_miles', true)?>m</li>
            </ul>
        </div>
        <div class="ster-fa">
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star-o orange-color"></i>
        </div>
        <a href="<?php echo get_permalink()?>" class="btn details-button">Preview</a>
    </div>
</div>
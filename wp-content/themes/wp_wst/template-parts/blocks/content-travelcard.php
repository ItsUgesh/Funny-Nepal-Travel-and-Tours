<?php

/**
 * Block Name: Card Block
 *
 * This is the template that displays travelling cards
 */

// create id attribute for specific styling
$id = 'cards -' . $block['id'];
$heading = get_field('wp_wst_section_title');
?>
<!--Pakages Section-->
<div class="container-fluid pakage">
    <div class="heading ms-5 wow animate__animated animate__fadeInUp animate__delay-1.3s">
        <div class="rectangle"> </div>
        <h3><?php echo $heading; ?></h3>
    </div>
    <div class="row">
        <?php
        // Check if rows exist.
        if (have_rows('wp_wst_traveling_information')) :
            $is_first_item = true; // Flag to track the first carousel item.
            // Loop through rows.
            while (have_rows('wp_wst_traveling_information')) : the_row();
                // Load sub field values.
                $topic = get_sub_field('wp_wst_hot_topic');
                $img = get_sub_field('wp_wst_image');
                if ($img) {
                    $display_img = $img['url'];
                }
                $name = get_sub_field('wp_wst_destination_name');
                $days = get_sub_field('wp_wst_time_to_travel');
                $money = get_sub_field('wp_wst-money');
                $btn = get_sub_field('wp_wst_button');
        ?>
                <div class="col-lg-4 col-md-6 col-sm-12 wow animate__animated animate__fadeInUp animate__delay-1.3s">
                    <div class="card" style="width: 20rem;">
                        <img src="<?php echo $display_img; ?>" alt="" class="zoom-image">
                        <div class="notice">
                            <?php echo $topic; ?>
                        </div>
                        <div class="card-body">
                            <p class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <h4 class="card-title">
                                <?php echo $name; ?>
                            </h4>
                            <p class="card-text">
                                <i class="fas fa-calendar me-2"></i>
                                <?php echo $days; ?> DAYS
                            <p class="money"><strong class="me-2">USD</strong><?php echo $money; ?></p>
                            </p>
                            <a href="<?php echo $btn; 
                                        ?>" class="btn btn-secondary custom-btn zoom-profile">Explore</a>
                        </div>
                    </div>
                </div>
            <?php
                $is_first_item = false; // Set the flag to false after the first carousel item.
            // End loop.
            endwhile;
        endif;
            ?>
                </div>

    </div>
</div>
<?php

/**
 * Block Name: Main Screen
 *
 * This is the template that displays main screen image and title
 */

// create id attribute for specific styling
$id = 'screen-' . $block['id'];
?>
<!-- Carousel Section -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php
        // Check if rows exist.
        if (have_rows('wp_wst_caurosel')) :
            $is_first_item = true; // Flag to track the first carousel item.
            // Loop through rows.
            while (have_rows('wp_wst_caurosel')) : the_row();
                // Load sub field values.
                $top_title = get_sub_field('wp_wst_top_screen_title');
                $image = get_sub_field('wp_wst_image');
        ?>
                <div class="carousel-item <?php echo $is_first_item ? 'active' : ''; ?>" data-bs-interval="5000">
                    <img src="<?php echo $image['url']; ?>" class="d-block w-100" alt="<?php echo $top_title ?>">
                    <div class="carousel-caption wow animate__animated animate__fadeIn animate__delay-1.5s">
                        <p><?php echo $top_title; ?></p>
                    </div>
                </div>
                <?php
                $is_first_item = false; // Set the flag to false after the first carousel item.
            // End loop.
            endwhile;
        endif;
        ?>
    </div>
    <button class="carousel-control-prev wow animate__animated animate__fadeIn animate__delay-1.3s" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <i class="fas fa-chevron-left fa-3x"></i>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next wow animate__animated animate__fadeIn animate__delay-1.3s" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <i class="fas fa-chevron-right fa-3x"></i>
        <span class="visually-hidden">Next</span>
    </button>
</div>

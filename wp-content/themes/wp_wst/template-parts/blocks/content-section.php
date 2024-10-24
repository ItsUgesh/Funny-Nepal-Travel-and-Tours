<?php

/**
 * Block Name: Section Block
 *
 * This is the template that displays section part
 */

// create id attribute for specific styling
$id = 'sec-' . $block['id'];
$positioning = get_field('wp_wst_choose_image_side');
$title = get_field('wp_wst_title');
$description = get_field('wp_wst_description');

if ($positioning == 'right') { ?>
    <div class="container-fluid about-us">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-12 para wow animate__animated animate__fadeInUp animate__delay-1.3s">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $description; ?></p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 wow animate__animated animate__fadeInUp animate__delay-1.3s">
                <div id="carouselExample1" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        // Check if rows exist.
                        if (have_rows('wp_wst_images')) :
                            $is_first_item = true; // Flag to track the first carousel item.
                            // Loop through rows.
                            while (have_rows('wp_wst_images')) : the_row();
                                // Load sub field values.
                                $img = get_sub_field('wp_wst_image');
                                if ($img != '') {
                                    $dis_img = $img['url'];
                                }
                        ?>
                                <div class="carousel-item <?php echo $is_first_item ? 'active' : ''; ?>" data-bs-interval="3000">
                                    <img src="<?php echo $dis_img; ?>" class="d-block w-100" alt="<?php echo $title; ?>">
                                </div>
                        <?php
                                $is_first_item = false; // Set the flag to false after the first carousel item.
                            // End loop.
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php } else if($positioning == 'left') { ?>
    <div class="container-fluid about-us" style="background-color:#ffffff;">
        <div class="row">
       
            <div class="col-lg-4 col-md-5 col-sm-12 wow animate__animated animate__fadeInUp animate__delay-1.3s">
                <div id="carouselExample2" class="carousel slide carousel-fade caro-left" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        // Check if rows exist.
                        if (have_rows('wp_wst_images')) :
                            $is_first_item = true; // Flag to track the first carousel item.
                            // Loop through rows.
                            while (have_rows('wp_wst_images')) : the_row();
                                // Load sub field values.
                                $img = get_sub_field('wp_wst_image');
                                if ($img != '') {
                                    $dis_img = $img['url'];
                                }
                        ?>
                                <div class="carousel-item <?php echo $is_first_item ? 'active' : ''; ?>" data-bs-interval="3000">
                                    <img src="<?php echo $dis_img; ?>" class="d-block w-100" alt="<?php echo $title; ?>">
                                </div>
                        <?php
                                $is_first_item = false; // Set the flag to false after the first carousel item.
                            // End loop.
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12 para wow animate__animated animate__fadeInUp animate__delay-1.3s">
            <h3><?php echo $title; ?></h3>
                <p><?php echo $description; ?></p>
            </div>
        </div>
    </div>
<?php } ?>
<?php

/**
 * Block Name: Review Block
 *
 * This is the template that displays the review Block
 */

// create id attribute for specific styling
$id = 'review-' . $block['id'];

$section_enable = get_field('wp_wst_enable_section');
if ($section_enable) {

?>
    <section class="ws-block reviews">
        <div class="container">
            <div class="row wow fadeInUp animated">
                <?php while (have_rows('wp_wst_column_details')) {
                    the_row();
                    $image = get_sub_field('wp_wst_reviewer_image');
                    $name = get_sub_field('wp_wst_reviewer_name');
                    $address = get_sub_field('wp_wst_reviewer_address');
                    $date = get_sub_field('wp_wst_wreviewed_date');
                    $title = get_sub_field('wp_wst_review_title');
                    $description = get_sub_field('wp_wst_description');
                    $sh_description = get_sub_field('wp_wst_short_description');
                ?>
                    <div class="col-sm-3 pe-md-4 text-center">
                        <figure>
                            <a href="" title="This describes the image">
                                <img src="<?php if ($image!= '') {
                                                echo $image['url'];
                                            } ?>" alt="<?php echo $title; ?>">
                            </a>
                        </figure>
                        <p><strong><?php echo $name; ?></strong><br><?php echo $address; ?></p>
                    </div>
                    <div class="col-sm-9">
                        <h4><?php echo $title; ?></h4>
                        <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                        <p><?php echo $description; ?></p>
                        <p><strong><?php echo $sh_description; ?></strong></p>
                        <p class="date"><?php echo $date; ?></p>
                    </div>
                    <hr>
                <?php   } ?>
            </div>
        </div>
    </section>


<?php } ?>
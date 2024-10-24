<?php

/**
 * Block Name: Welcome Screen
 *
 * This is the template that displayswelcome text and images
 */

// create id attribute for specific styling
$id = 'welcome-' . $block['id'];

$welcome_text = get_field('wp_wst_welcome_text');

$img1 = get_field('wp_wst_founder_image_1');
$imgone = '';
if (is_array($img1) && !empty($img1)) {
    $imgone = $img1['url'];
}

$img2 = get_field('wp_wst_founder_image_2');
$imgtwo = '';
if (is_array($img2) && !empty($img2)) {
    $imgtwo = $img2['url'];
}

$by = get_field('wp_wst_by');
$description = get_field('wp_wst_description');
?>
<!--Welcome Section-->
<div class="container-fluid welcome">
    <div class="row">
        <div class="col-lg-6 welcome-text wow animate__animated animate__fadeInUp animate__delay-1.3s">
            <p><?php echo $welcome_text; ?></p>
        </div>
        <div class="col-lg-6 founder wow animate__animated animate__fadeInUp animate__delay-1.3s">
            <figure>
                <img class="back-img zoom-profile" src=" <?php echo $imgtwo; ?>" alt="Co-founder">
                <img class="front-img zoom-profile" src="<?php echo $imgone; ?>" alt="Main Founder">
            </figure>
            <div class="rectangle"></div>
            <p><?php echo $by; ?></p>
            <p><?php echo $description; ?> </p>
        </div>
    </div>
</div>
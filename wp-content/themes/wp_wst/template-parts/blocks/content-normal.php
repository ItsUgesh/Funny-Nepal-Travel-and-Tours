<?php

/**
 * Block Name: Normal Block
 *
 * This is the template that displays text and description
 */

// create id attribute for specific styling
$id = 'normal-' . $block['id'];

$title = get_field('wp_wst_heading');
$des = get_field('wp_wst_description');
?>

    <div class="container-fluid normal wow animate__animated animate__fadeInUp animate__delay-1.3s">
        <h3><?php
            echo $title;
        ?>
        </h3>
        <p><?php echo $des; ?></p>
    </div>

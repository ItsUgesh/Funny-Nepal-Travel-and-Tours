<?php

/**
 * Block Name: Tour Block
 *
 * This is the template that displays travelling cards
 */

// create id attribute for specific styling
$id = 'tours -' . $block['id'];
$title = get_field('wp_wst_place_name');
$title = !empty($title) ? $title : 'Title';
$des = get_field('wp-wst_place_description');
$info_1 = get_field('wp-wst_info_title');
$info_1 = !empty($info_1) ? $info_1 : 'Information';
$info_1_des = get_field('wp_wst_info_description');
$info_2 = get_field('wp_wst_info_title_part_2');
$info_2 = !empty($info_2) ? $info_2 : 'Additional Information';
$info_2_des = get_field('wp_wst_info_description_part_2');
?>


<body>
    <div class="container-fluid single">
        <div class="row wow animate__animated animate__fadeInUp animate__delay-1.3s">
            <div class="col-lg-8 col-md-7 col-sm-12">
                <h3>
                    <?php
                    echo esc_html($title);
                    ?>
                </h3>
                <p>
                    <?php echo $des; ?>
                </p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 links">
                <h3>Quick Navigation</h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-2',
                    'container'         => 'ul',
                ));
                ?>
            </div>
        </div>
        <div class="row wow animate__animated animate__fadeInUp animate__delay-1.3s">
            <div class="col-lg-8 col-md-7 col-sm-12">
                <h3><?php echo esc_html($info_1); ?></h3>
                <p>
                    <?php echo $info_1_des; ?>
                </p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 links">
                <!-- Related posts based on the "Tours" custom post type -->
                <h3>Related Posts</h3>
                <?php
                $related_tours_args = array(
                    'post_type' => 'Tours', // Custom post type name
                    'posts_per_page' => 4, // Number of related posts to display
                    'orderby' => 'date', // Order by date to get the latest posts
                    'order' => 'DESC'
                );

                $related_tours_query = new WP_Query($related_tours_args);

                if ($related_tours_query->have_posts()) {
                    while ($related_tours_query->have_posts()) : $related_tours_query->the_post();
                ?>
                        <!-- Display related tour post title here -->
                        <ul>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        </ul>

                    <?php
                    // You can display other related post details here
                    endwhile;
                    wp_reset_postdata();
                } else {
                    ?>
                    <p>No new tours found.</p>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row wow animate__animated animate__fadeInUp animate__delay-1.3s">
            <div class="col-lg-8 col-md-7 col-sm-12">
                <h3><?php echo esc_html($info_2); ?></h3>
                <p>
                    <?php echo $info_2_des; ?>
                </p>
            </div>
        </div>
    </div>
</body>
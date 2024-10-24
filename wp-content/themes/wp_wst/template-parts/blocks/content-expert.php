<?php

/**
 * Block Name: Expert Block
 *
 * This is the template that displays the Expet Block
 */

// create id attribute for specific styling
$id = 'expert-' . $block['id'];

$section_enable = get_field('wp_wst_enable_section');
if ($section_enable) {
    $sub_title = get_field('wp_wst_expert_sub_title');
    $main_text = get_field('wp_wst_expert_big_text');
    $description = get_field('wp_wst_expert_description');
    $link = get_field('wp_wst_expert_button_link');
    $button_name = get_field('wp_wst_expert_button_name');
?>
    <section id=<?php echo $id; ?> class="ws-block expert">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="wow fadeInUp"><span>
                            <?php
                            if ($sub_title != '') {
                                echo $sub_title;
                            }
                            ?>
                        </span>
                        <?php
                        if ($main_text != '') {
                            echo $main_text;
                        }
                        ?>
                    </h2>
                    <p class="wow fadeInUp">
                        <?php
                        if ($description != '') {
                            echo $description;
                        }
                        ?>
                    </p>
                </div>
                <div class="col-md-4 text-md-center">
                <?php if ($link) {
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="wow fadeInUp"><a href="<?php echo $link_url; ?>" class="btn btn-outline-light px-4 text-uppercase" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
              <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
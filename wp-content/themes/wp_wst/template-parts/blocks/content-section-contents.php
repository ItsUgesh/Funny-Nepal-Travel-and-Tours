<?php

/**
 * Block Name: Section Contents
 *
 * This is the template that displays welcome contents.
 */

// create id attribute for specific styling
$id = 'section-contents-' . $block['id'];

//Check if section is enable or disable
$section_enable = get_field('wp_wst_enable_section');
if ($section_enable) {
  $image_position = get_field('wp_wst_image_position');
  $title = get_field('wp_wst_section_title');
  $subtitle = get_field('wp_wst_section_sub_title');
  $description = get_field('wp_wst_section_text');
  $link = get_field('wp_wst_section_link');
  $section_bg = get_field('wp_wst_section_bg');
  $image = get_field('wp_wst_section_image');

  $img_pos_class = '';

  if ($image_position == 'right') {
    $img_pos_class = 'order-md-1 pe-md-0 ps-lg-5 ';
  }
?>
  <section id="<?php echo $id; ?>" class="ws-block <?php echo $section_bg; if (is_front_page()) { ?> welcome <?php } ?> ">
    <div class="container">
      <div class="row align-items-center">
      <?php if ($image != '') { ?>
        <div class="col-lg-5 pe-lg-5 <?php echo $img_pos_class; ?> wow fadeInLeft">
            <figure>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>;">
            </figure>         
        </div>
        <?php } ?>
        <div class="col-lg-7 <?php if ($image == '') { echo'col-lg-12'; } ?> wow fadeInRight">
          <?php if ($title != '' || $description != '') { ?>
            <?php if (is_front_page()) { ?>
              <h1 class="mb-4  d-color wow fadeInUp"><span><?php echo $subtitle; ?></span>
                <?php echo $title; ?></h1>
            <?php } else { ?>
              <h2 class="mb-4  d-color wow fadeInUp"><span class="text-lowercase"><?php echo $subtitle; ?></span>
                <?php echo $title; ?></h2>
            <?php } ?>
            <div class="wow fadeInUp">
              <?php echo $description; ?>
              <?php if ($link) {
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a href="<?php echo $link_url; ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
<?php } ?>
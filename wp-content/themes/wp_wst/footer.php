<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-wst
 */
?>
<?php
$logo = get_field('wp_wst_footer_logo', 'options');
if ($logo) {
    $dis_logo = $logo['url'];
}
$info = get_field('wp_wst_office_information', 'options');
$insta = get_field('wp_wst_instagram', 'options');
$fb = get_field('wp_wst_facebook', 'options');
$li = get_field('wp_wst_linkedin', 'options');
$yt = get_field('wp_wst_youtube', 'options');
$payment = get_field('wp_wst_payment', 'options');
$dis_payment = '';
if(is_array($payment) && !empty($payment)){
    $dis_payment = $payment['url'];
}
?>

<!--Footer-->
<FOOTER>
    <div class="container-fluid footer">
        <div class="row">
            <div class="col-lg-3 col-md-6 wow animate__animated animate__fadeInUp animate__delay-1.3s">
                <img src="<?php echo $dis_logo; ?>" alt="Funny Nepla Travels">
            </div>
            <div class="col-lg-3 col-md-6 wow animate__animated animate__fadeInUp animate__delay-1.3s">
                <h3>Funny Nepal Travels and Tours</h3>
                <p><?php echo $info; ?></p>
            </div>
            <div class="col-lg-3 col-md-6 qn wow animate__animated animate__fadeInUp animate__delay-1.3s">
                <h3>Quick Navigation</h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-2',
                    'container'         => 'ul',
                ));
                ?>
            </div>
            <div class="col-lg-3 col-md-6 icon wow animate__animated animate__fadeInUp animate__delay-1.3s">
                <h3>Follow Us On</h3>
                <p>
                    <a href="<?php echo $insta; ?>"><i class="fab fa-instagram mx-1 fa-2x"></i></a>
                    <a href="<?php echo $fb; ?>"><i class="fab fa-facebook mx-1 fa-2x"></i></a>
                    <a href="<?php echo $li ?>"><i class="fab fa-linkedin mx-1 fa-2x"></i></a>
                    <a href="<?php echo $yt ?>"><i class="fab fa-youtube mx-1 fa-2x"></i></a>
                </p>
                <h3>We Accept</h3>
                <img class="payment" src="<?php echo $dis_payment; ?>" alt="Payment gateway options">
            </div>
        </div>
        <hr>
        <div class="container-fluid end wow animate__animated animate__fadeInUp animate__delay-1.3s">
            <p>© 2007 - <?php echo date("Y"); ?> All rights reserved. Funny Nepal Travel and Tours.</p>
         <p>Powered by: <a href="">Optimax Digital solution</a></p>
        </div>
    </div>
</FOOTER>




<?php wp_footer(); ?>
</body>

</html>
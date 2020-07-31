<?php get_header(); ?>

<div class="container .everest">

<?php
        $site_title = get_bloginfo( 'title', 'display' );

        if ( $site_title || is_customize_preview() ) :
        ?>
          <h1 class="site-title h1f"><?php echo $site_title; ?></h1>
        <?php endif; ?>

<?php
        $site_description = get_bloginfo( 'description', 'display' );

        if ( $site_description || is_customize_preview() ) :
        ?>
          <h2 class="site-description h2f"><?php echo $site_description; ?></h2>
        <?php endif; ?>

<img class="img-fluid everest" src="<?php echo get_template_directory_uri(); ?>/img/runner.jpg" alt="image">

</div>
<hr class="mx-4">
    <footer class="footer footer-expand-lg pt-0 py-3">
        <div class="container float-left ">
        <p class="pl-4">(c) FIT, by Elke M., 2020<br><br></p>
        <p></p>
        </div>
<?php get_footer(); ?>

<?php get_header('white'); ?>

<main class="page404">
    <div class="page404image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/404-image.png);">
        <div class="content"></div>
    </div>
	<div class="page404text">
        <h1 class="title">
            404
        </h1>
        <p>Sorry, that page wasn’t found.</p>
        <a href="<?php echo site_url(); ?>" class="btn">Back to home</a>
    </div>
    
</main>

<?php get_footer(); ?>
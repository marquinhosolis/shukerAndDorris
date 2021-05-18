<?php
/*
Template Name: Contact Us Page
*/
?>

<?php get_header('white'); ?>
<main class="contactPage">
    <div class="contactPageImage  wow animate__animated animate__fadeInUp" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);">
        <div class="content"></div>
    </div>
    <div class="contactPageText  wow animate__animated animate__fadeInDown">
        <h1 class="title"><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <div class="contactPageFormWrapper">
            <?php echo do_shortcode('[formidable id=1]'); ?>
        </div>
    </div>
</main>	
<?php get_footer(); ?>

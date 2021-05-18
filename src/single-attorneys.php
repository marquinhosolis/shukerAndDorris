<?php
/*
Template Name: Single Attorneys
*/
?>

<?php get_header(); ?>
    <main class="singleAttorney">
        <section class="cover singleAttorneyCover">
            <div class="container">
                <div class="singleAttorneyCoverImage wow animate__animated animate__fadeInRight" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);">
                    <div class="content"></div>
                </div>
                <div class="singleAttorneyCoverText wow animate__animated animate__fadeInDown">
                    <div class="singleAttorneyCoverTextAttorneyInfo">
                        <h1 class="title singleAttorneyCoverTextAttorneyName">
                            <?php the_title(); ?>
                        </h1>
                        <p class="title"><?php the_field('attorney_role'); ?></p>
                        <?php if( get_field('attorney_linkedin') ): ?>
                            <a href="<?php the_field('attorney_linkedin'); ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        <?php endif; ?>
                        <?php if( get_field('attorney_email') ): ?>
                            <a href="mailto:<?php the_field('attorney_email'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        <?php endif; ?>
                    </div>
                    <div class="singleAttorneyCoverTextContent">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="attorneyResume">
            <div class="container wow animate__animated animate__fadeInUp">
                <?php the_field('attorney_resume'); ?>
            </div>
        </section>
        <section class="attorneyAccreditations">
            <div class="container wow animate__animated animate__fadeInDown">
                <h2 class="title">Accreditations</h2>
                <div class="accreditationsLogos">
                    <?php
                        if( have_rows('accreditations') ):
                            while( have_rows('accreditations') ) : the_row(); ?>
                                <img src="<?php the_sub_field('accreditation_logo');?>" alt="">
                            <?php endwhile;
                        endif; 
                    ?>
                </div>
            </div>
        </section>
        <section class="otherAttorneys">
            <div class="container wow animate__animated animate__fadeInDown">
                <h3 class="title">Our Other Attorneys</h3>
                <div class="otherAttorneysWrapper">
                    <?php
                    $thisPost = get_the_ID();
                    $args = array(
                        'post_type' => 'attorneys',
                        'posts_per_page' => -1,
                        'post__not_in' => array($thisPost),
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();?>
                            <div class="otherAttorney">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="otherAttorneyImage" style="background-image: url(<?php the_post_thumbnail_url( 'medium' ); ?>);">
                                        <div class="content"></div>
                                    </div>
                                </a>
                                <div class="otherAttorneyText">
                                    <a href="<?php the_permalink(); ?>">
                                        <h4 class="title otherAttorneyName">
                                            <?php the_title();?>
                                        </h4>
                                        <p class="title otherAttorneyRole">
                                            <?php the_field('attorney_role'); ?>
                                        </p>
                                    </a>
                                    <a href="<?php the_permalink(); ?>">Learn More About <?php the_field('attorney_single_name'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        <?php }
                    } 
                    wp_reset_postdata();
                ?>
                </div>
            </div>
            
        </section>
    </main>
<?php get_footer(); ?>
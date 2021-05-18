<?php
/*
Template Name: Our Attorneys Page
*/
?>

<?php get_header(); ?>

<main class="ourAttorneysPage">
    <section class="cover attorneysCover">
        <div class="container">
            <div class="attorneysCoverImage wow animate__animated animate__fadeInUp" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);">
                <div class="content"></div>
            </div>
            <div class="attorneysCoverText wow animate__animated animate__fadeInDown">
                <h1 class="title">Our Attorneys</h1>
                <div>
                <?php the_content(); ?>
                </div>
            </div> 
        </div>
    </section>
    <section class="attorneysPracticeAreas">
        <div class="container">
            <div class="attorneysPracticeAreasImage wow animate__animated animate__fadeInRight" style="background-image: url(<?php the_field('practice_areas_image'); ?>);">
                <div class="content"></div>
            </div>
            <div class="attorneysPracticeAreasText wow animate__animated animate__fadeInLeft">
                <h2 class="title"><?php the_field('practice_areas_title'); ?></h2>
                <div>
                    <?php the_field('practice_areas_text'); ?>
                </div>
                <a href="<?php the_field('practice_area_link'); ?>">
                    <?php the_field('practice_area_link_label'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>

            </div>
        </div>
    </section>
    <section class="attorneysTeam wow animate__animated animate__bounceInUp">
        <div class="container">
            <h2 class="title">Our Attorneys</h2>
            <div class="attorneysTeamWrapper">
                <?php
                    $args = array(
                        'post_type' => 'attorneys',
                        'posts_per_page' => -1,
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();?>
                            <div class="attorneysTeamMember">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="attorneysTeamMemberImage" style="background-image: url(<?php the_post_thumbnail_url( 'medium' ); ?>);">
                                        <div class="content"></div>
                                    </div>
                                    <div class="attorneysTeamMemberText">
                                        <div class="title attorneysTeamMemberName">
                                            <?php the_title();?>
                                        </div>
                                        <div class="title attorneysTeamMemberProfile">
                                            <?php the_field('attorney_role'); ?>
                                        </div>
                                        <span>Learn more about <?php the_field('attorney_single_name'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                    </div>
                                </a>
                            </div>
                        <?php }
                    } 
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <section class="attorneysEnd">
        <div class="attorneysEndText wow animate__animated animate__fadeInLeft">
            <h3 class="title"><?php the_field('attorneys_end_title'); ?></h3>
            <div>
                <?php the_field('attorneys_end_text'); ?>
            </div>
        </div>
        <div class="attorneysEndImage  wow animate__animated animate__fadeInRight" style="background-image: url(<?php the_field('attorneys_end_image'); ?>);">
            <div class="content"></div>
        </div>
    </section>
</main>	
<?php get_footer(); ?>

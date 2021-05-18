<?php

/*

Template Name: Practice Areas Template

*/

?>



<?php get_header(); ?>

<main class="practiceAreasPage">

    <section class="cover practiceAreasCover">

        <div class="practiceAreasCoverImage wow animate__animated animate__fadeInLeft" style="background-image: url(<?php the_field('practice_area_cover_image'); ?>);">

            <div class="content"></div>

        </div>

        <div class="practiceAreasCoverText wow animate__animated animate__fadeInDown">

            <h1 class="title"><?php the_title(); ?></h1>

            <div>

                <?php the_field('practice_area_cover_text'); ?>

            </div>

    </section>

    <section class="practiceAreaMain">

        <div class="container">

            <div class="practiceAreaMainText wow animate__animated animate__fadeInLeft">

                <h2 class="title">

                    <?php the_field('practice_area_main_title'); ?>

                </h2>

                <div class="practiceAreaMainTextContent">

                    <?php the_field('practice_area_main_text'); ?>

                </div>

                <a href="#" class="practiceAreaMainTextContentMore">Read More <i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>

            </div>

            <div class="practiceAreaMainImage wow animate__animated animate__fadeInRight" style="background-image: url(<?php the_field('practice_area_main_image'); ?>);">

                <div class="content"></div>

            </div>

        </div>

    </section>

</main>	

<?php get_footer(); ?>


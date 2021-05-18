<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
	<?php 
		$themePath = get_stylesheet_directory_uri();
		$siteUrl = site_url();
	?>
	<main class="homePage"> 
		<section class="cover coverHome">
			<div class="coverImageHome wow animate__animated animate__fadeInUp" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);">
				<div class="content" >
				</div>
			</div>
			<div class="coverTextHome wow animate__animated animate__fadeInDown">
				<h1 class="title"><?php the_field('cover_title'); ?></h1>
				<h2 class="title"><?php the_field('cover_subtitle'); ?></h2>
				<a href="#learn-more" class="learnMoreCoverHome"><i class="fa fa-angle-down" aria-hidden="true"></i>learn More</a>
			</div>
		</section>
		<section class="areasHome" id="learn-more">
			<div class="container">
				<div class="areasHomeWrapper">
					<div class="areaHome wow animate__animated animate__fadeInLeft">
						<h3 class="title">Corporate Bankruptcy</h3>
						<p><?php echo get_post(66)->post_content; ?></p>
						<a href="<?php echo site_url('/corporate-bankruptcy/')?>">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="areaHome wow animate__animated animate__fadeInUp">
						<h3 class="title">Dispute Resolution {{&}} Mediation</h3>
						<p><?php echo get_post(141)->post_content; ?></p>
						<a href="<?php echo site_url('/dispute-resolution-mediation/')?>">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					<div class="areaHome wow animate__animated animate__fadeInRight">
						<h3 class="title">Commercial Litigation</h3>
						<p><?php echo get_post(140)->post_content; ?></p>
						<a href="<?php echo site_url('/commercial-litigation/')?>">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</section>
		<section class="whyChoseHome">
			<div class="whyChoseHomeImage wow animate__animated animate__fadeInRight" style="background-image: url(<?php the_field('side_image'); ?>);">
				<div class="content">
				</div>
			</div>
			<div class="container">
				<div class="whyChoseHomeSplit">
					<div class="whyChoseHomeSplitImage wow animate__animated animate__fadeInLeft" style="background-image: url(<?php the_field('why_choose_intro_image'); ?>);">
						<div class="content"></div>
					</div>
					<div class="whyChoseHomeSplitText wow animate__animated animate__fadeInDown">
						<h3 class="title">Why choose us</h3>
						<div>
							<?php the_field('why_choose_intro_text'); ?>
						</div>
					</div>					
				</div>
				<div class="whyChoseHomeSplit">
					<div class="whyChoseHomeSplitImage wow animate__animated animate__fadeInRight" style="background-image: url(<?php the_field('why_choose_image'); ?>);">
						<div class="content"></div>
					</div>
					<div class="whyChoseHomeSplitText wow animate__animated animate__fadeInUpBig">
						<div>
							<?php the_field('why_choose_text'); ?>
							<a href="<?php echo site_url('/our-attorneys/'); ?>" class="whyChoseHomeSplitTextLearnMore">
								Learn more about us <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</a>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="blogPosts">
			<div class="container">
				<h3 class="title blogPostsTitle">
					Latest News {{&}} Resources
				</h3>
				<div class="blogPostsWrapper wow animate__animated animate__fadeInUp">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                        );

                        $query = new WP_Query( $args );
                        
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();?>
                                <?php 
                                    $count = $query->found_posts;
                                ?>
                                <article class="blogPost">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="blogPostImage" style="background-image: url(<?php the_post_thumbnail_url( 'thumb' ); ?>);">
                                            <div class="content"></div>
                                        </div>
                                        <p class="postDate"><?php echo get_the_date(); ?></p>
                                        <h4 class="title postTitle"><?php the_title(); ?></h4>
                                        <p class="postIntro"><?php the_excerpt(); ?></p>
                                    </a>
                                    <a href="<?php the_permalink(); ?>" class="postLink">Continue reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </article>
                            <?php }
                        }
                        
                        wp_reset_postdata();
                    ?>
				</div>
				<a href="<?php echo site_url('/news-resources/'); ?>" class="btn">Visit our blog page</a>
			</div>
		</section>
		<section class="featuredHome wow animate__animated animate__fadeInUp">
			<div class="container">
				<h3 class="title">Featured on</h3>
				<div class="logos">
					<?php
                        if( have_rows('featured') ):
                            while( have_rows('featured') ) : the_row(); ?>
                                <img src="<?php the_sub_field('featured_logo');?>" alt="">
                            <?php endwhile;
                        endif; 
                    ?>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
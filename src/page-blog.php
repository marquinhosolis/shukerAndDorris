<?php
/*
Template Name: News & Resources Page
*/
?>
<?php
    $limit = 6;
    if(isset($_GET['cat'])){
        $cat = $_GET['cat'];
    }
    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }
    if(isset($_GET['all'])){
        $posts = '-1';
    }else{
        $posts = $limit;
    }
?>
<?php get_header('white'); ?>
    <main class="blogPage">
        <section class="blogPosts">
			<div class="container">
				<h3 class="title blogPostsTitle">
					Latest News {{&}} Resources
				</h3>
                <div class="blogPageForms">
                    <div class="selectWrapper">
                        <form action="" method="get">
                            <?php
                                wp_dropdown_categories( array(
                                    'show_option_all'    => 'Filter by Category',
                                    'orderby'            => 'name', 
                                    'hierarchical'       => 1, 
                                    'depth'              => 1,
                                ) );
                            ?>
                        </form>
                    </div>
                    <div class="searchWrapper">
                        <form action="" method="get">
                            <input type="search" name="search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
				<div class="blogPostsWrapper wow animate__animated animate__fadeInUp">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => $posts,
                            'cat'            => $cat,
                            's'              => $search
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
                        else{ ?>
                            <div class="noPosts">
                                Sorry! no posts found
                            </div>
                        <?php }
                        
                        wp_reset_postdata();
                    ?>
				</div>
                <div id="more"></div>
                <?php 
                    if($query->found_posts > $limit && !isset($_GET['all'])){ ?>
                        <div class="loadMore">
                            <a href="<?php the_permalink(); ?>?all=1#more" class="loadMorePostsBlog">Load more blogs  <i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
                        </div>
                    <?php }
                ?>
				
			</div>
		</section>
        <section>
            <div class="container">
                
                
                
            </div>
        </section>
    </main>
	
<?php get_footer(); ?>
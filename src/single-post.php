<?php
/*
Template Name: Single Post
*/
?>

<?php get_header('white'); ?>
    <main class="singlePost">
        <div class="container">
            <a href="<?php echo site_url('/news-resources/'); ?>" class="backLink"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                Back to all blogs
            </a>
            <div class="singlePostContent">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <div class="singlePostTitle">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <div class="postTitleInfo">
                            <?php echo get_the_date(); ?> | 
                            <div class="postTitleInfoCategory"> 
                                <?php
                                    $category_detail=get_the_category();
                                    foreach($category_detail as $cd){
                                        echo $cd->cat_name;
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <article class="singlePostMain">
                        <div class="blogPostImage" style="background-image: url(<?php the_post_thumbnail_url( 'post' ); ?>);">
                            <div class="content"></div>
                        </div>
                        <div class="postContent"><?php the_content(); ?></div>
                        <div class="postNav">
                            <div class="previous_post_link">
                                <?php previous_post_link( '%link','<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous Blog' ) ?>
                            </div>
                            <div class="next_post_link">
                                <?php next_post_link( '%link','Next Blog <i class="fa fa-long-arrow-right" aria-hidden="true"></i>' ) ?>
                            </div>
                        </div>
                    </article>
                    
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        
    </main>
<?php get_footer(); ?>
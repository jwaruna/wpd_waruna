<?php get_header(); ?>
<div class="col-sm-8 blog-main">
 
    <?php 
    if ( have_posts() ) { 
    while ( have_posts() ) : the_post();
    ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?php the_title(); ?></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
        <?php the_content(); ?>
    </div>
    <?php
    endwhile;
    } 
    ?>

</div>
<?php get_footer(); ?>
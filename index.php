<?php get_header(); ?>
<!-- main and sidebar -->
<?php get_sidebar(); ?>
    <main class="col-md-10 bg-content">


      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
          <header>
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php // the_title(); ?></a></h2>
            <span>Posted on <time datetime="2015-06-17 10:25"><?php // the_date();?> at <?php //the_time();?></time> by <?php //the_author();?></span>
          </header>

          <?php the_content(); ?>
        </article> 
      <?php endwhile; ?>

    </main>
</div>
<?php get_footer(); ?>







<?php get_header();?>

<section class="hero container" aria-label="hero section">
  <div class="hero__body hero-body">
    <div class="container">
      <h1 class="title">
        Making the web accessible one line at a time
      </h1>
    </div>
  </div>
</section>

<section class="post container" aria-label="partial">
  <div class="columns">
    <!--  featured column  -->
    <div class="column">
      <h2 class="title is-3">Featured</h2>
        
      <?php
        $homepageFeatured = new WP_Query(array(
          'posts_per_page' => 1,
          'post_type' => 'featured'
        ));
        while( $homepageFeatured->have_posts() ) {
                  $homepageFeatured->the_post(); ?>
          <a href="<?php the_permalink(); ?>">
          <p><strong><?php the_title(); ?></strong> <small><?php the_time('M'); ?> <?php the_time('d'); ?></small></p>

          <div class="content">
            <p><?php if(has_excerpt()) {
                  echo get_the_excerpt();
                } else {
                  echo wp_trim_words(get_the_content(), 18);
                } ?><a href="<?php the_permalink(); ?>" class="nu gray">Read more</a>
            </p>

            </div>
            <?php the_post_thumbnail('full'); ?>
            </a>
            <?php } wp_reset_postdata(); ?> 
            <a href="<?php echo get_post_type_archive_link('event') ?>" class="button is-light is-pulled-right">View All Events</a>
    </div>
    <!--  blog column  -->
    <div class="column">
      <div class="full-width-split__inner">
        <h2 class="title is-3">Past Articles</h2>
        <?php
        $homepagePosts = new WP_Query(array(
          'posts_per_page' => 3
        ));

        while($homepagePosts->have_posts()) {
          $homepagePosts->the_post(); ?>
<a href="<?php the_permalink(); ?>">
<article class="media">

  <figure class="media-left image is-64x64">
      <?php the_post_thumbnail('full'); ?>
  </figure>
  <div class="media-content">
    <div class="content">
      <p>
        <strong><?php the_title(); ?></strong> <small><?php the_time('M'); ?> <?php the_time('d'); ?></small>
       
      </p>
      <p><?php if(has_excerpt()) {
                  echo get_the_excerpt();
                } else {
                  echo wp_trim_words(get_the_content(), 18);
                } ?></p>
    </div>

  </div>


</article>
</a>

          <?php } wp_reset_postdata();
        ?>

        
        <a href="<?php echo site_url('/blog'); ?>" class="button is-light is-pulled-right">View All Article Posts</a>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>
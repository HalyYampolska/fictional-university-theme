<?php  
get_header();
pageBanner(array(
  'title' => 'Our Campuses',
  'subtitle' => 'We have several conveniently located campuses'
));
?>

<div class="container container--narrow page-section">

    <div class="acf-map">

  <?php
    while(have_posts()) {
      the_post(); ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

      <?php
    }
    echo paginate_links();
  ?>
    
    </div>   
    
</div>

<?php
get_footer();
?>
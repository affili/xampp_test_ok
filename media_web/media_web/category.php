
<?php get_header(); ?>
<div id="main-content">
  <div id="container">
<?php get_sidebar(); ?>
  <div id="contents-list">
<?php
$categories = get_categories();
foreach($categories as $category) :
?>
<h1><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->cat_name; ?></a></h1>
<ul>
<?php
$args = array(
    'cat' => $category->cat_ID
);
$query = new WP_Query( $args );
if ( $query ->have_posts() ) :
while ( $query ->have_posts() ) :
$query ->the_post();
?>

<div class="post">
  <h1><a href="<?php the_permalink(); ?>"><div class="post-img"><?php the_post_thumbnail(array(210, 155)); ?></div></a>
  <div class="post-text">
    <div class="time"><?php the_time('Y/m/d'); ?></div>
    <a href="<?php the_permalink(); ?>">
      <h3><?php the_title(); ?></h3>
    </a>
  </div><!--class="post-text" -->
</div><!--class="post" -->





  <?php
  endwhile;
  endif;
  wp_reset_query();
  ?>
  <?php endforeach; ?>
<?php previous_posts_link('新しい投稿ページへ'); ?>
<?php next_posts_link('古い投稿ページへ'); ?>




<?php get_footer(); ?>​

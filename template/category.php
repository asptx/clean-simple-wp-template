<?php get_header(); ?>
<section>
  <h1><?php single_cat_title(); ?></h1>
  <?php showbreadcrumb(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('loop'); ?>
  <?php endwhile;
  else: echo '<h1>Записей нет. Либо ошибка, либо категория пуста.</h1>'; endif; ?>  
  <?php showpagination(); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header();?>

<section class="page-wrap">
  <div class="container">
    <?php if(has_post_thumbnail()):?>
    <h1><?php the_title();?></h1>

    <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>"
      class="img-fluid mb-3 img-thumbnail">
    <?php endif;?>

    <?php get_template_part('includes/section','pets');?>



    <?php wp_link_pages();?>


  </div>
</section>


<?php get_footer();?>
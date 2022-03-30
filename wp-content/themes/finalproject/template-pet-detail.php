<?php
   /*
   Template Name: pet detail post
   */
   ?>


<?php get_header();?>

<section class="page-wrap">
  <div class="container">

    <h1 class="text-center"><?php the_title();?></h1>

    <div class="row">

    </div>
    <?php if(has_post_thumbnail()):?>
    <div class="col-3">
      <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>"
        class="img-fluid mb-3 img-thumbnail">
    </div>

    <?php endif;?>

    <?php if(has_post_thumbnail()):?>
    <div class="col-9">
      <?php get_template_part('includes/section','pets');?>
    </div>

    <?php endif;?>


  </div>

</section>


<?php get_footer();?>
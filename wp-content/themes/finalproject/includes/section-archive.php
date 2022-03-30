<?php if( have_posts() ): while( have_posts() ): the_post();?>
<h1><?php the_title();?></h1>

<?php the_excerpt();?>

<a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>
<?php endwhile; else: endif;?>
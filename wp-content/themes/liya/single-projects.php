<?php

get_header();
?>

<?php the_title(); ?>

<img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" alt="project">

<?php the_content(); ?>
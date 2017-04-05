<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); 
?>
<section class="edito production">
    <div class="container">
        <h2 class="red"><?php the_title();?></h2>
        <div class="row">
            <div class="col-lg-4">
                <img src="<?php the_field('affiche');?>">
            </div>
            <div class="col-lg-8">
                <h3>SYNOPSIS</h3>
                <?php the_content();?>
            </div>
        </div>
        <h3 class="uk-margin-large-top">BANDE ANNONCE</h3>
        <div class="supportVideo"><?php the_field('bande-annonce');?></div>
    </div>
</section>
<?php                     
        endwhile;
        wp_reset_postdata(); 
    endif; 
?>
<?php get_footer(); ?>
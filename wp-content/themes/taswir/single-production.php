<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); 
?>
<section class="block-title affiche">
    <div class="container">        
        <h2 class="red"><?php the_title();?></h2>
    </div>
</section>
<section class="block-content affiche production-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-4" data-uk-scrollspy="{cls:'uk-animation-slide-left'}">
                <img src="<?php the_field('affiche');?>">
            </div>
            <div class="col-lg-8" data-uk-scrollspy="{cls:'uk-animation-slide-right'}">
                <h3>SYNOPSIS</h3>
                <?php the_content();?>
                <ul class="list-compte single">
                    <?php 
                        if( have_rows('compte_rendue') ):
                            while ( have_rows('compte_rendue') ) : the_row();
                    ?>
                    <li>
                        <div class="name"><?php the_sub_field('name')?></div>
                        <a href="<?php the_sub_field('file')?>" download=""></a>
                    </li>
                    <?php
                            endwhile;
                        endif;
                    ?>

                </ul>
            </div>
        </div>      
    </div>
</section>
<section class="edito production bg-orange-motif">
    <div class="container" >
        <h3 class="uk-margin-large-top white">BANDE ANNONCE</h3>
        <div class="supportVideo"><?php the_field('bande-annonce');?></div>
    </div>
</section>
<?php                     
        endwhile;
        wp_reset_postdata(); 
    endif; 
?>
<?php get_footer(); ?>
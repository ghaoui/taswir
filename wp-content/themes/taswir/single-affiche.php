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
<section class="edito production item-conference bg-orange-motif">
    <div class="container">
        <div class="row" data-uk-grid-match="{target: '.match'}">
            <div class="col-lg-4 col-lg-offset-2" data-uk-scrollspy="{cls:'uk-animation-slide-left'}">
                
                <div class="match set-flex">
                    <img src="<?php the_field('image');?>">
                </div>                
            </div>
            <div class="col-lg-4" data-uk-scrollspy="{cls:'uk-animation-slide-right'}">
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
<?php                     
        endwhile;
        wp_reset_postdata(); 
    endif; 
?>
<?php get_footer(); ?>
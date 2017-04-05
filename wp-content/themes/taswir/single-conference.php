<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); 
?>
<section class="edito production item-conference">
    <div class="container">
        <h2 class="red"><?php the_title();?></h2>
        <div class="row" data-uk-grid-match="{target: '.match'}">
            <div class="col-lg-4">
                <h3 class="text-center"><?php the_field('titre_image');?></h3>
                <div class="match set-flex">
                    <img src="<?php the_field('affiche');?>">
                </div>                
            </div>
            <div class="col-lg-8">
                <h3 class="text-center">GALERIE</h3>
                <?php $galeries = get_field('galerie');?>
                <div class="match bg-color">
                    <div class="uk-slidenav-position" data-uk-slider>
                        <div class="uk-slider-container">
                            <ul class="uk-grid uk-slider uk-grid-width-medium-1-3">
                                <?php foreach ($galeries as $galerie) :?>
                                <li>
                                    <figure>
                                        <img src="<?php echo $galerie['url'];?>">
                                    </figure>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
                    </div>
                </div>                    
            </div>
        </div>
        <ul class="list-compte">
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
</section>
<?php                     
        endwhile;
        wp_reset_postdata(); 
    endif; 
?>
<?php get_footer(); ?>
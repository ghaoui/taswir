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
<?php                     
        endwhile;
        wp_reset_postdata(); 
    endif; 
?>
<?php 
    $args  = array(
        'post_type' => 'ateliers',
        'order' => 'ASC',
        'post_per_page' => -1
    );
    $the_query = new WP_Query( $args ); 
    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post(); 
    

?>
<section class="block-content affiche ateliers">
    <div class="container">
        <?php the_content();?>   
        <ul class="list-compte uk-list">
            <?php 
                if( have_rows('themes') ):
                    while ( have_rows('themes') ) : the_row();
            ?>          
                <li>
                    <h3><?php the_sub_field('title')?></h3>
                    <a href="<?php the_sub_field('file')?>" download=""></a>
                </li>
            <?php 
                    endwhile;
                endif;
            ?>
        </ul>
    </div>
</section>
<section class="edito production ateliers bg-orange-motif">
    <div class="container">         
        <div class="row ">
            <div class="col-lg-8 col-lg-offset-2">
                <h3 class="gal text-center">GALERIE</h3>
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
    </div>
</section>
<?php                     
        endwhile;
        wp_reset_postdata(); 
    endif; 
?>
<?php get_footer(); ?>
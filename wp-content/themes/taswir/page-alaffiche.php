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
<section class="block-content affiche">
    <div class="container">
        <?php the_content();?>        
    </div>
</section>
<?php                     
        endwhile;
        wp_reset_postdata(); 
    endif; 
?>
<section class="edito production conference bg-orange-motif" data-uk-scrollspy="{cls:'uk-animation-fade', target:'li', delay:600}">
    <div class="container">        
        <ul class="uk-grid uk-grid-width-1-3" data-uk-grid-match>
        <?php 
            $args  = array(
                'post_type' => 'affiche',
                'order' => 'ASC'
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
        ?>
            <li>
                <figure class="uk-overlay uk-overlay-hover">
                    <img class="uk-overlay-spin" src="<?php the_field('image');?>" width="" height="" alt="">
                    <figcaption class="uk-overlay-panel uk-overlay-slide-top uk-flex">
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    </figcaption>
                </figure>
            </li>
        <?php                     
                endwhile;
                wp_reset_postdata(); 
            endif; 
        ?>
    </ul>
    </div>
</section>
<?php get_footer(); ?>
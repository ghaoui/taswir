<?php get_header(); ?>
<section class="edito production conference">
    <div class="container">
        <?php 
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
        ?>
        <h2 class="red"><?php the_title();?></h2>
        <?php the_content();?>        
        <?php                     
                endwhile;
                wp_reset_postdata(); 
            endif; 
        ?>
        
        <ul class="uk-grid uk-grid-width-1-2" data-uk-grid-match>
        <?php 
            $args  = array(
                'post_type' => 'conference',
                'order' => 'ASC'
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
        ?>
            <li>
                <h3 class="text-center"><?php the_title();?></h3>
                <div class="date"><?php the_time('l j F Y');?></div>
                <?php the_content();?>
                <div class="text-right pos-link"><div class="uk-animation-hover lien-cont-link"><a href="<?php the_permalink();?>" class="lien-link uk-animation-slide-left"></a></div></div>             
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
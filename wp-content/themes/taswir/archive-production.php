<?php get_header(); ?>
<section class="edito production">
    <div class="container">
        <h2 class="red">TASWIR PRODUCTIONS</h2>
        <ul class="uk-grid uk-grid-width-1-3">
        <?php 
            $args  = array(
                'post_type' => 'production',
                'order' => 'ASC'
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
        ?>
            <li>
                <h3 class="text-center"><?php the_title();?></h3>
                <figure class="uk-overlay uk-overlay-hover">
                    <img class="uk-overlay-spin" src="<?php the_field('affiche');?>" width="" height="" alt="">
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
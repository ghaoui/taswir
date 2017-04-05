<?php get_header(); ?>
<section class="edito leprojet">
    <div class="container">
        <h2 class="red">LE PROJET</h2>
        <?php 
            $args  = array(
                'post_type' => 'project',
                'post_per_page' => 1,
                'order' => 'ASC'
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>
        <div class="uk-column-large-1-2 content-leprojet">
            <?php the_content();?>
        </div>
        <div class="uk-margin-top text-right">
            <a class="link-download" href="<?php the_field('file');?>" download="">Télécharger le document <img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf-red.png"></a>
        </div>
        <?php                     
                endwhile;
                wp_reset_postdata(); 
            endif; 
        ?>
    </div>
</section>
<?php get_footer(); ?>
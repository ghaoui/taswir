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
        'post_type' => 'peac',
        'order' => 'ASC',
        'post_per_page' => -1
    );
    $the_query = new WP_Query( $args ); 
    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post(); 
?>
<section class="block-content affiche peacpage">
    <div class="container">
        <?php the_content();?>        
    </div>
</section>
<section class="edito production peacpage bg-orange-motif">
    <div class="container">  
        
        <div class="uk-accordion" data-uk-accordion>
            <?php 
                if( have_rows('themes') ):
                    while ( have_rows('themes') ) : the_row();
            ?>
            <h3 class="uk-accordion-title"><?php the_sub_field('title')?></h3>
            <div class="uk-accordion-content">
                <ul class="list-compte">
                    <?php 
                        if( have_rows('groupe-theme') ):
                            while ( have_rows('groupe-theme') ) : the_row();
                    ?>
                    <li>
                        <div class="name"><?php the_sub_field('nom')?></div>
                        <a href="<?php the_sub_field('file')?>" download=""></a>
                    </li>
                    <?php
                            endwhile;
                        endif;
                    ?>

                </ul>
            </div>
            <?php 
                    endwhile;
                endif;
            ?>
        </div>

    </div>
</section>
<?php                     
        endwhile;
        wp_reset_postdata(); 
    endif; 
?>
<?php get_footer(); ?>
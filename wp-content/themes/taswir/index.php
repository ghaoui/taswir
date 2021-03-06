<?php get_header(); ?>
<section class="slider">
    <?php echo do_shortcode('[rev_slider alias="homeslider"]');?>
</section>
<section class="edito">
    <div class="container">
        <h2 class="red">EDITO</h2>
        <div class="uk-column-large-1-2">
        <?php 
            $args  = array(
                'post_type' => 'edito',
                'post_per_page' => 1,
                'order' => 'ASC'
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    the_content();
                endwhile;
                wp_reset_postdata(); 
            endif; 
        ?>
        </div>
    </div>
</section>
<section class="actualite">
    <div class="container">
        <h2 class="white">A LA UNE</h2>
        <div data-uk-slideset="{default: 1, animation: 'slide-horizontal'}">
            <div class="uk-slidenav-position">
                <ul class="uk-grid uk-slideset">
                    <?php 
                        $args  = array(
                            'post_type' => 'actualite',
                            'post_per_page' => 1,
                            'order' => 'ASC'
                        );
                        $the_query = new WP_Query( $args ); 
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    ?>
                    <li>
                        <h3 class="white"><?php the_title();?></h3>
                        <div class="uk-grid">
                            <div class="uk-width-medium-1-2">
                                <div class="intrinsic-container">
                                    <?php the_field('video');?>
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2 uk-position-relative">
                                <div class="act-content"><?php the_content();?></div>
                                <div class="text-right">
                                    <div class="act-cont-link text-right">
                                        <a href="<?php the_permalink();?>" class="act-link"><span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                                
                            endwhile;
                            wp_reset_postdata(); 
                        endif; 
                    ?>
                </ul>
            </div>
             <ul class="uk-slideset-nav uk-flex uk-dotnav uk-flex-center">...</ul>
        </div>                    
    </div>
</section>
<section class="peac">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-uk-scrollspy="{cls:'uk-animation-slide-left'}" >
                <h2 class="white">P.E.A.C</h2>
                <?php 
                    $args  = array(
                        'post_type' => 'peac',
                        'post_per_page' => 1,
                        'order' => 'ASC'
                    );
                    $the_query = new WP_Query( $args ); 
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post(); 
                ?>
                <figure class="">
                    <?php the_post_thumbnail('post-thumbnail', array(
                        'class' => 'js-tilt'
                    )) ?>
                    
                </figure>
                <div class="download">
                    <a href="<?php the_field('file');?>" download><?php the_title();?></a>
                </div>
                <div class="sub-title"><?php the_field('sub-title');?></div>
                <div class="peac-cont-link"><a href="<?php the_permalink();?>" class="peac-link"><span></span></a></div>
                <?php
                        endwhile;
                        wp_reset_postdata(); 
                    endif; 
                ?>
            </div>
            <div class="col-lg-offset-2 col-lg-4" data-uk-scrollspy="{cls:'uk-animation-slide-right'}">
                <h2 class="white">LIENS</h2>
                <?php 
                    $args  = array(
                        'post_type' => 'link',
                        'post_per_page' => 7,
                        'order' => 'ASC'
                    );
                    $the_query = new WP_Query( $args ); 
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post(); 
                ?>
                <div class="item-link">
                    <h4><?php the_title();?></h4>
                    <div class="content-link"><a href="<?php the_field('url');?>"><?php the_field('url');?></a></div>
                </div>
                <?php
                        endwhile;
                        wp_reset_postdata(); 
                    endif; 
                ?>
                <div class="text-right"><div class="lien-cont-link"><a href="<?php the_permalink();?>" class="lien-link"><span></span></a></div></div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<?php get_header(); ?>

<div class="container">
    <div id="breadcrumb">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb();
        }
        ?>
    </div>
    <h2><?php single_cat_title(); ?></h2>
    <span class="border-title"></span>
    <div class="row grid">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="content-print col-lg-3">
                <div class="content">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <div class="thumbnail">
                            <?php the_post_thumbnail('print', array('class' => 'img-fluid')); ?>
                        </div>
                        <div class="description">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <span class="more">En savoir plus</span>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>

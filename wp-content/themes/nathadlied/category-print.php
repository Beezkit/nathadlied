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
        <?php $terms = get_categories( array(
            'exclude' => '1, 6, 20',
            'hide_empty' => 0
        ));

        foreach ($terms as $i => $term) {

        $term_link = get_term_link($term); ?>

            <div class="content-print col-lg-3">
                <div class="content">
                    <a href="<?php echo esc_url( $term_link ); ?>">
                        <h3><?php echo $term->name; ?></h3>
                        <div class="thumbnail">
                            <?php $custom_field = get_field('image', $term ); ?>
                            <img src="<?php echo $custom_field["sizes"]["print"]; ?>" class="img-fluid" />
                        </div>
                        <div class="description">
                            <p><?php echo $term->description; ?></p>
                        </div>
                        <span class="more">En savoir plus</span>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        <?php } ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
<?php get_footer(); ?>

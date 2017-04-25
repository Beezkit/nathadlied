<footer>
    <div class="container">
        <div class="row">
            <span class="border-title"></span>
            <div class="col-md-6 col-lg-3">
                <p class="title-footer">Dernier projet print</p>
                <?php // The Query
                $the_query = new WP_Query( array( 'category_name' => 'print', 'post_per_page' => '4' ) );
                if ( $the_query->have_posts() ) { ?>
                <ul>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">- <?php the_title(); ?></a>
                    </li>
                <?php endwhile; } ?>
                </ul>

            </div>
            <div class="col-md-6 col-lg-3">
                <p class="title-footer">Dernier projet web</p>
                <?php // The Query
                $the_query = new WP_Query( array( 'post_type' => 'Web', 'post_per_page' => '6' ) );
                if ( $the_query->have_posts() ) { ?>
                <ul>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">- <?php the_title(); ?></a>
                    </li>
                <?php endwhile; } ?>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="title-footer">Dernier projet personnel</p>
                <?php // The Query
                $the_query = new WP_Query( array( 'post_type' => 'personnel', 'post_per_page' => '4' ) );
                if ( $the_query->have_posts() ) { ?>
                <ul>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">- <?php the_title(); ?></a>
                    </li>
                <?php endwhile; } ?>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="title-footer">Me suivre</p>
                <ul class="social">
                    <li>
                        <a href="<?php the_field('facebook', 81); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <?php /*
                    <li>
                        <a href="<?php the_field('google_plus', 81); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="<?php the_field('printerest', 81); ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="<?php the_field('twitter', 81); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li> */ ?>
                    <li class="clearfix"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="made-by">
        Copyright 2017 <a href="<?php echo home_url(); ?>">NathadlieD</a> / Site fait main par <a href="http://www.guillaume-delforge.fr" target="blank">DELFORGE Guillaume</a>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php if (is_page('contact')) { ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLhNPlFcZMapC5y_9AgauMef7NuMcvXEw&callback=initMap" ></script>
<?php } ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/masonry/masonry.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/global.min.js"></script>
</body>
</html>

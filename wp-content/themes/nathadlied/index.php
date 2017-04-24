<?php get_header(); ?>

    <?php // The Query
    $the_query = new WP_Query( array( 'post_type' => 'PRESENTATION' ) );

    if ( $the_query->have_posts() ) { ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div id="presentation">
            <div class="container">
                <div class="content">
                    <?php the_content(); ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php bloginfo( 'description' ); ?></p>
                </div>
                <div class="scroll-bot">
                    <div class="icon-down"></div>
                </div>
            </div>
        </div>
        <?php endwhile; } ?>

        <div id="nath">
            <div class="container">
                <?php // The Query
                $the_query = new WP_Query( array( 'post_type' => 'Nath' ) );

                if ( $the_query->have_posts() ) { ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <div class="thumbnail">
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; } ?>

                <?php $competences= get_field('competence');
            		if( $competences ):  ?>
                    <ul class="competences">
            		  <?php foreach( $competences as $competence ): ?>
            		  <li>
                          <h4><?php echo $competence['titre']; ?> :</h4>
                          <div class="width<?php echo $competence['pourcentage']; ?>"></div>
                      </li>
            		  <?php endforeach; ?>
                    </ul>
            	<?php endif; ?>

            </div>
        </div>

        <div id="print">
            <div class="container">
                <h2>Print</h2>
                <span class="border-title"></span>
                    <div class="content col-lg-8 offset-lg-2">
                        <?php $terms = get_categories( array(
                            'exclude' => '1, 6',
                            'hide_empty' => 0
                        ));

                        foreach ($terms as $i => $term) {

                        $term_link = get_term_link($term); ?>
                            <?php if ($i <= 3) { ?>

                            <div class="content-print">
                                <div class="col-lg-6 thumbnail">
                                    <?php $custom_field = get_field('image', $term ); ?>
                                    <img src="<?php echo $custom_field["sizes"]["print"]; ?>" class="img-fluid" />
                                </div>
                                <div class="col-lg-6 description">
                                    <h3><?php echo $term->name; ?></h3>
                                    <p><?php echo $term->description; ?></p>
                                    <a href="<?php echo esc_url( $term_link ); ?>" class="more" title="En savoir plus">En savoir plus <span class="right"></span></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php $link_term = get_term_link($term); ?>
                <div class="text-center">
                    <a href="<?php echo $link_term; ?>" class="more-all" title="Voir tout les portfolio">Voir tout les print</a>
                </div>

                <?php wp_reset_postdata(); ?>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 100 10 0 10" />
            </svg>
        </div>

        <div id="web">
            <div class="container">
                <h2>Web</h2>
                <span class="border-title"></span>
                <div class="row">
                    <?php // The Query
                    $the_query = new WP_Query( array( 'post_type' => 'Projet Web', 'post_per_page' => '6' ) );
                    if ( $the_query->have_posts() ) { ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-md-6 col-lg-4">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="thumbnail">
                                    <?php the_post_thumbnail('web', array('class' => 'img-fluid')); ?>
                                    <div class="description">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    <div class="read-more text-center">
                                        <span class="more">Voir le projet</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; } ?>
                        <div class="clearfix"></div>

                </div>

                <?php wp_reset_postdata(); ?>

                <div class="text-center">
                    <a href="<?php echo get_page_link(37); ?>" class="more-all" title="Voir tout les portfolio">Voir tout les web</a>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="0 0 100 10 0 10" />
            </svg>
        </div>

        <div id="personnal">
            <div class="container">
                <h2>Peronnel</h2>
                <span class="border-title"></span>
                <div class="row">
                <?php // The Query
                $the_query = new WP_Query( array( 'post_type' => 'personnel', 'post_per_page' => '4' ) );
                if ( $the_query->have_posts() ) { ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-md-6 col-lg-3">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <div class="thumbnail">
                                <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
                            </div>
                            <div class="description">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                                <div class="read-more text-right">
                                    <span class="more">Voir le projet <span class="right"></span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; } ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div id="parole">
            <div class="container">
                <p>Parler est un besoin, écouter est un art</p>
            </div>
        </div>

        <div id="reassurance">
            <div class="container">
                <div class="row">
                    <?php // The Query
                    $the_query = new WP_Query( array( 'category_name' => 'reassurances', 'post_per_page' => '4', 'order' => 'ASC' ) );
                    if ( $the_query->have_posts() ) { ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-md-6 col-lg-3 text-center">
                            <?php the_post_thumbnail(); ?>
                            <h4><?php the_title(); ?></h4>
                        </div>
                    <?php endwhile; } ?>
                </div>
            </div>
        </div>

        <div id="confiance">
            <h2>Ils me font confiance</h2>
            <span class="border-title"></span>
            <div class="container">
                <?php
                	$images= get_field('confiance',75);

                	if( $images ):  ?>
                	<ul class="owl-carousel owl-theme">
                		<?php foreach( $images as $image ): ?>
                		<li class="item"><img src="<?php echo $image['logo']['url']; ?>" class="img-fluid" alt="<?php echo $image['logo']['alt']; ?>" /></li>
                		 <?php endforeach; ?>
                	</ul>
                	<?php endif; ?>
            </div>
        </div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="container">
    <div id="breadcrumb">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb();
        }
        ?>
    </div>
    <h2><?php the_title(); ?></h2>
    <span class="border-title"></span>
</div>
<div class="thumbnail">
    <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
</div>
<div class="container">
    <div class="row">
        <div class="content col-lg-8">
            <?php the_content(); ?>
        </div>
        <div class="content col-lg-4">
            <?php
                $images= get_field('images');
                if( $images ):
            ?>
            <div class="row">
                <?php foreach( $images as $image ): ?>
                <div class="col-sm-6">
                    <img src="<?php echo $image['image']; ?>" class="img-fluid" />
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

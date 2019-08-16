<?php
/*
 * Template Name: Blog template
*/
?>

<!-- get header -->
<?php get_header('landing'); ?>


<div class="page-main">


    <?php get_template_part( 'template-parts/sections/introduce' ); ?>

    <section class="section-blog">

        <div class="container">

            <div class="row">
                <?php
                $args = array(
                    'post_status' => array('publish'),
                    'posts_per_page' => 6,
                    'paged' => $paged ,
                );
                ?>

                <?php
                $blog = new WP_Query( $args );
                while( $blog->have_posts() ) : $blog->the_post(); ?>
                    <div class="col-md-4">
                        <div class="post-cart__masonry_item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                            <div class="post-cart__masonry_item--inner">
                                <h2 class="post-cart__masonry__title"> <?php the_title(); ?> </h2>
                                <a href="<?php echo get_permalink(); ?>" class="btn-more--blog">
                                    <span class="btn__decor"></span>
                                    READ MORE
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

    </section>

</div>


<!-- get footer -->
<?php get_footer(); ?>

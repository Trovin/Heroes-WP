<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <!-- section introduce -->
    <section class="single_intro">

        <div class="single-bac">
            <div class="container">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>
        </div>

    </section>


    <div class="container">
        <div class="entry-single">
            <div class="post-date">
                <?php echo the_date(); ?>
            </div>

            <?php the_content(); ?>
        </div>
    </div>

</article>


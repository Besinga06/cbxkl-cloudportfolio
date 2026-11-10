
<?php get_header(); ?>

<main class="page-container">

    <?php
    if (have_posts()) :

        while (have_posts()) :
            the_post();
    ?>

        <article class="page-content">

            <h1><?php the_title(); ?></h1>

            <div class="page-text">
                <?php the_content(); ?>
            </div>

        </article>

    <?php
        endwhile;

    endif;
    ?>

</main>

<?php get_footer(); ?>

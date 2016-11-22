<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <meta name="twitter:card" content="summary" />
                <meta name="twitter:site" content="@trump" />
                <meta name="twitter:creator" content="@thomas" />
                <meta property="og:url" content="<?php the_permalink() ?>" />
                <meta property="og:title" content="Trump said it..." />
                <meta property="og:description" content="<?php the_title(); ?>" />
                <meta property="og:image" content="http://127.0.0.1/projects/Trumpatations/wordpress/wp-content/uploads/2016/11/0620trumppolicies01.png" />

                <meta property="og:url"           content="<?php the_permalink() ?>" />
                <meta property="og:type"          content="website" />
                <meta property="og:title"         content="Trump said it..." />
                <meta property="og:description"   content="<?php the_title(); ?>" />
                <meta property="og:image"         content="http://127.0.0.1/projects/Trumpatations/wordpress/wp-content/uploads/2016/11/0620trumppolicies01.png" />

                <div id="main" role="main" class="mod pam">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="mod" >
                        <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
    <?php endif; ?>


<div id="retour">
    <a href="<?php echo get_post_type_archive_link( 'articles' ); ?>" class="center" >voir tous les articles</a>
</div>

<?php get_footer();

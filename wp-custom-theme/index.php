<?php get_header(); ?>

<main class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="card" style="margin-bottom:1rem;">
                    <h2 class="card-title"><?php the_title(); ?></h2>
                    <div class="card-text">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>">Read more →</a>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts yet.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <h1 class="hero-title">
                    <?php
                    echo esc_html(
                        get_field('hero_title') ?: 'Clean, component-based WordPress builds.'
                    );
                    ?>
                </h1>
                <p class="hero-subtitle">
                    <?php
                    echo esc_html(
                        get_field('hero_subtitle') ?: 'Custom themes, structured ACF fields, and developer-friendly layouts.'
                    );
                    ?>
                </p>

                <?php if ($cta = get_field('hero_cta_label')) : ?>
                    <a href="<?php echo esc_url(get_field('hero_cta_link') ?: '#work'); ?>"
                       class="hero-cta">
                        <?php echo esc_html($cta); ?>
                    </a>
                <?php endif; ?>
            </div>

            <div>
                <!-- Simple “stats” block -->
                <div class="card">
                    <h3 class="card-title">Theme Highlights</h3>
                    <p class="card-text">ACF-driven sections, reusable components, and clean PHP templates – built to be easy for teams to extend.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="work" class="section">
        <div class="container">
            <h2 class="section-title">Homepage Sections (ACF Powered)</h2>

            <div class="card-grid">
                <?php if (have_rows('feature_cards')) : ?>
                    <?php while (have_rows('feature_cards')) : the_row(); ?>
                        <article class="card">
                            <h3 class="card-title">
                                <?php echo esc_html(get_sub_field('title')); ?>
                            </h3>
                            <p class="card-text">
                                <?php echo esc_html(get_sub_field('description')); ?>
                            </p>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <article class="card">
                        <h3 class="card-title">Custom Layouts</h3>
                        <p class="card-text">Built hero, card grid and component system mapped to ACF fields for content editors.</p>
                    </article>
                    <article class="card">
                        <h3 class="card-title">Reusable Components</h3>
                        <p class="card-text">Section-based templates that developers can extend without fighting the markup.</p>
                    </article>
                    <article class="card">
                        <h3 class="card-title">Performance Minded</h3>
                        <p class="card-text">Strict enqueues, minimal dependencies and semantic HTML for SEO & speed.</p>
                    </article>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

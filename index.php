<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): ?>
        <?php the_post(); ?>
        <article class="article">
            <header class="article-header">
                <h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="article-meta">
                    <?php if (comments_open()): ?>
                        <span class="comments-link"><?php comments_popup_link(__('Comment', 'devin'), __('1 Comment', 'devin'), __('% Comments', 'devin')); ?></span>
                    <?php endif; ?>
                </p>
            </header>
            <section class="article-body">
                <?php the_content('Continue reading&hellip;'); ?>
            </section>
        </article>
    <?php endwhile; ?>
<?php else: ?>
    <article class="article article-empty">
        <h1 class="article-title">Nothing posted yet.</h1>
    </article>
<?php endif; ?>

<footer class="articles-paging">
    <div class="past-page"><?php previous_posts_link('Newer &raquo;'); ?></div>
    <div class="next-page"><?php next_posts_link(' &laquo; Older'); ?></div>
</footer>

<?php get_footer(); ?>
<?php

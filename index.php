<?php

use Alekhin\Devin\DevinTheme;
?>
<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): ?>
        <?php the_post(); ?>
        <article class="article">
            <header class="article-header">
                <h1 class="article-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                <p class="article-meta">
                    <?php if (comments_open()): ?>
                        <span class="comments-link"><?php comments_popup_link(__('Comment', 'devin'), __('1 Comment', 'devin'), __('% Comments', 'devin')); ?></span>
                    <?php endif; ?>
                </p>
            </header>
            <?php if (has_post_thumbnail()): ?>
            <header class="article-thumbnail">
                <a href="<?php the_permalink(); ?>" style="background-image: url('<?php echo DevinTheme::get_post_thumbnail_source(get_the_ID()); ?>');" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </header>
            <?php endif; ?>
            <section class="article-body">
                <?php the_excerpt(); ?>
                <div class="article-more">
                    <a class="article-more-link" href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>">Read the full article &raquo;</a>
                </div>
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

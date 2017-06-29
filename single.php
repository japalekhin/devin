<?php get_header(); ?>

<?php the_post(); ?>
<article class="article">
    <header class="article-header">
        <h1 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="article-meta">
            <?php if (comments_open()): ?>
                <span class="comments-link"><?php comments_popup_link(__('Comment', 'devin'), __('1 Comment', 'devin'), __('% Comments', 'devin')); ?></span>
            <?php endif; ?>
        </p>
    </header>
    <section class="article-body">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </section>
    <footer class="article-footer article-meta">
        <div class="category"><?php echo get_the_category_list(); ?></div>
        <div class="tags"><?php echo get_the_tag_list('| &nbsp;', '&nbsp;'); ?></div>
    </footer>
    <?php if (comments_open() || '0' != get_comments_number()): ?>
        <footer class="article-footer article-comments">
            <?php comments_template('', TRUE); ?>
        </footer>
    <?php endif; ?>
</article>

<?php get_footer(); ?>
<?php

<?php get_header(); ?>

<?php the_post(); ?>
<article class="article">
    <header class="article-header">
        <h1 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    </header>
    <section class="article-body">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </section>
</article>

<?php get_footer(); ?>
<?php

<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post();
?>
    <div>
        <h1>But this is a page</h1>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
<?php
}
?>

<?php get_footer(); ?>
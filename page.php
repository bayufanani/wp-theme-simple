<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post();
?>
    <div class="container">
        <h1>But this is a page</h1>
        <h2><?php the_title(); ?></h2>
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
<?php
}
?>

<?php get_footer(); ?>
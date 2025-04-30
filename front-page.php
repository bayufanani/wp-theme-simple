<?php get_header(); ?>

<div class="banner">
    <div class="container text-center">
        <h1>Search engine optimisation &
            Marketing.</h1>
        <p>Simple is a simple template with a creative design that solves all your marketing and SEO queries.</p>
        <div>
            <button class="btn btn-primary">Get Started</button>
            <button class="btn btn-secondary">Learn More</button>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/hero.svg" alt="">
    </div>
</div>
<div class="how-does-it-works">
    <div class="container text-center">
        <h2>How Does It Works</h2>
        <p>One theme that serves as an easy-to-use operational toolkit
            that meets customer's needs.</p>
        <div class="list-works">
            <div class="work">
                <img src="#" alt="">
                <h3>Speed
                    Optimisation</h3>
                <p>Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                <a href="#">Read More</a>
            </div>
            <div class="work">
                <img src="#" alt="">
                <h3>SEO and
                    Backlinks</h3>
                <p>Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                <a href="#">Read More</a>
            </div>
            <div class="work">
                <img src="#" alt="">
                <h3>Content
                    Marketing</h3>
                <p>Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                <a href="#">Read More</a>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col mx-4">
                <h2>We Offer a Full Range of Digital Marketing Services!</h2>
                <p>Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                <p><strong>Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer</strong></p>
            </div>
            <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/img/Group1.png" alt=""></div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/img/Group2.png" alt=""></div>
            <div class="col mx-4">
                <h2>Leading Digital Agency for Business Solution.</h2>
                <p>Power-packed with impressive features and well-optimized, this template is designed to provide the best performance in all circumstances.</p>
                <p><strong>Its smart features make it a powerful stand-alone website building tool.</strong></p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h1>Our case studies</h1>
        <p>Lorem ipsum dolor sit amet, tincidunt vestibulum.</p>
        <div class="list-usecases">
            <!-- usecase biasa post -->
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h1>What our customers have to say</h1>
        <p>Lorem ipsum dolor sit amet, tincidunt vestibulum.</p>
        <!-- customer owl carrousel -->
    </div>
</section>
<section>
    <div class="container">
        <div class="contact-us">
            <h1>Do you have any projects?</h1>
            <h1>Contact us</h1>
            <button class="btn btn-primary">Contact Us</button>
        </div>
    </div>
</section>
<?php
while (have_posts()) {
    the_post();
?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php
}
?>

<?php get_footer(); ?>
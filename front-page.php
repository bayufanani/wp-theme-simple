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
            <div class="col-md mx-4">
                <h2>We Offer a Full Range of Digital Marketing Services!</h2>
                <p>Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                <p><strong>Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer</strong></p>
            </div>
            <div class="col-md text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/Group1.png" alt=""></div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md text-center order-2 order-md-1"><img src="<?php echo get_template_directory_uri(); ?>/img/Group2.png" alt=""></div>
            <div class="col-md mx-4 order-1 order-md-2">
                <h2>Leading Digital Agency for Business Solution.</h2>
                <p>Power-packed with impressive features and well-optimized, this template is designed to provide the best performance in all circumstances.</p>
                <p><strong>Its smart features make it a powerful stand-alone website building tool.</strong></p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="text-center">
            <h1>Our case studies</h1>
            <p>Lorem ipsum dolor sit amet, tincidunt vestibulum.</p>
        </div>
        <div class="list-usecases row text-center">
            <div class="usecase col-md-6 col-lg">
                <div class="usecase-img bg-primary">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/uc1.svg" alt="">
                </div>
                <div class="usecase-desc">
                    <h5>Online Marketing</h5>
                    <p>Seo, Marketing</p>
                </div>
            </div>
            <div class="usecase col-md-6 col-lg">
                <div class="usecase-img bg-warning">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/uc2.svg" alt="">
                </div>
                <div class="usecase-desc">
                    <h5>Web Development</h5>
                    <p>Developing, Designing</p>
                </div>
            </div>
            <div class="usecase col-md-6 col-lg">
                <div class="usecase-img bg-success"><img src="<?php echo get_template_directory_uri(); ?>/img/uc3.svg" alt=""></div>
                <div class="usecase-desc">
                    <h5>Web Designing</h5>
                    <p>Designing, Developing</p>
                </div>
            </div>
            <div class="usecase col-md-6 col-lg">
                <div class="usecase-img bg-danger"><img src="<?php echo get_template_directory_uri(); ?>/img/uc4.svg" alt=""></div>
                <div class="usecase-desc">
                    <h5>Software Development</h5>
                    <p>Developing, Designing</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="text-center">
            <h1>What our customers have to say</h1>
            <p>Lorem ipsum dolor sit amet, tincidunt vestibulum.</p>
        </div>
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    $carousel_item = array(
                        array(
                            "img" => "face1.jpg",
                            "text" => "Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.",
                            "name" => "Codey Lamber",
                            "job" => "Marketing Manager"
                        ),
                        array(
                            "img" => "face2.jpg",
                            "text" => "Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.",
                            "name" => "Tony Martinez",
                            "job" => "Marketing Manager"
                        ),
                        array(
                            "img" => "face3.jpg",
                            "text" => "Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.",
                            "name" => "Sophia Armstrong",
                            "job" => "Marketing Manager"
                        ),
                        array(
                            "img" => "face4.jpg",
                            "text" => "Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.",
                            "name" => "Codey Lamber",
                            "job" => "Marketing Manager"
                        ),
                        array(
                            "img" => "face5.jpg",
                            "text" => "Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.",
                            "name" => "Tony Martinez",
                            "job" => "Marketing Manager"
                        ),
                        array(
                            "img" => "face6.jpg",
                            "text" => "Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.",
                            "name" => "Sophia Armstrong",
                            "job" => "Marketing Manager"
                        ),
                    );
                    foreach ($carousel_item as $item) {
                    ?>

                        <li class="splide-item splide__slide">
                            <div class="splide-img">
                                <img src="<?php echo get_template_directory_uri() . "/img/" . $item["img"]; ?>" alt="">
                            </div>
                            <p class="splide-item-text"><?php echo esc_html($item['text']) ?></p>
                            <div class="splide-item-divider"></div>
                            <p class="splide-item-name"><?php echo esc_html($item['name']) ?></p>
                            <p class="splide-item-job"><?php echo esc_html($item['job']) ?></p>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
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
<?php get_footer(); ?>
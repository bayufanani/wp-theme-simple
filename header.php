<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <nav class="sticky-top">
        <div class="container">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <div class="brand">
                    <h2><?php bloginfo('name') ?></h2>
                </div>
                <ul class="nav nav-pills">
                    <li class="nav-item"> <a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Testimonials</a></li>
                </ul>
                <div class="btn btn-primary">
                    Contact Us
                </div>
            </div>
        </div>
    </nav>
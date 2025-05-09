<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-spy">
    <nav class="sticky-top shadow-sm p-2" <?php echo is_admin_bar_showing() ? 'style="top: 32px"' : ''; ?>>
        <div class="container">
            <div class="d-flex w-100 justify-content-between align-items-center" id="navbar-spy">
                <div class=" brand">
                    <h2><?php bloginfo('name') ?></h2>
                </div>
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#blog">Blog</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#testimonials">Testimonials</a></li>
                </ul>
                <div class="btn btn-primary">
                    Contact Us
                </div>
            </div>
        </div>
    </nav>
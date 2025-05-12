<!DOCTYPE html>
<html <?php language_attributes() ?>>

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
                <div class="nav-mobile d-sm-block d-md-none p-2" id="nav-mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M3.75 5.25a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5H3.75Zm0 6a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5H3.75Zm0 6a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5H3.75Z"></path>
                    </svg>
                </div>
                <ul class="nav nav-pills flex-grow-1" role="tablist">
                    <li class="nav-item p-2 text-end d-md-none" id="nav-mobile-close" <?php echo is_admin_bar_showing() ? 'style="margin-top: 32px"' : ''; ?>>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M5.72 5.72a.75.75 0 0 1 1.06 0L12 10.94l5.22-5.22a.749.749 0 0 1 1.275.326.749.749 0 0 1-.215.734L13.06 12l5.22 5.22a.749.749 0 0 1-.326 1.275.749.749 0 0 1-.734-.215L12 13.06l-5.22 5.22a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042L10.94 12 5.72 6.78a.75.75 0 0 1 0-1.06Z"></path>
                        </svg>
                    </li>
                    <li class="flex-grow-1 d-none d-md-block"></li>
                    <li class="nav-item"> <a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#blog">Blog</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="flex-grow-1 d-none d-md-block"></li>
                    <li class="button-contact">
                        <div class="btn btn-primary">
                            Contact Us
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
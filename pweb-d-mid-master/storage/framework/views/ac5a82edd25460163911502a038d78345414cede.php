<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo e($title); ?> | WorkingSpace</title>
        <link rel="stylesheet" href="../../css/style.css" />
        <link rel="icon" type="image/x-icon" href="../../img/favicon.ico" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous"
        />
    </head>
    <body id="index">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg sticky-top bg-white">
            <div class="container">
                <a class="navbar-brand fw-semibold fs-3 first-color" href="/">
                    <img src="../../img/logo-purple.png" alt="logo" height="55" class="d-inline-block" />
                    Working Space
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse fs-5" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(($title == "Home") ? 'active' : ''); ?>" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(($title == "About Us") ? 'active' : ''); ?>" href="/about-us">About Us</a>
                        </li>
                        
                        <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link  <?php echo e(($title == "Login") ? 'active' : ''); ?>" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(($title == "Register") ? 'active' : ''); ?>" href="<?php echo e(route('register')); ?>">Register</a>
                        </li>
                        <?php endif; ?>
                        
                        <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(($title == "Dashboard") ? 'active' : ''); ?>" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(($title == "Catalog") ? 'active' : ''); ?>" href="<?php echo e(route('catalog')); ?>">Catalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="<?php echo e(route('logout')); ?>">Logout</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navbar -->

        <!-- Content Wrapper -->
        <?php echo $__env->yieldContent('container'); ?>
        
        

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"
        ></script>
        <script src="../js/script.js"></script>
        <script src="https://kit.fontawesome.com/1aeb993afb.js" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\Users\LENOVO\Downloads\pweb-d-mid-master\pweb-d-mid-master\resources\views/layouts/mainnofooter.blade.php ENDPATH**/ ?>
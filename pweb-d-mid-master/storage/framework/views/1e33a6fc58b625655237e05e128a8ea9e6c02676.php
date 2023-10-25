<?php $__env->startSection('container'); ?>
<!-- Jumbotron -->
<section class="jumbotron">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 row-content">
                
                <h1 class="fw-bold display-1-sm">Cari Tempat Kerja?<br><span class="first-color">Working Space</span> aja!</h1>
                <p class="fs-4">
                    Di sini, kamu dapat working space dengan harga termurah dan terbuka 24 jam!
                </p>
                <a class="btn rounded-pill btn-rounded text-white" style="background-color:#345cb3;"href="<?php if(auth()->guard()->check()): ?> <?php echo e(route('catalog')); ?> <?php endif; ?> <?php if(auth()->guard()->guest()): ?> <?php echo e(route('login')); ?> <?php endif; ?>">Lihat Working Space yang tersedia! ></a>
            </div>
            <div class="col-md-6">
                <img class="mx-auto float-end" src="img/photo2.png" alt="" width="75%" />
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
            fill="#fff"
            fill-opacity="1"
            d="M0,128L48,122.7C96,117,192,107,288,85.3C384,64,480,32,576,64C672,96,768,192,864,229.3C960,267,1056,245,1152,213.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
    </svg>
</section>
<!-- End of Jumbotron -->
<!-- Carousel wrapper -->
<h1 class="text-center display-3 fw-bolder mb-2">Apa Kata Mereka?</h1>
<div id="testimonials" class="carousel slide text-center carousel-dark mt-4" data-mdb-ride="carousel">
    <div class="carousel-inner">
        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="carousel-item <?php if($index==0): ?> active <?php endif; ?>">
            <img class="rounded-circle shadow-1-strong mb-4"
                src="<?php echo e($review["image"]); ?>" alt="avatar"
                style="width: 200px;" />
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h5 class="mb-3 display-6"><?php echo e($review["name"]); ?></h5>
                    <p class="text-muted fs-3"><?php echo e($review["job"]); ?></p>
                    <p class=" fs-4">
                    <i class="fas fa-quote-left pe-2"></i>
                    <?php echo e($review["body"]); ?>

                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonials" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonials" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Downloads\pweb-d-mid-master\pweb-d-mid-master\resources\views/home.blade.php ENDPATH**/ ?>
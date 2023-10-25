
<?php $__env->startSection('container'); ?>
<div class="container pt-5">
    <h1 class="text-center">Catalog</h1>

    <?php $__currentLoopData = $kos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div id="<?php echo e($k->slug); ?>" class="row justify-content-center align-content-center">
        <div class="col-lg-3 col-md-6 col-8 m-3 align-items-center">
            <img src="<?php echo e($k->image); ?>" alt="<?php echo e($k->slug); ?>" class="img-fluid rounded-3" />
        </div>
        <div class="col-lg-6 m-3 d-flex align-items-center">
            <div class="col">
                <a class="text-decoration-none" href="/view/<?php echo e($k->slug); ?>">
                    <h3 class=""><?php echo e($k->name); ?></h3>
                    <p class="text-muted">Detail></p>
                </a>
                <p class="fs-5">Rp<?php echo e(number_format($k->price, 2, ',', '.')); ?></p>
                <a class="fs-5 d-flex flex-row align-items-center text-decoration-none" href="<?php echo e($k["maps"]); ?>">
                    <div class="col-1">
                        <i class="fs-2 fa-solid fa-map-location-dot pe-3"></i>
                    </div>
                    <div class="col">
                        <p class="m-0"><?php echo e($k->address); ?></p>
                    </div>
                </a>
                <a class="fs-5 d-flex flex-row align-items-center text-decoration-none" href="https://wa.me/62<?php echo e($k["telepon"]); ?>">
                    <div class="col-1">
                        <i class="fs-2 fa fa-whatsapp pe-3"></i>
                    </div>
                    <div class="col">
                        <p class="m-0">0<?php echo e($k->phone); ?></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fadli's File SSD\WebDev\pweb-mid\resources\views/catalog.blade.php ENDPATH**/ ?>
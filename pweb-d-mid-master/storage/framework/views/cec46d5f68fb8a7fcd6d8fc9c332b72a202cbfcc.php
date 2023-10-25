
<?php $__env->startSection('container'); ?>

<div class="container  pt-3">
    <div class="row">
        <a class="fs-5 text-decoration-none text-muted " onclick="history.back()" role="button">Back</a>
    </div>
    <div class="row mt-3">
        <div class="col-4 ">
            <div class="row ">
                <div class="">
                    <img src="<?php echo e($kos->image); ?>" alt="slug" class="img-fluid rounded-3}"/>
                </div>
            </div>
            <div class="row d-grid pt-3">
                <h2>Kontak</h2>   
                <div href="https://wa.me/62<?php echo e($kos->phone); ?>" class="first-color d-flex">          
                    <div class="col-1 ">
                        <i class="fs-2 fa fa-whatsapp"></i>
                    </div>
                    <div class="col  d-grid">
                        <p class="my-auto">0<?php echo e($kos->phone); ?></p>
                    </div>
                </div>       
            </div>
        </div>
        <div class="col px-3 ">
            <div class="row ">
                <h1><?php echo e($kos->name); ?></h1>
            </div>
            <div class="row  text-muted fs-5 fw-semibold">
                <p>Rp<?php echo e(number_format($kos->price, 2, ',', '.')); ?></p>
            </div>
            <div class="row ">
                <h5 class="first-color ">Alamat</h5>
                <p><?php echo e($kos->address); ?> | 
                    <a href="<?php echo e($kos->maps); ?>" class="text-decoration-none first-color">Open in Google Maps</a></p>
            </div>
            <div class="row ">
                <h5 class="first-color ">Deskripsi</h5>
                <p><?php echo e($kos->description); ?></p>
            </div>
    
        </div>
    </div>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fadli's File SSD\WebDev\pweb-mid\resources\views/view.blade.php ENDPATH**/ ?>
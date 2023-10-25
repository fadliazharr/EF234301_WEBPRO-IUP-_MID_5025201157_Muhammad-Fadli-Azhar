<?php $__env->startSection('container'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            <!-- Notifikasi menggunakan flash session data -->

                <a href="<?php echo e(route('add-kos')); ?>" class="btn btn-md btn-success mb-3 float-right">
                    Add Product
                </a>

                <table class="table table-bordered mt-1">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Price</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Created at</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $kos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($k->id); ?></td>
                            <td><?php echo e($k->name); ?></td>
                            <td><?php echo e($k->slug); ?></td>
                            <td><?php echo e($k->price); ?></td>
                            <td><?php echo e($k->phone); ?></td>
                            <td><?php echo e($k->address); ?><br><a href="<?php echo e($k->maps); ?>"><?php echo e($k->maps); ?></a></td>
                            <td><?php echo e($k->created_at); ?></td>
                            
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin?');"
                                    action="/dashboard/<?php echo e($k->id); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="d-grid gap-1">
                                        <a href="/dashboard/<?php echo e($k->id); ?>/edit" class="btn btn-primary btn-block">Edit</a>
                                        <a href="/view/<?php echo e($k->slug); ?>" class="btn btn-primary btn-block">View</a>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-block">Delete</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td class="text-center text-mute" colspan="7">Data product tidak tersedia</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainnofooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Downloads\pweb-d-mid-master\pweb-d-mid-master\resources\views/dashboard/index.blade.php ENDPATH**/ ?>
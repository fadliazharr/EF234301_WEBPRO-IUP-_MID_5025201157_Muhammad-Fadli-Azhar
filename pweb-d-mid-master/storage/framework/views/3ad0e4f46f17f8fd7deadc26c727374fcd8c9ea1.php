
<?php $__env->startSection('container'); ?>

<div class="container pt-5">
    <h1 class="text-center display-3 fw-bolder">Login</h1>

    <div class="container col-4 mt-5">
        <?php if(session()->has('status')): ?>
        <div class="row text-danger text-center pb-1">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>

        <form action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <!-- Email input -->
            <div class="row form-outline mb-4">
                <input type="email" name="email"id="email" class="form-control" placeholder="Email address" required/>
                
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          
            <!-- Password input -->
            <div class="row form mb-4">
                <input type="password" name="password" id="password" class="form-control " placeholder="Password " required/>
                
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          
            <!-- Submit button -->
            <div class="row">
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
            </div>
          
            <!-- Register buttons -->
            <div class="text-center">
                <p>Belum punya akun? <a href="/register">Register</a></p>
            </div>
        </form>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainnofooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fadli's File SSD\WebDev\pweb-mid\resources\views/auth/login.blade.php ENDPATH**/ ?>
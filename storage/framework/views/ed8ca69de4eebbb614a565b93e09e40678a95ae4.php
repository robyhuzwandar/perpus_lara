<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Data Pemrograman</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">

                    <form action="<?php echo e(route('platform.store')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <?php echo $__env->make('template.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($error); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <label>Platform</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
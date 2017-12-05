<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Data Pemrograman</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?php echo e(route('pemrograman.store')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label>Pemrograman</label>
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
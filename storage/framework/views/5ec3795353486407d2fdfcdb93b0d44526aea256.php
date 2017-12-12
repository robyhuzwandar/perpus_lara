<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Data Buku</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    
                        
                            
                        
                    
                    <form action="<?php echo e(route('member.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group <?php echo e($errors->has('nim') ? ' has-error' : ''); ?>">
                            <label>Nim</label>
                            <input type="text" class="form-control" value="<?php echo e(old('nim')); ?>" name="nim">
                            <?php if($errors->has('nim')): ?>
                                <span class="help-block"><strong><?php echo e($errors->first('nim')); ?></strong></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group <?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
                            <label>Nama</label>
                            <input value="<?php echo e(old('nama')); ?>" type="text" class="form-control" name="nama">
                            <?php if($errors->has('nama')): ?>
                                <span class="help-block"><strong><?php echo e($errors->first('nim')); ?></strong></span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>">
                            <label>Alamat</label>
                            <input value="<?php echo e(old('alamat')); ?>" type="text" class="form-control" name="alamat">
                            <?php if($errors->has('alamat')): ?>
                                <span class="help-block"><strong><?php echo e($errors->first('alamat')); ?></strong></span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('tglLahir') ? ' has-error' : ''); ?>">
                            <label>Tgl Lahir</label>
                            <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
                                <input value="<?php echo e(old('tglLahir')); ?>" class="form-control" type="text" name="tglLahir" readonly="readonly">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <?php if($errors->has('tglLahir')): ?>
                                    <span class="help-block"><strong><?php echo e($errors->first('tglLahir')); ?></strong></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group <?php echo e($errors->has('nohp') ? ' has-error' : ''); ?>">
                            <label>No HP</label>
                            <input  value="<?php echo e(old('nohp')); ?>" type="text" class="form-control" name="nohp">
                            <?php if($errors->has('nohp')): ?>
                                <span class="help-block"><strong><?php echo e($errors->first('nohp')); ?></strong></span>
                            <?php endif; ?>
                        </div>


                        <div class="form-group  <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label>Email</label>
                            <input value="<?php echo e(old('email')); ?>" type="email" class="form-control" name="email">
                            <?php if($errors->has('email')): ?>
                                <span class="help-block"><strong><?php echo e($errors->first('email')); ?></strong></span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('foto') ? ' has-error' : ''); ?>">
                            <br>
                            <label>Foto</label>
                            <input value="<?php echo e(old('foto')); ?>" type="file" class="" name="foto">
                            <?php if($errors->has('email')): ?>
                                <span class="help-block"><strong><?php echo e($errors->first('foto')); ?></strong></span>
                            <?php endif; ?>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
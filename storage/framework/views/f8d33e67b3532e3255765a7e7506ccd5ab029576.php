<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Data Buku</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($error); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('buku.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label>Kode Buku</label>
                            <input type="text" class="form-control" name="kodeBuku">
                        </div>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" class="form-control" name="judul">
                        </div>

                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" name="penulis">
                        </div>

                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" name="penerbit">
                        </div>

                        <div class="form-group">
                            <label>Tahun terbit</label>
                            <input type="text" class="form-control" name="tahunTerbit">
                        </div>

                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok">
                        </div>

                        <div class="form-group">
                            <label>Kode Rak</label>
                            <input type="text" class="form-control" name="kodeRak">
                        </div>

                        <div class="form-group">
                            <label>Kode Kolom</label>
                            <input type="text" class="form-control" name="kodeKolom">
                        </div>

                        <div class="btn-group">
                            <select id="select" name="pemrograman_id">
                                <option selected="">Pilih Bahasa Pemrograman</option>
                                <?php $__currentLoopData = $pemrogramans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemrograman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($pemrograman->id); ?>"><?php echo e($pemrograman->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="btn-group">
                            <select id="select" name="platform_id">

                                <option selected="">Pilih Jenis Platform</option>
                                <?php $__currentLoopData = $platforms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platform): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($platform->id); ?>"><?php echo e($platform->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <br>
                            <label>Gambar</label>
                            <input type="file" class="" name="gambar">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
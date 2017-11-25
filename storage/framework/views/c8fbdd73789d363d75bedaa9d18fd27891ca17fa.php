<?php $__env->startSection('content'); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Tambah Buku
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?php echo e(route('buku.edit', $buku->kodeBuku)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('PATCH')); ?>

                        <div class="form-group">
                            <label>Kode Buku</label>
                            <input type="text" class="form-control" name="kodeBuku" value="<?php echo e($buku->kodeBuku); ?>">
                        </div>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" class="form-control" name="judul" value="<?php echo e($buku->judul); ?>">
                        </div>

                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" name="penulis" value="<?php echo e($buku->penulis); ?>">
                        </div>

                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" value="<?php echo e($buku->penerbit); ?>">
                        </div>

                        <div class="form-group">
                            <label>Tahun terbit</label>
                            <input type="text" class="form-control" name="tahunTerbit" value="<?php echo e($buku->tahunTerbit); ?>">
                        </div>

                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok" value="<?php echo e($buku->stok); ?>">
                        </div>

                        <div class="form-group">
                            <label>Kode Rak</label>
                            <input type="text" class="form-control" name="kodeRak" value="<?php echo e($buku->kodeRak); ?>">
                        </div>

                        <div class="form-group">
                            <label>Kode Kolom</label>
                            <input type="text" class="form-control" name="kodeKolom" value="<?php echo e($buku->kodeKolom); ?>">
                        </div>

                        <div class="btn-group">
                            <select id="select" name="pemrograman_id">
                                <option selected="">Pilih Bahasa Pemrograman</option>
                                <?php $__currentLoopData = $pemrogramans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemrograman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                            <?php if($pemrograman->id === $buku->pemrograman_id): ?>
                                            selected
                                            <?php endif; ?>
                                            value="<?php echo e($pemrograman->id); ?>"><?php echo e($pemrograman->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="btn-group">
                            <select id="select" name="platform_id">

                                <option selected="">Pilih Jenis Platform</option>
                                <?php $__currentLoopData = $platforms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platform): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                            <?php if($platform->id === $buku->platform_id): ?>
                                            selected
                                            <?php endif; ?>
                                            value="<?php echo e($platform->id); ?>"><?php echo e($platform->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <br>
                            <label>Gambar</label><br>
                            <img style="padding: 5px" width="20%" height="20%" src="<?php echo e(asset('buku_gambar/'.$buku->gambar)); ?>">
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
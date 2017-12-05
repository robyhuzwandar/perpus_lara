<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun terbit</th>
                    <th>Pemrograman</th>
                    <th>Platform</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php $__currentLoopData = $bukus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->index + 1); ?></td>
                        <td width="16%"><?php echo e($buku->judul); ?></td>
                        <td width="16%"><?php echo e($buku->penulis); ?></td>
                        <td width="16%"><?php echo e($buku->penerbit); ?></td>
                        <td width="16%"><?php echo e($buku->tahunTerbit); ?></td>
                        <td width="16%"><?php echo e($buku->pem); ?></td>
                        <td width="16%"><?php echo e($buku->nama); ?></td>
                        <td width="16%"><img width="80%" height="50%" src="<?php echo e(asset('buku_gambar/'.$buku->gambar)); ?>">
                        </td>
                        <td width="16%">
                            <a href="<?php echo e(route('buku.edit', $buku->kodeBuku)); ?>"
                               class="btn-primary btn-sm">Edit</a>
                            <form class="" action="<?php echo e(route('buku.destroy', $buku->kodeBuku)); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                                <button type="submit" name="button" class="btn btn-danger btn-xs">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="mb-4">Daftar Magang</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Perusahaan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $internships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $internship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($internship->company); ?></td>
                    <td><?php echo e($internship->description); ?></td>
                    <td>
                        <a href="<?php echo e(route('internships.show', $internship->id)); ?>" class="btn btn-info">Detail</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dashboard-magang\resources\views/internships/index.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="mb-4">Detail Magang</h2>
    <p><strong>Nama Perusahaan:</strong> <?php echo e($internship->company); ?></p>
    <p><strong>Deskripsi:</strong> <?php echo e($internship->description); ?></p>
    <a href="<?php echo e(route('internships.index')); ?>" class="btn btn-secondary">Kembali</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dashboard-magang\resources\views/internships/show.blade.php ENDPATH**/ ?>
<?php if(session('success')): ?>
<div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
    <i class="ri-notification-off-line me-3 align-middle"></i> <strong>Berhasil</strong> - <?php echo e(session('success')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>


<?php if(session('error')): ?>
<div class="alert alert-warning alert-border-left alert-dismissible fade show" role="alert">
    <i class="ri-notification-off-line me-3 align-middle"></i> <strong>Gagal</strong> - <?php echo e(session('error')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\lendus-velzon\resources\views/components/alerts.blade.php ENDPATH**/ ?>
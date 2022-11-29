<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Data <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Unit <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="table-responsive">
    <div class="float-end pb-4">
        <a href="<?php echo e(route('master.unit.create')); ?>" type="button"
            class="btn btn-primary btn-label waves-effect waves-light">
            <i class="ri-add-fill label-icon align-middle fs-16 me-2"></i> Tambah
        </a>
    </div>
    <table class="table align-middle mb-0">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Pimpinan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($loop->index +1); ?></th>
                <td><?php echo e($item->nama); ?></td>
                <td><?php echo e($item->pimpinan); ?> <span><?php echo e($item->nip); ?></span></td>
                <td>
                    <a href="<?php echo e(route('master.unit.edit', $item->id)); ?>" class="btn btn-sm btn-info">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger" onclick="confirmDelete(<?php echo e($item->id); ?>)">
                        <form action="<?php echo e(route('master.unit.destroy', $item->id)); ?>" method="POST"
                            id="delete-<?php echo e($item->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                        Hapus
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <?php endif; ?>
            <tr>
                <td colspan="4" class="text-center"><span class="text-danger">Belum Ada Data</span></td>
            </tr>
        </tbody>
    </table>
    <!-- end table -->
</div>
<!-- end table responsive -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lendus-velzon\resources\views/pages/unit/index.blade.php ENDPATH**/ ?>
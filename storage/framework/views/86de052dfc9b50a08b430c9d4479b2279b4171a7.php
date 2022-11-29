<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Data <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Tambah Unit <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="col-12">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Unit</h4>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="live-preview">
                <form action="javascript:void(0);" class="row g-3">
                    <div class="col-md-12">
                        <label for="fullnameInput" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control"
                            placeholder="Pusat Teknologi Informasi dan Pangkalan Data">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nama Pimpinan</label>
                        <input type="text" name="pimpinan" class="form-control" placeholder="Idria Maita S.Kom., M.Sc">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">NIP Pimpinan</label>
                        <input type="number" name="nip" class="form-control" placeholder="197905132007102005">
                    </div>
                    <div class="col-12">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- end col -->
</div>
<!--end row-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lendus-velzon\resources\views/pages/unit/tambah.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?> Peminjaman <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Data <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Buat Data Peminjaman <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="col-12">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Peminjaman</h4>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="live-preview">
                <form action="<?php echo e(route('peminjaman.store')); ?>" method="POST" class="row g-3"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Pengguna</label>
                        <select class="form-control <?php $__errorArgs = ['pengguna'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="pengguna"
                            name="pengguna" required>
                            <option selected disabled>--- Pilih Pengguna ---</option>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>" <?php if(old('pengguna')==$item->id): echo 'selected'; endif; ?>><?php echo e($item->name); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <span class="text-muted">Jika tidak tersedia nama yang dicari silahkan di add terlebih dahulu di
                            menu
                            pengguna</span>

                        <?php $__errorArgs = ['pengguna'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>



                    <div class="col-md-4">
                        <label for="fullnameInput" class="form-label">Tanggal Pakai</label>
                        <input type="date" name="pakai" id="pakai"
                            class="form-control <?php $__errorArgs = ['pakai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('pakai')); ?>"
                            min="1">
                        <?php $__errorArgs = ['pakai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-md-2">
                        <label for="fullnameInput" class="form-label">Durasi </label>
                        <input type="number" name="durasi" id="durasi"
                            class="form-control <?php $__errorArgs = ['durasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('durasi')); ?>"
                            min="1">
                        <span class="text-muted">Inputan Angka Dalam Hari</span>
                        <?php $__errorArgs = ['durasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-md-4">
                        <label for="fullnameInput" class="form-label">Asset</label>
                        <select class="form-control <?php $__errorArgs = ['asset'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="category" name="asset"
                            required>
                            <option selected disabled>--- Pilih Unit ---</option>
                            <?php $__currentLoopData = $asset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>" <?php if(old('asset')==$item->id): echo 'selected'; endif; ?>><?php echo e($item->nama); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <?php $__errorArgs = ['asset'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-md-2">
                        <label for="fullnameInput" class="form-label">Jumlah</label>
                        <select class="form-control" name="course" id="course"></select>

                        <?php $__errorArgs = ['jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Surat</label>

                        <input type="file" class="form-control  <?php $__errorArgs = ['surat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="surat"
                            value="<?php echo e(old('surat')); ?>">

                        <?php $__errorArgs = ['surat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-12">
                        <div class="grid g-3 float-end">
                            <a href="<?php echo e(route('master.asset.index')); ?>" class="btn btn-light">Kembali</a>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
            $('#category').on('change', function() {
               var categoryID = $(this).val();
               if(categoryID) {
                   $.ajax({
                       url: '/getJumlah/'+categoryID,
                       type: "GET",
                       data : {"_token":"<?php echo e(csrf_token()); ?>"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#course').empty();
                            $('#course').append('<option hidden>Choose Course</option>');
                            $.each(data, function(key, course){
                                $('select[name="course"]').append('<option value="'+ key +'">' + course.name+ '</option>');
                            });
                        }else{
                            $('#course').empty();
                        }
                     }
                   });
               }else{
                 $('#course').empty();
               }
            });
            });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lendus-velzon\resources\views/pages/peminjaman/create.blade.php ENDPATH**/ ?>
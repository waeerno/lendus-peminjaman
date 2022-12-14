<?php $__env->startSection('title'); ?> Peminjaman <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!-- Filepond css -->
<link href="<?php echo e(URL::asset('assets/libs/filepond/filepond.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Peminjaman <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Peminjaman <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Buat Peminjaman</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('peminjaman-client.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="row g-3">
                        <div class="col-lg-12">
                            <h5 class="fw-semibold mb-3">Surat Permohonan Peminjaman</h5>
                            <input type="file" class="filepond filepond-input-multiple  <?php $__errorArgs = ['surat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="surat" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="1">

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
                        <!--end col-->

                        
                        <div class="col-lg-4">
                            <label for="productName" class="form-label">Nomor Induk</label>
                            <input type="text" class="form-control  <?php $__errorArgs = ['no_induk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="no_induk" placeholder="NIM/NIP/NIK/NIDN">

                            <?php $__errorArgs = ['no_induk'];
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
                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="productName" class="form-label">Nama</label>
                            <input type="text" class="form-control  <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama" placeholder="Nama Lengkap">
                            <?php $__errorArgs = ['unit_id'];
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
                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="productName" class="form-label">Nomor Wa</label>
                            <input type="tel" class="form-control  <?php $__errorArgs = ['no_wa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="no_wa">
                            <?php $__errorArgs = ['no_wa'];
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
                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="productName" class="form-label">Email</label>
                            <input type="email" class="form-control  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email">

                            <?php $__errorArgs = ['wmail'];
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
                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="fullnameInput" class="form-label">Unit</label>
                            <select class="form-control <?php $__errorArgs = ['unit_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="unit_id" name="unit_id" required>
                                <option selected disabled>--- Pilih Unit ---</option>
                                <?php $__currentLoopData = $unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>" <?php if(old('unit_id')==$item->id): echo 'selected'; endif; ?>><?php echo e($item->nama); ?>

                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <?php $__errorArgs = ['unit_id'];
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

                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="fullnameInput" class="form-label">Jenis</label>
                            <select class="form-control <?php $__errorArgs = ['jenis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="jenis" name="jenis" required>
                                <option selected disabled>--- Pilih Jenis ---</option>
                                <option value="Mahasiswa" <?php if(old('jenis')=='Mahasiswa' ): echo 'selected'; endif; ?>>Mahasiswa</option>
                                <option value="Pegawai" <?php if(old('jenis')=='Pegawai' ): echo 'selected'; endif; ?>>Pegawai</option>
                                <option value="Dosen" <?php if(old('jenis')=='Dosen' ): echo 'selected'; endif; ?>>Dosen</option>
                            </select>

                            <?php $__errorArgs = ['jenis'];
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
                        <!--end col-->
                        

                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="fullnameInput" class="form-label">Asset</label>
                            <select class="form-control <?php $__errorArgs = ['asset'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="asset" name="asset" required>
                                <option selected disabled>--- Pilih Unit ---</option>
                                <?php $__currentLoopData = $asset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>" <?php if(old('asset')==$item->id): echo 'selected'; endif; ?>><?php echo e($item->nama); ?>, <span class="text-primary">Jumlah Stok : <?php echo e($item->jumlah); ?></span>
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

                        <!--end col-->
                        <div class="col-lg-2">
                            <label for="itemPrice" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah">
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="fullnameInput" class="form-label">Tanggal Pakai</label>
                            <input type="date" name="pakai" id="pakai" class="form-control <?php $__errorArgs = ['pakai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('pakai')); ?>" min="1">
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
                        <!--end col-->
                        <div class="col-lg-2">
                            <label for="fullnameInput" class="form-label">Durasi </label>
                            <input type="number" name="durasi" id="durasi" class="form-control <?php $__errorArgs = ['durasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('durasi')); ?>" min="1">
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
                        <!--end col-->
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="text-end">
                                <a href="<?php echo e(route('peminjaman.index')); ?>" class="btn btn-light">Kembali</a>
                                <button type="submit" class="btn btn-primary">Create Item</button>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- filepond js -->
<script src="<?php echo e(URL::asset('assets/libs/filepond/filepond.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')); ?>"></script>
<!--nft create init js-->
<script src="<?php echo e(URL::asset('assets/js/pages/apps-nft-create.init.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lendus-velzon\resources\views/pages/landing/create.blade.php ENDPATH**/ ?>
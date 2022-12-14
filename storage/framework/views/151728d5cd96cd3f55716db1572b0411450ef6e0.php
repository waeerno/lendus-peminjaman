<div id="detail-<?php echo e($item->id); ?>" class="modal fade" tabindex="-1" aria-labelledby="detail-<?php echo e($item->id); ?>Label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detail-<?php echo e($item->id); ?>Label">Detail Pengajuan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('peminjaman.update', $item->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">Nama</label>
                                <input type="text" class="form-control" value="<?php echo e($item->client->nama); ?>">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="lastNameinput" class="form-label">Unit</label>
                                <input type="text" class="form-control" value="<?php echo e($item->client->unit->nama); ?>">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="compnayNameinput" class="form-label">Asset</label>
                                <input type="text" class="form-control" value="<?php echo e($item->asset->nama); ?>">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="phonenumberInput" class="form-label">Durasi Hari</label>
                                <input type="text" class="form-control" value="<?php echo e($item->durasi); ?>">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="emailidInput" class="form-label">Tanggal Pengajuan</label>
                                <input type="text" class="form-control" value="<?php echo e(\Carbon\Carbon::parse($item->tanggal_pengajuan)->diffForHumans()); ?>">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="address1ControlTextarea" class="form-label">Tanggal Pemakaian</label>
                                <input type="text" class="form-control" value="<?php echo e(\Carbon\Carbon::parse($item->mulai_pakai)->isoformat('dddd, Do MMMM Y')); ?>">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="citynameInput" class="form-label">Surat</label>
                                <a class="btn btn-soft-info btn-info float-end" data-fancybox data-type="pdf" href="<?php echo e(asset('storage/'.$item->surat)); ?>"><?php echo e(Str::limit($item->surat, 20, '...')); ?></a>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="ForminputState" class="form-label">Catatan</label>
                                <input type="text" name="catatan" class="form-control" name="catatan">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="fullnameInput" class="form-label">Keputusan</label>
                            <select class="form-control <?php $__errorArgs = ['keputusan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="keputusan" id="keputusan" name="keputusan" required>
                                <option value="1">Terima</option>
                                <option value="0">Tolak</option>
                            </select>

                            <?php $__errorArgs = ['kategori_id'];
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

                        <input type="hidden" name="admin_id" value="<?php echo e(auth()->user()->id); ?>">

                        <div class="col-12">
                            <div class="mb-3">
                                <button type="submit" value="1" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </form>
            </div>
            <div class="modal-footer">

            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<?php /**PATH C:\laragon\www\lendus-velzon\resources\views/pages/peminjaman/detail.blade.php ENDPATH**/ ?>
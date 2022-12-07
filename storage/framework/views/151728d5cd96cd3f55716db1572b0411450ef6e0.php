<div id="detail-<?php echo e($item->id); ?>" class="modal fade" tabindex="-1" aria-labelledby="detail-<?php echo e($item->id); ?>Label"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detail-<?php echo e($item->id); ?>Label">Detail Pengajuan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0);">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">Nama</label>
                                <input type="text" class="form-control" value="<?php echo e($item->user->name); ?>">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="lastNameinput" class="form-label">Unit</label>
                                <input type="text" class="form-control" value="<?php echo e($item->user->unit->nama); ?>">
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
                                <input type="text" class="form-control"
                                    value="<?php echo e(\Carbon\Carbon::parse($item->tanggal_pengajuan)->diffForHumans()); ?>">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="address1ControlTextarea" class="form-label">Tanggal Pemakaian</label>
                                <input type="text" class="form-control"
                                    value="<?php echo e(\Carbon\Carbon::parse($item->mulai_pakai)->isoformat('dddd, Do MMMM Y')); ?>">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="citynameInput" class="form-label">Surat</label>
                                <a class="btn btn-soft-info btn-info float-end" data-fancybox data-type="pdf"
                                    href="<?php echo e(asset('storage/'.$item->surat)); ?>"><?php echo e(Str::limit($item->surat, 20, '...')); ?></a>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="ForminputState" class="form-label">Catatan</label>
                                <input type="text" name="catatan" class="form-control" name="catatan">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Terima</button>
                                <button type="submit" class="btn btn-danger">Tolak</button>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<?php /**PATH C:\laragon\www\lendus-velzon\resources\views/pages/peminjaman/detail.blade.php ENDPATH**/ ?>
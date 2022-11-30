<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Data <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Asset <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php echo $__env->make('components.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="table-responsive">
    <div class="float-end pb-4">
        <a href="<?php echo e(route('master.asset.create')); ?>" type="button"
            class="btn btn-primary btn-label waves-effect waves-light">
            <i class="ri-add-fill label-icon align-middle fs-16 me-2"></i> Tambah
        </a>
    </div>
    <table class="table align-middle mb-0">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Status</th>
                <th scope="col">Jenis</th>
                <th scope="col">Kategori</th>
                <th scope="col">Foto</th>
                <th scope="col" class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($loop->index +1); ?></th>
                <td>
                    <h6 class="text-primary mb-0"><?php echo e($item->nama); ?></h6>
                    <span class="text-muted">
                        <?php echo e($item->unit->nama); ?>

                    </span>
                <td><?php echo e($item->jumlah); ?></td>
                <td><?php echo e($item->status); ?></td>
                <td><?php echo e($item->jenis); ?></td>
                <td><?php echo e($item->kategori); ?></td>
                <td>
                    <img src="<?php echo e(asset('storage/'.$item->foto)); ?>" alt="" width="100px">
                </td>
                <td class="text-end">
                    <a href="<?php echo e(route('master.asset.edit', $item->id)); ?>" class="btn btn-sm btn-info"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data">
                        <i class="ri-edit-2-line"></i>
                    </a>

                    <a href="#" class="btn btn-sm btn-danger" onclick="confirmDelete(<?php echo e($item->id); ?>)"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data">
                        <form action="<?php echo e(route('master.asset.destroy', $item->id)); ?>" method="POST"
                            id="delete-<?php echo e($item->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                        <i class="ri-delete-bin-2-line"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="9" class="text-center"><span class="text-danger">Belum Ada Data</span></td>
            </tr>
            <?php endif; ?>

        </tbody>
    </table>
    <!-- end table -->
</div>
<!-- end table responsive -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>


<script>
    const confirmDelete = id => {
        Swal.fire({
            html: '<div class="mt-3">' +
                '<lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
                '<div class="mt-4 pt-2 fs-15 mx-5">' +
                '<h4>Anda Yakin ?</h4>' +
                '<p class="text-muted mx-4 mb-0">Anda yakin ingin menghapus data ini ?</p>' +
                '</div>' +
                '</div>'
            , showCancelButton: true
            , reverseButtons: true
            , confirmButtonClass: 'btn btn-primary w-xs mb-1'
            , confirmButtonText: 'Ya, Hapus!'
            , cancelButtonClass: 'btn btn-danger w-xs mb-1 me-2'
            , cancelButtonText: 'Batal'
            , buttonsStyling: false
            , showCloseButton: true
        }).then((result) => {
            if (result.isConfirmed) {
                $(`#delete-${id}`).submit();
                Swal.fire(
                    'Dihapus!'
                    , 'Data berhasil dihapus.'
                    , 'success'
                )
            }
        })
    }

</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<?php if(Session::has('success')): ?>
<script>
    Toastify({
        text: "<?php echo e(session()->get('success')); ?>"
        , duration: 5000
        , close: true
        , gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        className: 'bg-primary'
        , style: {
            background: "linear-gradient(to right, rgb(10, 179, 156), rgb(64, 81, 137))"
        }
        , onClick: function() {} // Callback after click
    }).showToast();

</script>
<?php endif; ?>

<?php if(Session::has('error')): ?>
<script>
    Toastify({
        text: "<?php echo e(session()->get('error')); ?>"
        , duration: 5000
        , close: true
        , gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        className: 'bg-primary'
        , style: {
            background: "linear-gradient(to right, rgb(10, 179, 156), rgb(64, 81, 137))"
        }
        , onClick: function() {} // Callback after click
    }).showToast();

</script>
<?php endif; ?>

<script>
    $("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 4000 ); // 5 secs

});
</script>

<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lendus-velzon\resources\views/pages/asset/index.blade.php ENDPATH**/ ?>
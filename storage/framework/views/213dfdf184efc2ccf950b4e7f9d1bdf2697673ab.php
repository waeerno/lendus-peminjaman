<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Data <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Kategori <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php echo $__env->make('components.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row">
    <div class="pb-4">
        <a href="<?php echo e(route('master.kategori.create')); ?>" type="button"
            class="btn btn-primary btn-label waves-effect waves-light float-end">
            <i class="ri-add-fill label-icon align-middle fs-16 me-2"></i> Tambah
        </a>
    </div>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xxl-3 col-sm-6 project-card">

        <div class="card card-height-100">
            <div class="card-body">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-4">Update <?php echo e($item->updated_at->diffForHumans()); ?></p>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <div class="flex-grow-1">
                            <p class="text-muted text-truncate-two-lines mb-1">Kategori</p>
                            <h5 class="mb-3 fs-15">
                                <a href="<?php echo e(route('master.kategori.edit', $item->id)); ?>" class="text-dark">
                                    <?php echo e($item->nama); ?>.
                                </a>
                            </h5>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <div class="float-end">
                            <a href="<?php echo e(route('master.kategori.edit', $item->id)); ?>"
                                class="btn btn-outline-primary waves-effect waves-light" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Edit Data"> <i class="ri-edit-2-line"></i></a>
                            

                            <a href="#" class="btn btn-outline-danger waves-effect waves-light"
                                onclick="confirmDelete(<?php echo e($item->id); ?>)" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Hapus Data">
                                <form action="<?php echo e(route('master.kategori.destroy', $item->id)); ?>" method="POST"
                                    id="delete-<?php echo e($item->id); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                </form>
                                <i class="ri-delete-bin-2-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end card body -->
            <div class="card-footer bg-transparent border-top-dashed py-2">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1"></div>
                    <div class="flex-shrink-0">
                        <div class="text-muted">
                            <i class="ri-calendar-event-fill me-1 align-bottom"></i> <?php echo e($item->created_at->isoFormat('dddd, D MMM Y')); ?>

                        </div>
                    </div>

                </div>

            </div>
            <!-- end card footer -->
        </div>
        <!-- end card -->
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- end col -->
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
    $("document").ready(function() {
        setTimeout(function() {
            $("div.alert").remove();
        }, 4000); // 5 secs

    });

</script>

<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lendus-velzon\resources\views/pages/kategori/index.blade.php ENDPATH**/ ?>
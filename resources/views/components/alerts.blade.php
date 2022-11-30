@if(session('success'))
<div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
    <i class="ri-notification-off-line me-3 align-middle"></i> <strong>Berhasil</strong> - {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


@if(session('error'))
<div class="alert alert-warning alert-border-left alert-dismissible fade show" role="alert">
    <i class="ri-notification-off-line me-3 align-middle"></i> <strong>Gagal</strong> - {{session('error')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

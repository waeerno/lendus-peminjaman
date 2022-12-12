@extends('layouts.master')
@section('title') Riwayat @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data @endslot
@slot('title') Riwayat @endslot
@endcomponent

@include('components.alerts')

<div class=" table-responsive">
<table class="table align-middle mb-0">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Asset</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal pengajuan</th>
            <th scope="col">Tanggal Penggunaan</th>
            <th scope="col">Durasi</th>
            <th scope="col">Catatan</th>
            <th scope="col">Verifikasi oleh</th>
            <th scope="col">Tanggal Verifikasi</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($data as $item)
        <tr>
            <th scope="row">{{ $loop->index +1 }}</th>
            <td>
                <h6 class="text-primary mb-0">{{ $item->user->name }}</h6>
                <span class="text-muted">
                    {{ $item->user->unit->nama }}
                </span>
            <td>{{ $item->asset->nama }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>{{ $item->tanggal_pengajuan }}</td>
            <td>{{ $item->mulai_pakai }}</td>
            <td>{{ $item->durasi }} Hari</td>
            <td>{{ $item->catatan }}</td>
            <td>{{ $item->admin->nama }}</td>
            <td>{{ $item->tanggal_keputusan }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="9" class="text-center"><span class="text-danger">Belum Ada Data</span></td>
        </tr>
        @endforelse

    </tbody>
</table>
<!-- end table -->
</div>
<!-- end table responsive -->
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
</script>

<script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

{{-- Delete Data Sweet Alert --}}
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
@if(Session::has('success'))
<script>
    Toastify({
        text: "{{ session()->get('success') }}"
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
@endif

@if(Session::has('error'))
<script>
    Toastify({
        text: "{{ session()->get('error') }}"
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
@endif

<script>
    $("document").ready(function() {
        setTimeout(function() {
            $("div.alert").remove();
        }, 4000); // 5 secs

    });

</script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

@endsection

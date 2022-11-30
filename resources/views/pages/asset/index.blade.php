@extends('layouts.master')
@section('title') @lang('translation.starter') @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data @endslot
@slot('title') Asset @endslot
@endcomponent

@include('components.alerts')

<div class="table-responsive">
    <div class="float-end pb-4">
        <a href="{{ route('master.asset.create') }}" type="button"
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
            @forelse ($data as $item)
            <tr>
                <th scope="row">{{ $loop->index +1 }}</th>
                <td>
                    <h6 class="text-primary mb-0">{{ $item->nama }}</h6>
                    <span class="text-muted">
                        {{ $item->unit->nama }}
                    </span>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->jenis }}</td>
                <td>{{ $item->kategori->nama }}</td>
                <td>
                    <img src="{{ asset('storage/'.$item->foto) }}" alt="" width="100px">
                </td>
                <td class="text-end">
                    <a href="{{ route('master.asset.edit', $item->id) }}" class="btn btn-sm btn-info"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data">
                        <i class="ri-edit-2-line"></i>
                    </a>

                    <a href="#" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $item->id }})"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data">
                        <form action="{{ route('master.asset.destroy', $item->id) }}" method="POST"
                            id="delete-{{ $item->id }}">
                            @csrf
                            @method('DELETE')
                        </form>
                        <i class="ri-delete-bin-2-line"></i>
                    </a>
                </td>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

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
    $("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 4000 ); // 5 secs

});
</script>

<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

@endsection

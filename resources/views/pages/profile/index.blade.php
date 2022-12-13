@extends('layouts.master')
@section('title') Profile @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Setting @endslot
@slot('title') Profile @endslot
@endcomponent

@include('components.alerts')

<div class=" row">
<div class="col-xxl-6">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Data Diri</h4>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="live-preview">
                <form action="{{ route('profile.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    @hasrole('Operator')
                    <input type="hidden" name="level" value="operator">
                    @else
                    <input type="hidden" name="level" value="admin">
                    <input type="hidden" name="admin" value="{{ $data->admin->id }}">
                    @endhasrole


                    <div class="row">
                        @hasrole('Operator')
                        <div class="col-md-12">
                            @else
                            <div class="col-md-6">
                                @endhasrole
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
                                </div>
                            </div>
                            <!--end col-->
                            @hasrole('Operator')
                            <div class="col-md-12">
                                @else
                                <div class="col-md-6">
                                    @endhasrole
                                    <div class="mb-3">
                                        <label for="lastNameinput" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $data->email }}">
                                    </div>
                                </div>

                                <!--end col-->
                                @hasrole('Admin')
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="compnayNameinput" class="form-label">Nomor Wa</label>
                                        <input type="tel" class="form-control" name="no_wa" value="{{ $data->admin->no_wa }}">

                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="fullnameInput" class="form-label">Unit</label>
                                    <select class="form-control @error('unit_id') is-invalid @enderror" id="unit_id" disabled>
                                        <option>-- Pilih Unit --</option>
                                        @foreach ($unit as $item)
                                        <option value="{{ $item->id }}" @selected(old('unit_id')==$item->id || $item->id ==
                                            $data->admin->unit_id )>{{$item->nama }}
                                        </option>
                                        @endforeach
                                    </select>

                                    @error('unit_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                @endhasrole
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                </form>
            </div>
        </div>
    </div>
</div> <!-- end col -->

<div class="col-xxl-6">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Data Akun </h4>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="live-preview">
                <form action="{{ route('sandi.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">Password Lama</label>
                                <input type="password" class="form-control  @error('curr_password') is-invalid @enderror" name="curr_password">
                                @error('curr_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>

                        @hasrole('Operator')
                        <div class="col-md-6">
                            @else
                            <div class="col-md-12">
                                @endhasrole
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Password Baru</label>
                                    <input type="password" class="form-control  @error('new_password') is-invalid @enderror" name="new_password">
                                    @error('new_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                            </div>

                            @hasrole('Operator')
                            <div class="col-md-6">
                                @else
                                <div class="col-md-12">
                                    @endhasrole
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Ulangi Password Baru</label>
                                        <input type="password" class="form-control  @error('new_password_confirmation') is-invalid @enderror" name="new_password_confirmation">
                                        @error('new_password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>


                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                </form>
            </div>
        </div>
    </div>
</div> <!-- end col -->

</div>


@endsection
@section('script')
<script src=" https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js">
</script>
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

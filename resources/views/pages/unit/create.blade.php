@extends('layouts.master')
@section('title') @lang('translation.starter') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data @endslot
@slot('title') Tambah Unit @endslot
@endcomponent
<div class="col-12">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Unit</h4>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="live-preview">
                <form action="{{ route('master.unit.store') }}" method="POST" class="row g-3">
                    @csrf

                    <div class="col-md-12">
                        <label for="fullnameInput" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control"
                            placeholder="Pusat Teknologi Informasi dan Pangkalan Data">

                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nama Pimpinan</label>
                        <input type="text" name="pimpinan" class="form-control" placeholder="Idria Maita S.Kom., M.Sc">

                        @error('pimpinan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">NIP Pimpinan</label>
                        <input type="number" name="nip" class="form-control" placeholder="197905132007102005">

                        @error('nip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="grid g-3 float-end">
                            <a href="{{ route('master.unit.index') }}" class="btn btn-light">Kembali</a>
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
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

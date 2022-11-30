@extends('layouts.master')
@section('title') Kategori @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data @endslot
@slot('title') Tambah Kategori @endslot
@endcomponent
<div class="col-12">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Unit</h4>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="live-preview">
                <form action="{{ route('master.kategori.store') }}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-12">
                        <label for="nama" class="form-label">Nama Kategori</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is-invalid @enderror" placeholder="Gedung"
                            value="{{ old('nama') }}">

                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div class="col-12">
                        <div class="grid g-3 float-end">
                            <a href="{{ route('master.kategori.index') }}" class="btn btn-light">Kembali</a>
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

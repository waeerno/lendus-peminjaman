@extends('layouts.master')
@section('title') @lang('translation.starter') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data @endslot
@slot('title') Tambah Asset @endslot
@endcomponent
<div class="col-12">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Asset</h4>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="live-preview">
                <form action="{{ route('master.asset.store') }}" method="POST" class="row g-3"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-4">
                        <label for="fullnameInput" class="form-label">Unit</label>
                        <select class="form-control @error('unit') is-invalid @enderror" name="unit" id="unit"
                            name="unit" required>
                            <option selected disabled>--- Pilih Unit ---</option>
                            @foreach ($unit as $item)
                            <option value="{{ $item->id }}" @selected(old('unit')==$item->id)>{{ $item->nama }}
                            </option>
                            @endforeach
                        </select>

                        @error('unit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is-invalid @enderror" placeholder="Laboratorium PTIPD"
                            value="{{ old('nama') }}">

                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <label for="fullnameInput" class="form-label">jumlah</label>
                        <input type="number" name="jumlah" id="jumlah"
                            class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}">

                        @error('jumlah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="fullnameInput" class="form-label">jenis</label>

                        <select class="form-control @error('jenis') is-invalid @enderror" name="jenis" id="jenis"
                            name="jenis" required>
                            <option selected disabled>--- Pilih Jenis ---</option>
                            <option value="Barang" @selected(old('jenis'))>Barang</option>
                            <option value="Jasa/Layanan" @selected(old('jenis'))>Jasa/Layanan</option>
                        </select>

                        @error('jenis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="fullnameInput" class="form-label">kategori</label>

                        <select class="form-control @error('kategori') is-invalid @enderror" name="kategori"
                            id="kategori" name="kategori" required>
                            <option selected disabled>--- Pilih Unit ---</option>
                            @foreach ($kategori as $item)
                            <option value="{{ $item->id }}" @selected(old('kategori')==$item->id)>{{ $item->nama }}
                            </option>
                            @endforeach
                        </select>

                        @error('kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="fullnameInput" class="form-label">foto</label>

                        <!-- File Input -->
                        <input type="file" class="form-control  @error('foto') is-invalid @enderror" name="foto"
                            value="{{ old('foto') }}">

                        @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="fullnameInput" class="form-label">Status</label>

                        <div class="form-check form-switch form-switch-lg" dir="ltr">
                            <input type="checkbox" class="form-check-input" id="is_active" @checked(old('is_active', 1))
                                name="is_active" onchange="changeStatus()">
                            <label class="form-check-label" for="is_active" id="label_status">Aktif</label>
                        </div>

                        @error('status')
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

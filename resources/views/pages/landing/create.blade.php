@extends('layouts.master')
@section('title') Peminjaman @endsection
@section('css')
<!-- Filepond css -->
<link href="{{ URL::asset('assets/libs/filepond/filepond.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Peminjaman @endslot
@slot('title') Peminjaman @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Buat Peminjaman</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('peminjaman-client.store') }}" method="POST">
                    @csrf

                    <div class="row g-3">
                        <div class="col-lg-12">
                            <h5 class="fw-semibold mb-3">Surat Permohonan Peminjaman</h5>
                            <input type="file" class="filepond filepond-input-multiple  @error('surat') is-invalid @enderror" name="surat" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="1">

                            @error('surat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <!--end col-->

                        {{-- start data Client --}}
                        <div class="col-lg-4">
                            <label for="productName" class="form-label">Nomor Induk</label>
                            <input type="text" class="form-control  @error('no_induk') is-invalid @enderror" name="no_induk" placeholder="NIM/NIP/NIK/NIDN">

                            @error('no_induk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="productName" class="form-label">Nama</label>
                            <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama" placeholder="Nama Lengkap">
                            @error('unit_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="productName" class="form-label">Nomor Wa</label>
                            <input type="tel" class="form-control  @error('no_wa') is-invalid @enderror" name="no_wa">
                            @error('no_wa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="productName" class="form-label">Email</label>
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email">

                            @error('wmail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="fullnameInput" class="form-label">Unit</label>
                            <select class="form-control @error('unit_id') is-invalid @enderror" id="unit_id" name="unit_id" required>
                                <option selected disabled>--- Pilih Unit ---</option>
                                @foreach ($unit as $item)
                                <option value="{{ $item->id }}" @selected(old('unit_id')==$item->id)>{{ $item->nama }}
                                </option>
                                @endforeach
                            </select>

                            @error('unit_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>

                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="fullnameInput" class="form-label">Jenis</label>
                            <select class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required>
                                <option selected disabled>--- Pilih Jenis ---</option>
                                <option value="Mahasiswa" @selected(old('jenis')=='Mahasiswa' )>Mahasiswa</option>
                                <option value="Pegawai" @selected(old('jenis')=='Pegawai' )>Pegawai</option>
                                <option value="Dosen" @selected(old('jenis')=='Dosen' )>Dosen</option>
                            </select>

                            @error('jenis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <!--end col-->
                        {{-- end data client --}}

                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="fullnameInput" class="form-label">Asset</label>
                            <select class="form-control @error('asset') is-invalid @enderror" id="asset" name="asset" required>
                                <option selected disabled>--- Pilih Unit ---</option>
                                @foreach ($asset as $item)
                                <option value="{{ $item->id }}" @selected(old('asset')==$item->id)>{{ $item->nama }}, <span class="text-primary">Jumlah Stok : {{ $item->jumlah }}</span>
                                </option>
                                @endforeach
                            </select>

                            @error('asset')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!--end col-->
                        <div class="col-lg-2">
                            <label for="itemPrice" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah">
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <label for="fullnameInput" class="form-label">Tanggal Pakai</label>
                            <input type="date" name="pakai" id="pakai" class="form-control @error('pakai') is-invalid @enderror" value="{{ old('pakai') }}" min="1">
                            @error('pakai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <!--end col-->
                        <div class="col-lg-2">
                            <label for="fullnameInput" class="form-label">Durasi </label>
                            <input type="number" name="durasi" id="durasi" class="form-control @error('durasi') is-invalid @enderror" value="{{ old('durasi') }}" min="1">
                            <span class="text-muted">Inputan Angka Dalam Hari</span>
                            @error('durasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <!--end col-->
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="text-end">
                                <a href="{{ route('landing') }}" class="btn btn-light">Kembali</a>
                                <button type="submit" class="btn btn-primary">Create Item</button>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

@endsection
@section('script')
<!-- filepond js -->
<script src="{{ URL::asset('assets/libs/filepond/filepond.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>
<!--nft create init js-->
<script src="{{ URL::asset('assets/js/pages/apps-nft-create.init.js') }}"></script>

<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

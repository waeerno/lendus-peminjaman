@extends('layouts.master')
@section('title') Client @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pengguna @endslot
@slot('title') Tambah Client @endslot
@endcomponent
<div class="col-12">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Client</h4>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="live-preview">
                <form action="{{ route('pengguna.client.update',$data->id) }}" method="post" class="row g-3">
                    @csrf
                    @method('PUT')

                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Nomor Induk</label>
                        <input type="number" name="no_induk" id="no_induk" class="form-control @error('no_induk') is-invalid @enderror" value="{{ old('no_induk') ?? $data->no_induk }}">
                        <small>NIM/NIP/NIK</small>
                        @error('no_induk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') ?? $data->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Nomor Wa</label>
                        <input type="number" name="no_wa" id="no_wa" class="form-control @error('no_wa') is-invalid @enderror" value="{{ old('no_wa') ?? $data->no_wa }}">
                        @error('no_wa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $data->email }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Unit/Fakultas</label>
                        <select class="form-control @error('unit_id') is-invalid @enderror" id="unit_id" name="unit_id" required>
                            <option selected disabled>--- Pilih Unit ---</option>
                            @foreach ($unit as $item)
                            <option value="{{ $item->id }}" @selected(old('unit_id')==$item->id || $item->id == $data->unit_id)>{{ $item->nama }}
                            </option>
                            @endforeach
                        </select>

                        @error('unit_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Jenis</label>
                        <select class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required>
                            <option selected disabled>--- Pilih Jenis ---</option>
                            <option value="Mahasiswa" @selected(old('jenis')==$data->jenis || $data->jenis == 'Mahasiswa')>Mahasiswa</option>
                            <option value="Pegawai" @selected(old('jenis')==$data->jenis || $data->jenis == 'Pegawai')>Pegawai</option>
                            <option value="Dosen" @selected(old('jenis')==$data->jenis || $data->jenis == 'Dosen')>Dosen</option>
                        </select>

                        @error('jenis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <div class="grid g-3 float-end">
                            <a href="{{ route('pengguna.client.index') }}" class="btn btn-light">Kembali</a>
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

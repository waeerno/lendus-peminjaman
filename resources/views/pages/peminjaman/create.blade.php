@extends('layouts.master')
@section('title') Peminjaman @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data @endslot
@slot('title') Buat Data Peminjaman @endslot
@endcomponent
<div class="col-12">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Peminjaman</h4>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="live-preview">
                <form action="{{ route('peminjaman.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Pengguna</label>
                        <select class="form-control @error('pengguna') is-invalid @enderror" id="pengguna" name="pengguna" required>
                            <option selected disabled>--- Pilih Pengguna ---</option>
                            @forelse ($user as $item)
                            <option value="{{ $item->id }}" @selected(old('pengguna')==$item->id)>{{ $item->nama }}
                            </option>
                            @empty
                            <option disabled>Belum ada data silahkan tambahkan terlebih dahulu</option>
                            @endforelse
                        </select>
                        <span class="text-muted">Jika tidak tersedia nama yang dicari silahkan di add terlebih dahulu di
                            menu
                            pengguna</span>

                        @error('pengguna')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>



                    <div class="col-md-4">
                        <label for="fullnameInput" class="form-label">Tanggal Pakai</label>
                        <input type="date" name="pakai" id="pakai" class="form-control @error('pakai') is-invalid @enderror" value="{{ old('pakai') }}" min="1">
                        @error('pakai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <label for="fullnameInput" class="form-label">Durasi </label>
                        <input type="number" name="durasi" id="durasi" class="form-control @error('durasi') is-invalid @enderror" value="{{ old('durasi') }}" min="1">
                        <span class="text-muted">Inputan Angka Dalam Hari</span>
                        @error('durasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-4">
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

                    <!--TODO: get lopping select data by jumlah at asset selected -->
                    <div class="col-md-2">
                        <label for="fullnameInput" class="form-label">{{ __('jumlah') }}</label>

                        {{-- <select class="form-control" name="jumlah" id="jumlah"></select> --}}
                        <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}" min="1">

                        @error('jumlah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Surat</label>
                        <input type="file" class="form-control  @error('surat') is-invalid @enderror" name="surat" value="{{ old('surat') }}">

                        @error('surat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <div class="grid g-3 float-end">
                            <a href="{{ route('peminjaman.index') }}" class="btn btn-light">Kembali</a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#asset').on('change', function() {
            var assetID = $(this).val();
            if (assetID) {
                $.ajax({
                    url: '/asset/' + assetID
                    , type: "GET"
                    , data: {
                        "_token": "{{ csrf_token() }}"
                    }
                    , dataType: "json"
                    , success: function(data) {
                        if (data) {
                            $('#jumlah').empty();
                            $('#jumlah').append('<option hidden>Pilih Jumlah</option>');
                            $.each(data, function(key, data) {
                                $('select[name="data"]').append('<option value="' + key + '">' + data.jumlah + '</option>');
                            });
                        } else {
                            $('#jumlah').empty();
                        }
                    }
                });
            } else {
                $('#jumlah').empty();
            }
        });
    });

</script>
@endsection

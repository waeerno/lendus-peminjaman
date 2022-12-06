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
                <form action="{{ route('peminjaman.store') }}" method="POST" class="row g-3"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Pengguna</label>
                        <select class="form-control @error('pengguna') is-invalid @enderror" id="pengguna"
                            name="pengguna" required>
                            <option selected disabled>--- Pilih Pengguna ---</option>
                            @foreach ($user as $item)
                            <option value="{{ $item->id }}" @selected(old('pengguna')==$item->id)>{{ $item->name }}
                            </option>
                            @endforeach
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
                        <input type="date" name="pakai" id="pakai"
                            class="form-control @error('pakai') is-invalid @enderror" value="{{ old('pakai') }}"
                            min="1">
                        @error('pakai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <label for="fullnameInput" class="form-label">Durasi </label>
                        <input type="number" name="durasi" id="durasi"
                            class="form-control @error('durasi') is-invalid @enderror" value="{{ old('durasi') }}"
                            min="1">
                        <span class="text-muted">Inputan Angka Dalam Hari</span>
                        @error('durasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="fullnameInput" class="form-label">Asset</label>
                        <select class="form-control @error('asset') is-invalid @enderror" id="category" name="asset"
                            required>
                            <option selected disabled>--- Pilih Unit ---</option>
                            @foreach ($asset as $item)
                            <option value="{{ $item->id }}" @selected(old('asset')==$item->id)>{{ $item->nama }}
                            </option>
                            @endforeach
                        </select>

                        @error('asset')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <label for="fullnameInput" class="form-label">Jumlah</label>
                        <select class="form-control" name="course" id="course"></select>

                        @error('jumlah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <label for="fullnameInput" class="form-label">Surat</label>

                        <input type="file" class="form-control  @error('surat') is-invalid @enderror" name="surat"
                            value="{{ old('surat') }}">

                        @error('surat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <div class="grid g-3 float-end">
                            <a href="{{ route('master.asset.index') }}" class="btn btn-light">Kembali</a>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
            $('#category').on('change', function() {
               var categoryID = $(this).val();
               if(categoryID) {
                   $.ajax({
                       url: '/getJumlah/'+categoryID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#course').empty();
                            $('#course').append('<option hidden>Choose Course</option>');
                            $.each(data, function(key, course){
                                $('select[name="course"]').append('<option value="'+ key +'">' + course.name+ '</option>');
                            });
                        }else{
                            $('#course').empty();
                        }
                     }
                   });
               }else{
                 $('#course').empty();
               }
            });
            });
</script>
@endsection

@extends('layouts.master')
@section('title', 'Tambah Unit')

@section('content')
@component('components.breadcrumb')
@slot('li_1')
Data Master
@endslot
@slot('li_2')
Role
@endslot
@slot('title')
Edit Role
@endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('role.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Roles Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $data->name }}" required>

                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="permission" class="form-label">Permissions</label>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach ($permissions as $item)
                            <div class="form-check form-check-outline form-check-primary mb-3">
                                <input class="form-check-input" type="checkbox" value="{{ $item->name }}" name="permissions[]" id="formCheck{{ $item->id }}" @foreach($data->permissions as $data)
                                {{ $item->id == $data->id ? 'checked' : '' }}
                                @endforeach>
                                <label class="form-check-label" for="formCheck{{ $item->id }}">
                                    {{ $item->name }}
                                </label>
                            </div>
                            @endforeach
                        </div>

                        @error('permission')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="grid g-3 float-end">
                        <a href="{{ route('role.index') }}" class="btn btn-light">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

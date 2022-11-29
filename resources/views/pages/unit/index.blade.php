@extends('layouts.master')
@section('title') @lang('translation.starter') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data @endslot
@slot('title') Unit @endslot
@endcomponent
<div class="table-responsive">
    <div class="float-end pb-4">
        <a href="{{ route('master.unit.create') }}" type="button"
            class="btn btn-primary btn-label waves-effect waves-light">
            <i class="ri-add-fill label-icon align-middle fs-16 me-2"></i> Tambah
        </a>
    </div>
    <table class="table align-middle mb-0">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Pimpinan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr>
                <th scope="row">{{ $loop->index +1 }}</th>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->pimpinan }} <span>{{ $item->nip }}</span></td>
                <td>
                    <a href="{{ route('master.unit.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $item->id }})">
                        <form action="{{ route('master.unit.destroy', $item->id) }}" method="POST"
                            id="delete-{{ $item->id }}">
                            @csrf
                            @method('DELETE')
                        </form>
                        Hapus
                    </a>
                </td>
            </tr>
            @empty

            @endforelse
            <tr>
                <td colspan="4" class="text-center"><span class="text-danger">Belum Ada Data</span></td>
            </tr>
        </tbody>
    </table>
    <!-- end table -->
</div>
<!-- end table responsive -->
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

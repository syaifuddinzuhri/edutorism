@extends('admins.layouts.main')

@section('title', 'List Alur Proses')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Alur Proses</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">List Alur Proses</h6>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3 d-flex align-items-center justify-content-between">
                        <h6 class="text-white text-capitalize ps-3">Alur Proses</h6>
                        <a href="{{ route('flow.create') }}" class="btn btn-sm btn-light m-0 me-3">Tambah Alur Proses</a>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                                        Urutan</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                                        Judul</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($data) > 0)
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-sm">{{ $item->number }}</span>
                                            </td>
                                            <td class="align-middle">
                                                <span class="text-secondary text-sm">{{ $item->title }}</span>
                                            </td>
                                            <td class="align-middle text-center d-flex justify-content-center">
                                                <a href="{{ route('flow.edit', $item->id) }}" class="btn btn-info mb-0"
                                                    data-toggle="tooltip" data-original-title="Edit">
                                                    Edit
                                                </a>
                                                <form action="{{ route('flow.destroy', $item->id) }}" method="POST"
                                                    class="ms-3">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger mb-0" data-toggle="tooltip"
                                                        data-original-title="Hapus">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="align-middle text-center" colspan="3">
                                            <span class="text-secondary text-sm">Data tidak ditemukan</span>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admins.layouts.main')

@section('title', 'Edit Layanan')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Layanan</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Edit Layanan</h6>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3 d-flex align-items-center justify-content-between">
                        <h6 class="text-white text-capitalize ps-3">Edit Layanan</h6>
                        <a href="{{ route('service.index') }}" class="btn btn-sm btn-outline-light m-0 me-3">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('service.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="mb-0">Nama Layanan</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" name="name" class="form-control" required
                                        value="{{ $data->name }}" placeholder="Nama Layanan">
                                </div>
                                <label for="" class="mb-0">Link Youtube</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" name="youtube" class="form-control" value="{{ $data->youtube }}" placeholder="Link Youtube">
                                </div>
                                <label for="" class="mb-0">Icon</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="file" name="icon" class="form-control">
                                </div>
                                <label for="" class="mb-0">File Silabus</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-0">Deskripsi</label>
                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="20"
                                        placeholder="Masukkan Deskripsi" required>{{ $data->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

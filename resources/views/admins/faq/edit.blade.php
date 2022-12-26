@extends('admins.layouts.main')

@section('title', 'Edit FAQ')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">FAQ</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Edit FAQ</h6>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3 d-flex align-items-center justify-content-between">
                        <h6 class="text-white text-capitalize ps-3">Edit FAQ</h6>
                        <a href="{{ route('faq.index') }}" class="btn btn-sm btn-outline-light m-0 me-3">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ route('faq.update', $data->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="" class="mb-0">Judul</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" name="title" class="form-control" required placeholder="Judul" value="{{ $data->title }}">
                                </div>
                                <label for="" class="mb-0">Urutan</label>
                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="20"
                                        placeholder="Masukkan Deskripsi" required>{{ $data->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

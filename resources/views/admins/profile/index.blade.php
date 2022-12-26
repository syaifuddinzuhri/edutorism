@extends('admins.layouts.main')

@section('title', 'Profile')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profil</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Profil</h6>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Data Profil</h6>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    @if ($data && $data->image)
                                        <div class="col-md-4">
                                            <img src="{{ asset('uploads/images/' . $data->image) }}" class="img-fluid"
                                                alt="">
                                        </div>
                                    @endif
                                    <div class="col-md-8">
                                        <label for="" class="mb-0">Gambar</label>
                                        <div class="input-group input-group-outline my-3">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-0">Deskripsi</label>
                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="20"
                                        placeholder="Masukkan Deskripsi" required>{{ $data->description ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

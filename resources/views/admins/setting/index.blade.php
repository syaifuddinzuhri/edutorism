@extends('admins.layouts.main')

@section('title', 'Pengaturan')


@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Pengaturan</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Pengaturan</h6>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Data Pengaturan</h6>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('setting.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="mb-0">Email</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="email" name="email" class="form-control" required placeholder="Email" value="{{ $data->email ?? '' }}">
                                </div>
                                <label for="" class="mb-0">WhatsApp</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="number" name="whatsapp" class="form-control" required
                                        placeholder="Whatsapp" value="{{ $data->whatsapp ?? '' }}">
                                </div>
                                <label for="" class="mb-0">Instagram</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" name="instagram" class="form-control" placeholder="Username Instagram" value="{{ $data->instagram ?? '' }}">
                                </div>
                                {{-- <label for="" class="mb-0">Facebook</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" name="facebook" class="form-control" placeholder="Username Facebook" value="{{ $data->facebook ?? '' }}">
                                </div> --}}
                                <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="mb-0">Alamat</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" name="address" class="form-control" placeholder="Alamat" value="{{ $data->address ?? '' }}" required>
                                </div>
                                <label for="" class="mb-0">Judul Jumbotron</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" name="hero_title" class="form-control" placeholder="Judul Jumbotron" value="{{ $data->hero_title ?? '' }}" required>
                                </div>
                                <label for="" class="mb-0">Sub Judul Jumbotron</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" name="hero_subtitle" class="form-control" placeholder="Sub Judul Jumbotron" value="{{ $data->hero_subtitle ?? '' }}" required>
                                </div>
                                <label for="" class="mb-0">Link Pendaftaran</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" name="register_link" class="form-control" placeholder="Link Pendaftaran" value="{{ $data->register_link ?? '' }}" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

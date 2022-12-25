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
                <div class="card-body px-0 pb-2">
                </div>
            </div>
        </div>
    </div>
@endsection

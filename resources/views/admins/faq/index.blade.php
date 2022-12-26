@extends('admins.layouts.main')

@section('title', 'List FAQ')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">FAQ</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">List FAQ</h6>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Data FAQ</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                                        No</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                                        Judul</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                                        Deskripsi</th>
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
                                                <span class="text-secondary text-xxs">1</span>
                                            </td>
                                            <td class="align-middle">
                                                <span class="text-secondary text-sm">lorem5Lorem ipsum dolor sit amet
                                                    consectetur
                                                    adipisicing elit. Reprehenderit, voluptatem.</span>
                                            </td>
                                            <td class="align-middle">
                                                <span class="text-secondary text-sm">lorem5Lorem ipsum dolor sit amet
                                                    consectetur
                                                    adipisicing elit. Reprehenderit, voluptatem.</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="javascript:;" class="btn btn-info mb-0" data-toggle="tooltip"
                                                    data-original-title="Edit">
                                                    Edit
                                                </a>
                                                <a href="javascript:;" class="btn btn-danger mb-0" data-toggle="tooltip"
                                                    data-original-title="Hapus">
                                                    Hapus
                                                </a>
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

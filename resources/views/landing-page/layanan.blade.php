@extends('landing-page.layouts.main')

@section('content')
    <main id="main" class="my-5">
        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Mengapa harus memilih Edutourism?</h2>
                    <p>BANYAK LAYANAN YANG KAMI SEDIAKAN</p>
                </header>

                <div class="row">
                    @if (count($data) > 0)
                        @foreach ($data as $item)
                            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                <a href="{{ route('detailLayanan', $item->id) }}">
                                    <div class="box">
                                        @if ($item->icon)
                                            <img src="{{ asset('uploads/icon') }}/{{ $item->icon }}" class="img-fluid"
                                                alt="">
                                        @else
                                            <img src="{{ asset('landing-page') }}/assets/img/values-1.png" class="img-fluid"
                                                alt="">
                                        @endif
                                        <h3>{{ $item->name }}</h3>
                                        <p class="text-dark">{{ Str::limit($item->description, 60) }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12 text-center">
                            <p class="text-danger">Opps! Data belum ada. Silahkan hubungi admin!</p>
                        </div>
                    @endif
                </div>

            </div>

        </section><!-- End Values Section -->
    </main>
@endsection

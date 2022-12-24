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

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('detailLayanan', 'layanan-baru') }}">
                            <div class="box">
                                <img src="{{ asset('landing-page') }}/assets/img/values-1.png" class="img-fluid"
                                    alt="">
                                <h3>Gratis Konsultasi</h3>
                                <p class="text-dark">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit.
                                    Et veritatis id.
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <a href="{{ route('detailLayanan', 'layanan-baru') }}">
                            <div class="box">
                                <img src="{{ asset('landing-page') }}/assets/img/values-2.png" class="img-fluid"
                                    alt="">
                                <h3>Tarif Sesuai Standard Daerah</h3>
                                <p class="text-dark">Repudiandae amet nihil natus in distinctio suscipit id. Doloremque
                                    ducimus ea sit non.
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <a href="{{ route('detailLayanan', 'layanan-baru') }}">
                            <div class="box">
                                <img src="{{ asset('landing-page') }}/assets/img/values-3.png" class="img-fluid"
                                    alt="">
                                <h3>Pendampingan dan Pengawasan Pekerjaan</h3>
                                <p class="text-dark">Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid
                                    quidem commodi.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </section><!-- End Values Section -->
    </main>
@endsection

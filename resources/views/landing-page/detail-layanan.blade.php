@extends('landing-page.layouts.main')

@section('content')
    <main id="main" class="my-5">
        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>{{ $data->name }}</p>
                </header>

                <div class="row">
                    <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                        <p class="text-dark">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit.
                            Et veritatis id.
                        </p>
                        @if ($data->file)
                            <a href="{{ asset('uploads/file/' . $data->file) }}" class="btn btn-success" target="_blank">Download Silabus</a>
                        @endif
                        @if ($data->youtube)
                            <a href="{{ $data->youtube }}" class="btn btn-danger" target="_blank">Lihat Youtube</a>
                        @endif
                        <a href="" class="btn btn-primary">Daftar Sekarang</a>
                    </div>
                </div>

            </div>

        </section><!-- End Values Section -->
    </main>
@endsection

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{ asset('uploads/images/' . $setting->logo) }}" alt="">
                    </a>
                    <p>{{ $profile->description ?? '' }}</p>
                    <div class="social-links mt-3">
                        {{-- <a href="{{ $setting && $setting->facebook ? '' : '' }}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a> --}}
                        <a href="{{ $setting && $setting->whatsapp ? 'https://wa.me/' . $setting->whatsapp : '' }}" target="_blank" class="facebook"><i class="bi bi-whatsapp"></i></a>
                        <a href="{{ $setting && $setting->instagram ? 'https://www.instagram.com/' . $setting->instagram : '' }}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        {{ $setting->address ?? '' }}
                        <br>
                        <strong>Phone:</strong> {{ $setting->whatsapp ?? '' }}<br>
                        <strong>Email:</strong> {{ $setting->email ?? '' }}<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Edutourism</span></strong>. All Rights Reserved
        </div>
        {{-- <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> --}}
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('landing-page') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{ asset('landing-page') }}/assets/vendor/aos/aos.js"></script>
<script src="{{ asset('landing-page') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('landing-page') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('landing-page') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ asset('landing-page') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('landing-page') }}/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{ asset('landing-page') }}/assets/js/main.js"></script>

</body>

</html>

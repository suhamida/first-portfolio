<!DOCTYPE html>
<html lang="en">

@include('front.includes.head')
<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
@include('front.includes.header')
<!-- End Header -->


@yield('body')
<!-- End #main -->

<!-- ======= Footer ======= -->
@include('front.includes.footer')
<!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('/')}}assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{asset('/')}}assets/vendor/aos/aos.js"></script>
<script src="{{asset('/')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('/')}}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('/')}}assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('/')}}assets/vendor/typed.js/typed.umd.js"></script>
<script src="{{asset('/')}}assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="{{asset('/')}}assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('/')}}assets/js/main.js"></script>

</body>

</html>

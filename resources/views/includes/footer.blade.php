@php
$logo=config('visitech.logo');
$footer=config('visitech.footer');
@endphp
<footer class="text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ $logo }}" class="footer-brand" alt="">
                        <p class="pt-4">by PT. Wibawa Cahaya Utama</p>
                        <a href="{{ $footer['socmed']['linkedin'] }}" target="_blank" rel="noopener noreferrer"
                            class="fa-stack" style="vertical-align: top;">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
                        </a>
                        <a href="#" class="fa-stack" style="vertical-align: top;">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                        </a>
                        <a href="{{ $footer['socmed']['ig'] }}" target="_blank" rel="noopener noreferrer"
                            class="fa-stack" style="vertical-align: top;">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                        </a>
                    </div>
                    <div class="col-md-3 offset-md-3 mt-4 mt-md-0">
                        <h5 class="footer-heading mb-4">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a data-toggle="collapse" href="#collape-product" role="button" aria-expanded="false"
                                    aria-controls="collape-product">Our Products
                                </a>
                            </li>
                            <ul class="collapse list-unstyled pl-2" style="font-size:14px" id="collape-product">
                                <li><a href="/visi-powerwall">Visi Powerwall</a></li>
                                <li><a href="/visi-smart-socket">Visi Smart Socket</a></li>
                            </ul>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/news">News</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
                <div class="row">
                    <div class="col-md-10 offset-md-2">
                        <div class="mb-4 contact-section">
                            <h5 class="footer-heading">Contact Us</h5>
                            <div class="d-flex w-100 mt-4 align-items-center">
                                <i class="fas fa-map-marker-alt mr-3"></i>
                                <p>
                                    {{ $footer['contact']['address'] }}
                                </p>
                            </div>
                            <div class="d-flex w-100 align-items-center">
                                <i class="fab fa-whatsapp mr-3"></i>
                                <a href="{{ $footer['contact']['wa'] }}" target="_blank" rel="noopener noreferrer">
                                    {{ $footer['contact']['wa'] }}
                                </a>
                            </div>
                            @foreach ($footer['contact']['email'] as $value)
                                <div class="d-flex align-items-center w-100">
                                    <i class="far fa-envelope mr-3"></i>
                                    <a href="mailto:{{ $value }}" target="_blank" rel="noopener noreferrer">
                                        {{ $value }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-md-5 pt-0 mt-md-5 mt-0 text-md-center text-left">
            <div class="nexus-text my-4 col-12">This Website is supported by New Energy Nexus as a part of our effort
                to help renewable energy startup grow.</div>
            <div class="nexus-logo-container mb-2 px-3 col-12">
                <a href="https://www.newenergynexus.com/region/indonesia/" target="_blank" rel="noopener noreferrer">
                    <img src="https://ik.imagekit.io/vp9bgybmpm/NEN-logo-05_kKN0vpM1OIEf.png" class="logo-nexus"
                        alt="logo_nexus">
                </a>
            </div>
            <div class="col-md-12">
                <div class="pt-3">
                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved | This website is made with <i class="fas fa-heart"></i> by <a
                            href="https://Kadosoft.co.id" target="_blank">KadoSoft</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script>
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $(document).on('click', 'a[href^="#"]', function(event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
        });
        
        $('.navbar-toggler').on('click', function(event) {
            $('.navbar-toggler span').fadeOut("fast", "linear", function() {
                $('.navbar-toggler span').toggleClass("fa-bars");
                $('.navbar-toggler span').toggleClass("fa-times");
                $('.navbar-toggler span').fadeIn("fast", "linear");
                $('#navbar-collapse').toggleClass("navbar-mob");
            })
        });
    });

</script>

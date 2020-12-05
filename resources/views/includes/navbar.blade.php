@php
$logo=config('visitech.logo');
@endphp
<div class="navbar-visitech">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar px-0 navbar-expand-lg navbar-light text-uppercase">
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="fas fa-bars"></span>
                    </button>
                    <a class="btn fade-bg btn-contact" href="/contact-us">Contact Us</a>
                    <a class="navbar-brand-mob" href="/"><img src="{{ $logo }}" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item d-flex dropdown">
                                <a class="nav-link d-flex align-items-center" href="#" ype="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Products
                                    <i class="fas fa-chevron-down ml-2" style="font-size:20px"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/visi-powerwall">Visi Powerwall</a>
                                    <a class="dropdown-item" href="/visi-smart-socket">Visi Smart Socket</a>
                                </div>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link d-flex align-items-center" href="/about-us">About Us</a>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link d-flex align-items-center" href="/news">News</a>
                            </li>
                        </ul>
                    </div>
                    <a class="navbar-brand" href="/"><img src="{{ $logo }}" alt=""></a>
                </nav>
            </div>
        </div>
    </div>
</div>

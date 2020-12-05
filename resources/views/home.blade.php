<!DOCTYPE html>
<html lang="en">

<head>
    @include('/includes/head')
</head>
<style>
    .visi-section .subtitle {
        font-size: 16px;
    }

    .link-title {
        font-size: 17px;
        font-weight: 700;
        text-decoration: none;
    }

    .link-title:hover {
        text-decoration: none;
    }

    .fa-arrow-right:before {
        margin-left: -0.75rem;
        opacity: 0;
        transition: opacity 0.25s;
    }

    .fa-chevron-right:before {
        opacity: 1;
    }

    .link-title:hover .fa-arrow-right:before {
        opacity: 1;
        color: --blue;
    }

    .link-title:hover .fa-chevron-right:before {
        opacity: 0;
    }

    .icon-bg {
        background: white;
        padding: 5px;
        border-radius: 2rem;
        width: 35px;
    }

</style>

<body>
    @include('includes/navbar')
    <div class="site-blocks-cover d-flex align-items-center mb-5" style="background-image: url('{{ $bg_1 }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mt-md-5 text-center text-white">
                    <h1>
                        Clean Energy & Smart Technologies <br> for Your Home
                    </h1>
                    <p>Living Sustainably with Smart Technologies & Clean Energy</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container content">
        <div class="quote text-center mb-section">
            <p class="black">
                Still having trouble with blackouts or high electricity cost? Visi have the perfect solution for you.
                We strive to help you reduce energy waster and become more energy independent with our
                innovative technologies. We provide you with affordable renewable energy access, solution for
                energy efficiency & reducing energy waster. Enjoy lower energy cost in the long run
                and live more sustainably with us.
            </p>
        </div>
        <div class="visi-section black mb-section">
            <div class="row align-items-center mb-section">
                <div class="col-md-6">
                    <h2 class="mb-md-4">
                        <i class="fas fa-leaf blue mr-2"></i> Clean Energy
                    </h2>
                    <p class="subtitle mb-md-5">
                        Unleash the potential of renewable energy and experience living more sustainably.
                    </p>
                    <a href="#" class="link-title blue">
                        <img src="{{ $icon_pwrbox }}" class="mini-icon mr-2" alt="icon_power_box">
                        Visi Powerwall
                        <i class="fas fa-chevron-right ml-2"></i>
                        <i class="fas fa-arrow-right blue"></i>
                    </a>
                    <p class="mt-md-2">
                        Easy way to harness solar energy, whenever
                        & wherever you are, even without existing power grid.
                    </p>
                </div>
                <div class="col-md-6 pl-md-5 mt-3 mt-md-0">
                    <div class="image-bg" style="background-image: url('{{ $pwrwall }}')">
                    </div>
                </div>
            </div>
            <div class="row  align-items-center">
                <div class="col-md-6 pr-md-5 mb-3 mb-md-0">
                    <div class="image-bg" style="background-image: url('{{ $smartsckt }}')">
                    </div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <h2 class="mb-md-4">
                        <i class="fas fa-home blue mr-2"></i> Smart Homes
                    </h2>
                    <p class="subtitle mb-md-5">
                        Increase your control and simplify your life using futuristic smart technologies.
                    </p>
                    <a href="#" class="link-title blue">
                        <img src="{{ $icon_pwrbox }}" class="mini-icon mr-2" alt="icon_power_box">
                        Visi Smart Socket
                        <i class="fas fa-chevron-right ml-2"></i>
                        <i class="fas fa-arrow-right blue "></i>
                    </a>
                    <p class="mt-md-2">
                        Allow you the flexibility to remotely control and monitor electronic devices, anytime,
                        anywhere.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-blocks-cover d-flex align-items-center py-4 py-md-0 text-white"
        style="background-image: url('{{ $bg_2 }}')">
        <div class="overlay"></div>
        <div class="container content">
            <div class="row">
                <div class="col-md-7">
                    <p>Innovate In</p>
                    <h3>
                        Optimising Energy Efficiency, Smart Control & Monitor System and Renewable Energy
                    </h3>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-5">
                    <p>
                        To make a breakthrough in Clean and
                        Smart Technology from individuals,
                        communities, industry to maximize
                        potential in the development of green
                        and smart technology
                    </p>
                    <a href="/about-us" class="btn btn-visitech">
                        About Us
                    </a>
                </div>
                <div class="col-md-5 offset-md-2 mt-4 mt-md-0">
                    <a href="#" class="link-title blue">
                        <img src="{{ $icon_pwrbox }}" class="mini-icon icon-bg mr-2" alt="icon_power_box">
                        Our Vision
                        <i class="fas fa-chevron-right ml-2"></i>
                        <i class="fas fa-arrow-right blue "></i>
                    </a>
                    <p>See more about the Vision of Visi</p>
                    <a href="#" class="link-title blue">
                        <img src="{{ $icon_pwrbox }}" class="mini-icon icon-bg mr-2" alt="icon_power_box">
                        Our Team
                        <i class="fas fa-chevron-right ml-2"></i>
                        <i class="fas fa-arrow-right blue "></i>
                    </a>
                    <p>See more about the team and how you can elaborate</p>
                </div>
            </div>
        </div>
    </div>
    @include('includes/footer')
</body>

</html>

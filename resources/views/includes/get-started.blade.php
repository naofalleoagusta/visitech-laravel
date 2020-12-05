@php
$bg=config('visitech.bg_contact');
@endphp

<div class="site-blocks-cover get-started d-flex align-items-center py-4 py-md-0 text-white"
    style="background-image: url('{{ $bg }}')">
    <div class="overlay"></div>
    <div class="container content">
        <div class="row align-items-center">
            <div class="col-md-8  text-white">
                <p>Get Started</p>
                <h2>So, Let's do this, Ask More.</h2>
            </div>
            <div class="col-md-4 text-white mt-3 mt-md-0">
                    <a href="/contact-us" class="btn btn-visitech float-md-right">
                        Contact Us
                    </a>
            </div>
        </div>
    </div>
</div>

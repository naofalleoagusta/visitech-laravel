<!DOCTYPE html>
<html lang="en">

<head>
    @include('/includes/head')
</head>
<style>
    .about-us img {
        width: 100%;
    }



    @media (min-width: 768px) {
        .our-vision-section .section-header {
            text-align: center
        }

        .our-vision-section p {
            padding: 0 15%;
        }
    }

    @media (max-width: 767px) {
        .our-vision-section .section-header {
            text-align: left
        }
    }

    .our-core-section ul {
        list-style-type: none;
        padding-inline-start: 0;
    }

    .our-core-section i {
        color: #27aae1;
    }

    .card-body p {
        font-weight: 700;
        font-size: 15px;
        margin-top: 0.25rem;
        margin-bottom: 0;
    }

    .card-body small {
        font-size: 12px;
        color: #797979;
    }

    .card {
        border: none;
        border-radius: none;
    }

    .card-body {
        padding: 0.75rem;
        background-color: #f0f0f0;
    }

</style>

<body>
    @include('includes/navbar')
    <div class="site-blocks-cover d-flex align-items-center mb-5 py-4 py-md-0 text-white"
        style="background-image: url('{{ $bg_2 }}')">
        <div class="overlay"></div>
        <div class="container content">
            <div class="row">
                <div class="col-xl-12 mt-md-5 text-center text-white">
                    <p>
                        {{ $about['text']['title_mini_goal'] }}
                    </p>
                    <h1 style="margin-bottom:1rem;">
                        {{ $about['text']['title_big_goal'] }}
                    </h1>
                    <p>
                        {{ $about['text']['title_closing_goal'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container content black about-us">
        <div class="quote text-center mb-section">
            <p>
                {{ $about['text']['quote'] }}
            </p>
        </div>
        <div class="row mb-section who-we-are-section align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <img src="{{ $about['img']['about_who'] }}" alt="who we are">
            </div>

            <div class="col-md-6">
                <h2>Who We Are</h2>
                <p>
                    {{ $about['text']['who_we_are'] }}
                </p>
            </div>
        </div>
        <div class="row mb-section our-vision-section ">
            <div class="col-12 section-header mb-3">
                <h2>Our Vision</h2>
                <p>
                    "{{ $about['text']['our_vision'] }}"
                </p>
            </div>
            @foreach ($about['text_items']['our_vision'] as $key => $text)
                <div class="col-md-4 mb-3 mb-md-0">
                    <h2 class="blue">{{ $key + 1 < 10 ? '0' . ($key + 1) : $key + 1 }}</h2>
                    <h4>
                        {{ $text }}
                    </h4>
                </div>
            @endforeach
        </div>
        <div class="mb-section row our-core-section align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ $about['img']['our_core'] }}" alt="who we are">
            </div>
            <div class="col-md-6">
                <h2>Our Core</h2>
                <ul class="mb-4">
                    @foreach ($about['text_items']['our_core'] as $key => $value)
                        <li class="mb-1"><i class="far fa-circle mr-3"></i>{{ $value }}</li>
                    @endforeach
                </ul>
                <p class="mb-4">
                    {{ $about['text']['our_core_1'] }}
                </p>
                <p>
                    {{ $about['text']['our_core_2'] }}
                </p>
            </div>
        </div>
        <div class="mb-section row our-team-section justify-content-center">
            <div class="col-12 text-center mb-5">
                <h2>Meet our team</h2>
                <p>Our team is filled with ambitious, self-driven professionals in their respective expertise</p>
            </div>
            <div class="col-10">
                <div class="row">

                    @foreach ($members as $member)
                        @php
                        $photo=json_decode(trim($member->getThumbs200ForCollection('member_media')->toJson(),
                        '[]'),true);
                        @endphp
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img class="card-img-top"
                                    src="{{ empty($photo['thumb_url']) ? $about['img']['anon'] : $photo['thumb_url'] }}"
                                    alt="img of {{ $member->name }}">
                                <div class="card-body">
                                    <p>{{ $member->name }}</p>
                                    <small>{{ $member->position }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($about['members'] as $member)
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('includes/get-started')
    @include('includes/footer')
</body>

</html>

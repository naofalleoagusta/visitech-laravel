<!DOCTYPE html>
<html lang="en">

<head>
    @include('/includes/head')
</head>
<style>
    .news-detail-section p {
        font-size: 15px;
    }

    .news-detail-section a {
        font-size: 15px;
        color: black;
        transition: color 0.5s;
    }

    .news-detail-section a:hover {
        text-decoration: none;
    }

    .news-detail-section img {
        width: 100%;
    }

</style>

<body>
    @include('includes/navbar')
    <div class="site-blocks-cover banner d-flex align-items-center mb-section py-4 py-md-0 text-white"
        style="background-image: url('{{ $stock_img['banner'] }}')">
        <div class="overlay"></div>
        <div class="container content">
            <div class="row align-items-center text-center">
                <div class="col-12">
                    <p>News</p>
                    <h2>{{ $news[0]->title }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container content mb-section news-detail-section black">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-12 mb-4">

                        @php
                        $img=isset($news[0]->getMedia("gallery")[0])?$news[0]->getMedia("gallery")[0]->getUrl():"";
                        @endphp
                        @if (!empty($img))
                            <img class="mb-3" src="{{ $img }}" alt="">
                        @endif
                        <h4>{{ $news[0]->title }}</h4>
                        <small>by Admin | {{ date_format($news[0]->updated_at, 'j F Y') }}</small>
                    </div>
                    <div class="col-12">
                        {!! $news[0]->body !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h5>Recent Post</h5>
                    </div>
                    <div class="col-12">
                        @foreach ($recent_news as $recent_new)
                            <div class="row align-items-center mb-2">
                                @php
                                $photo=json_decode(trim($recent_new->getThumbs200ForCollection('gallery')->toJson(),'[]'),true);
                                @endphp
                                <div class="col-4">
                                    <img src="{{ empty($photo['thumb_url']) ? $stock_img['no_img'] : $photo['thumb_url'] }}"
                                        alt="image of {{ $recent_new->title }}">
                                </div>
                                <div class="col-8 ">
                                    <h5 style="margin:0"><a
                                            href="/news/{{ $recent_new->slug }}">{{ $recent_new->title }}</a></h5>
                                    <p style="font-weight: 300;margin:0;">
                                        {{ date_format($recent_new->updated_at, 'j F Y') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes/footer')
</body>

</html>

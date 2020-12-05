<!DOCTYPE html>
<html lang="en">

<head>
    @include('/includes/head',['title'=>'News'])
</head>
<style>
    .pagination {
        justify-content: center;
    }

    .news-section .card {
        border-radius: 10px
    }

    .news-section .card img {
        border-radius: 10px
    }

    .news-section .card p {
        display: none;
    }

    .news-section .card p:first-child {
        display: -webkit-box;
        overflow: hidden;
        font-size: 13px;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        font-family: "Poppins", sans-serif;
    }

    .news-section .btn-visitech {
        font-size: 14px;
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
                    <h2>Hear News from Us</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-section news-section">
        @if (sizeof($news) > 0)
            <div class="row">
                @foreach ($news as $key => $new)
                    <div class="col-md-4 mb-3">
                        @php
                        $photo=json_decode(trim($new->getThumbs200ForCollection('gallery')->toJson(),'[]'),true);
                        @endphp
                        <div class="card black">
                            <img class="card-img-top"
                                src="{{ empty($photo['thumb_url']) ? $stock_img['no_img'] : $photo['thumb_url'] }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $new->title }}
                                </h5>
                                <div class="card-detail">
                                    {!! $new->body !!}
                                </div>
                                <a href="/news/{{ $new->slug }}" class="btn btn-visitech">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            {{ $news->links() }}
        @else
            <div class="text-center">
                <h1>Stay Safe, Stay Tuned !</h1>
                <p>We are preparing something exciting for you.</p>
            </div>
        @endif
    </div>
    @include('includes/footer')
</body>

</html>

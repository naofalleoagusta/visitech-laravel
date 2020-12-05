<!DOCTYPE html>
<html lang="en">

<head>
    @include('/includes/head',['title'=>$product['name']])
</head>
<style>
    .product-section .icon {
        width: 30px;
    }

    .product-section .product-img {
        width: 90%;
    }

    .product-section i {
        color: #27aae1;
    }

    .apps-section img {
        width: 100%;
    }

    .other-banner.site-blocks-cover {
        min-height: 400px;
    }

    .other-banner a{
        font-size: 14px;
        font-weight: 300;
    }

</style>

<body>
    @include('includes/navbar')
    <div class="site-blocks-cover banner d-flex align-items-center mb-section py-4 py-md-0 text-white"
        style="background-image: url('{{ $product['img']['banner'] }}')">
        <div class="overlay"></div>
        <div class="container content">
            <div class="row align-items-center text-center">
                <div class="col-12">
                    <p>Product</p>
                    <h2>{{ $product['name'] }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container content black product-section">
        <div class="row mb-section align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <h2 class="d-flex align-items-center">
                    <img class="icon mr-2" src="{{ $product['img']['icon'] }}" alt="Icon {{ $product['name'] }}">
                    {{ $product['name'] }}
                </h2>
                {!! $product['desc'] !!}
            </div>
            <div class="col-md-6">
                <img class="product-img" src="{{ $product['img']['product'][0] }}"
                    alt="Product_01_{{ $product['name'] }}">
            </div>
        </div>
        <div class="row mb-section align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <img class="product-img" src="{{ $product['img']['product'][1] }}"
                    alt="Product_01_{{ $product['name'] }}">
            </div>
            <div class="col-md-6 pl-md-0">
                <h2 class="d-flex align-items-center">
                    What Make {{ $product['name'] }} Unique
                </h2>
                <div class="mb-4">
                    @foreach ($product['features'] as $value)
                        <div class="d-flex w-100 mb-1 align-items-center" class="mb-1">
                            <i class="far fa-circle mr-3"></i>
                            <span style="margin:0">{{ $value }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @isset($product['img']['apps'])
            <div class="row mb-section apps-section justify-content-center">
                @foreach ($product['img']['apps'] as $key => $img)
                    <div class="col-md-4">
                        <img src="{{ $img }}" alt="Apps-{{ $key }}">
                    </div>
                @endforeach
            </div>
        @endisset
    </div>

    <div class="site-blocks-cover other-banner d-flex align-items-center mb-section py-4 py-md-0 text-white"
        style="background-image: url('{{ $other_banner }}')">
        <div class="overlay"></div>
        <div class="container content">
            <div class="row align-items-center">
                <div class="col-12">
                    <p style="font-size: 20px">{{ $other_product['slogan'] }}</p>
                    <h2>{{ $other_product['name'] }}</h2>
                    <p>{{ $other_product['desc'] }}</p>
                    <a href="{{ $other_product['url'] }}" class="btn btn-visitech">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('includes/get-started')
    @include('includes/footer')
</body>

</html>

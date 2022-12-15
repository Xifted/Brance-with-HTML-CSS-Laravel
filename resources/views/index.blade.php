<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brance - Jasa Membuat Website</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">
    <link rel="icon" href="{{ asset('/images/Brance-logos_transparent.ico') }}" type="image/x-icon">
    <script src="{{ asset('/js/script.js') }}" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/82691298ba.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <img src="{{ asset('/images/loader.gif') }}" alt="">
    </div>
    <div class="container">
        @include('layouts.navbar')
        <div class="banner-bottom">
            <div class="img-slide">
                <img src="{{ $objek->img }}">
                <img src="{{ $objek->img2 }}">
                <img src="{{ $objek->img3 }}">
                <img src="{{ $objek->img4 }}">
            </div>
            <div class="img-content">
                <h1 class="yellow-color">{{ $objek->title }}</h4>
                    <h3>{{ $objek->desc }}</h3>
                    <p class="yellow-color">{{ $objek->desc2 }}</p>
                    <div class="lrn-btn">
                        <a href="#">LEARN MORE</a>
                    </div>
            </div>
        </div>
        <div class="services" id="services">
            <div class="srv-title">
                <h3>{{ $service->title }}</h3>
            </div>
            <div class="srv-title-txt">
                <p>{{ $service->desc }}</p>
            </div>
            <div class="center-div">
                <div class="border">
                    <div class="srv-txt">
                        <div class="icon-srv"><i class="fa-solid fa-display yellow-color fa-2x"></i></div>
                        <div class="title-content">
                            <h4>{{ $service->wrap_title }}</h4>
                        </div>
                        <div class="txt-content">
                            <p>{{ $service->wrap_desc }}</p>
                            <i class="fa-solid fa-check yellow-color"></i>{{ $service->wrap_list }}<br>
                            <i class="fa-solid fa-check yellow-color"></i>{{ $service->wrap_list2 }}
                        </div>
                    </div>
                </div>
                <div class="border">
                    <div class="srv-txt">
                        <div class="icon-srv"><i class="fa-solid fa-code yellow-color fa-2x"></i></div>
                        <div class="title-content">
                            <h4>{{ $service2->wrap_title }}</h4>
                        </div>
                        <div class="txt-content">
                            <p>{{ $service2->wrap_desc }}</p>
                            <i class="fa-solid fa-check yellow-color"></i>{{ $service2->wrap_list }}<br>
                            <i class="fa-solid fa-check yellow-color"></i>{{ $service2->wrap_list2 }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimoni" id="testimoni">
            <div class="tst-title">
                <h1>Testimoni</h1>
            </div>
            <div class="tst-bottom">
                @foreach ($tst as $tst)
                <div class="tst-wrap">
                    <div class="tst-photo">
                        <img src="{{ $tst->img }}" alt="TST">
                    </div>
                    <div class="tst-name">
                        <h2>{{ $tst->name }}</h2>
                    </div>
                    <div class="tst-rating">
                        <i class="fa-solid fa-star yellow-color"></i>
                        <i class="fa-solid fa-star yellow-color"></i>
                        <i class="fa-solid fa-star yellow-color"></i>
                        <i class="fa-solid fa-star yellow-color"></i>
                        <i class="fa-solid fa-star yellow-color"></i>
                    </div>
                    <div class="tst-txt">
                        <div class="border-txt yellow-color">
                            <p><i class="fa-solid fa-quote-left"></i>&nbsp;{{ $tst->wrap_desc }}&nbsp;<i class="fa-solid fa-quote-right"></i></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="call-center" id="cc">
            <div class="cc-title">
                <h1>{{ $cc->title }}</h1>
            </div>
            <div class="cc-content">
                <div class="cc-icon yellow-color">
                    <i class="fa-solid fa-phone"></i>
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="cc-text">
                    <a href="#">{{ $cc->call }}</a>
                    <a href="brance@gmail.com">{{ $cc->email }}</a>
                </div>
            </div>
        </div>
        <div class="order" id="order">
            <div class="ord-title">
                <h1>Order & Price</h1>
            </div>
            <div class="ord-content">
                <div class="price-grid">
                    <div class="price-top">
                        <i class="fa-solid fa-user yellow-color"></i>
                        <h2>SIMPLE</h2>
                    </div>
                    <div class="price-desc">
                        <ul>
                            <li><i class="fa-solid fa-check yellow-color"></i>Lorem ipsum dolor sit amet</li>
                            <li><i class="fa-solid fa-check yellow-color"></i>Lorem ipsum dolor sit amet</li>
                            <li><i class="fa-solid fa-check yellow-color"></i>Lorem ipsum dolor sit amet</li>
                            <li><i class="fa-solid fa-check yellow-color"></i>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                    <div class="price-bottom">
                        <div class="price-select">
                            <p>Rp. 100.000</p>
                            <p><a href="#">ORDER NOW!</a></p>
                        </div>
                    </div>
                </div>
                <div class="price-grid">
                    <div class="price-top">
                        <i class="fa-solid fa-code yellow-color"></i>
                        <h2>ADVANCED</h2>
                    </div>
                    <div class="price-desc">
                        <ul>
                            <li><i class="fa-solid fa-check yellow-color"></i>Lorem ipsum dolor sit amet</li>
                            <li><i class="fa-solid fa-check yellow-color"></i>Lorem ipsum dolor sit amet</li>
                            <li><i class="fa-solid fa-check yellow-color"></i>Lorem ipsum dolor sit amet</li>
                            <li><i class="fa-solid fa-check yellow-color"></i>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                    <div class="price-bottom">
                        <div class="price-select">
                            <p>Rp. 500.000</p>
                            <p><a href="#">ORDER NOW!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>

    <script>
        $(window).on("load", function() {
            $(".preloader").fadeOut(1500);
        });
    </script>
</body>

</html>

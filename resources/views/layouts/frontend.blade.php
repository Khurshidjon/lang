<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Khurshid</title>
    <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodmain-wrapper.">

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/flat-icon/flaticon.css') }}">
    <link rel="stylesheet" href="{{asset('temp/styles/styles.css') }}">
{{--    <link rel="stylesheet" href="{{asset('frontend/css/style.css') }}">--}}
    <link rel="stylesheet" href="{{asset('frontend/css/main.css') }}">
</head>
<body>
@php
    $langArr = ['uz' => 'O\'zbekcha', 'en' => 'English', 'ru' => 'Русский'];
    $lang = App::getLocale();
    //dd($lang);
@endphp
<div class="main-wrapper">
    <header class="header header--bg">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md sticky-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">{{ $site_logo_title!=null?$site_logo_title->{'title_'.$lang}:'' }}</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav pull-right">
                        @foreach($menus as $menu)
                            <li>
                                <a href="{{ $menu->page_id==null?$lang . $menu->url:$menu->url }}" target="{{ $menu->target }}">{{ $menu->{'title_'.$lang} }}</a>
                                @if ($menu->hasChildren)
                                    <ul class="submenu">
                                        @foreach($menu->submenu as $submenu)
                                            <li class="list-group-item text-dark">
                                                <a rel="alternate" href="{{  $submenu->page_id==null?$lang . $submenu->url:$submenu->url }}"  target="{{ $submenu->target }}">{{ $submenu->{'title_'.$lang} }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                        <li class="nav-item dropdown" style="border: 1px solid #ffffff; border-radius: 7px">
                            <a href="javascript:void (0)" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <img src="{{  asset('assets/images/').'/'.App::getLocale().'.jpg'  }}" style="width: 20px"  alt=""> {{ $langArr[App::getLocale()] }}
                            </a>
                            <ul class="dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    @if (App::getLocale() != $localeCode)
                                        <li>
                                            <a rel="alternate" hreflang="{{ $localeCode }}" class="{{ $lang==$localeCode?'text-info':'' }}" style="color: #0b75c9" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                <img style="width: 20px" src="{{ asset('assets/images/').'/'.$localeCode.'.jpg'  }} "
                                                     alt="">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <section class="slider">
                <div class="page-section text-center">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            @foreach($services as $key => $service)
                                <div class="item {{ $key == 0?'active':'' }}">
                                    <div class="header__content text-center">
                                        <h1 class="header__content__title">{{ $service->{'title_'.$lang} }}</h1>
                                        <p class="header__content__paragraph">{{ $service->{'description_'.$lang} }}</p>
                                       <div style="margin-bottom: 50px">
                                           <a class="button button--margin-right button--hover" href="{{ route('order.index') }}">@lang('pages.read_more')</a>
                                       </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <i class="material-icons">chevron_left</i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <i class="material-icons">chevron_right</i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </header>
    @yield('content', 'Default Content')
    <footer class="footer footer--bg">
    <div class="container">
        <div class="page-section">
            <div class="row gutters-100">
                <div class="col-md-4 col-lg-3">
                    <div class="footer__first">
                        <h2 class="footer__title">{{ $site_logo_title!=null?$site_logo_title->{'value_'.$lang}:'' }}</h2>
                        <p class="footer-first__paragraph">{!! $site_logo_title!=null?$site_logo_title->{'content_'.$lang}:'' !!}</p>
                        <ul class="footer-first__social-icons">
                            <li>
                                <a href="#">
                                    <img src="{{ asset('material/img/facebook.svg') }}" style="width: 25px;" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('material/img/youtube.svg') }}" style="width: 25px;" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('material/img/telegram.svg') }}" style="width: 25px;" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer__second">
                        <h2 class="footer__title text-uppercase">@lang('pages.links')</h2>
                        <ul>
                            @foreach($footer_menus as $menu)
                                <li>
                                    <a href="{{ $menu->page_id==null?$lang . $menu->url:$menu->url }}" target="{{ $menu->target }}">{{ $menu->{'title_'.$lang} }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer__third">
                        <h2 class="footer__title text-uppercase">@lang('pages.contacts')</h2>
                        <ul>
                            <li><span class="glyphicon glyphicon-envelope"></span> <a href="#">dartagency@gmail.com</a></li>
                            <li><span class="glyphicon glyphicon-earphone"></span> <a href="#">+0123-345-6789</a></li>
                        </ul>
                        <h4 class="footer__subscribe__title">@lang('pages.subscribe')</h4>
                        <div class="subscribe-section">
                            <input type="email" class="form-control" size="50" placeholder="Enter Your Email" required>
                            <button class="subscribe-section__button" type="button"><img src="{{ asset('assets/images/send-icon.png') }}" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="footer__fourth">
                        <h4 class="footer__title text-uppercase">@lang('pages.address')</h4>
                        <div style="position:relative;overflow:hidden;">
                            <iframe src="https://yandex.uz/map-widget/v1/-/CSW~UT8p" width="560" height="180" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="footer__horizontal-bar">
            <p class="footer__bottom-paragraph">&copy; Copyright 2017 <a href="#" style="color: #00aafe;font-weight:bold;">DartThemes</a>. All Rights Reserved</p>
        </div>
    </div>
</footer>
</div>

<script src="{{ asset('assets/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

<script>
    $(document).ready(function() {

        var $videoSrc = $("#video").attr("src");

        $('#myModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src',$videoSrc);
        });
    });
</script>
</body>
</html>

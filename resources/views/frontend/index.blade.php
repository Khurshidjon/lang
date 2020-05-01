@extends('layouts.frontend')
@section('content')
    @php
        $lang = App::getLocale();
    @endphp
    <section class="service">
        <div class="container">
            <div class="page-section text-center">
                <h2 class="page-section__title">{{ $services_we_offer->{'title_'.$lang} }}</h2>
                <p class="page-section__paragraph">{!! $services_we_offer->{'description_'.$lang} !!}</p>
                <div class="row gutters-40">
                    <a href="#" class="col-md-4">
                        <div class="thumbnail">
                            <i class="material-icons">trending_up</i>
                            <h4 class="service__title">{{ $offer_one->{'title_'.$lang} }}</h4>
                            <p class="service__paragraph">{{ $offer_one->{'description_'.$lang} }}</p>
                        </div>
                    </a>
                    <a href="#" class="col-md-4">
                        <div class="thumbnail">
                            <i class="material-icons">access_time</i>
                            <h4 class="service__title">{{ $offer_two->{'title_'.$lang} }}</h4>
                            <p class="service__paragraph">{{ $offer_two->{'description_'.$lang} }}</p>
                        </div>
                    </a>
                    <a href="#" class="col-md-4">
                        <div class="thumbnail">
                            <i class="material-icons">group</i>
                            <h4 class="service__title">{{ $offer_three->{'title_'.$lang} }}</h4>
                            <p class="service__paragraph">{{ $offer_three->{'description_'.$lang} }}</p>
                        </div>
                    </a>
                </div>
                <div class="row gutters-40">
                    <a href="#" class="col-md-4">
                        <div class="thumbnail">
                            <i class="material-icons">apps</i>
                            <h4 class="service__title">{{ $offer_four->{'title_'.$lang} }}</h4>
                            <p class="service__paragraph">{{ $offer_four->{'description_'.$lang} }}</p>
                        </div>
                    </a>
                    <a href="#" class="col-md-4">
                        <div class="thumbnail">
                            <i class="material-icons">local_cafe</i>
                            <h4 class="service__title">{{ $offer_five->{'title_'.$lang} }}</h4>
                            <p class="service__paragraph">{{ $offer_five->{'description_'.$lang} }}</p>
                        </div>
                    </a>
                    <a href="#" class="col-md-4">
                        <div class="thumbnail">
                            <i class="material-icons">adjust</i>
                            <h4 class="service__title">{{ $offer_six->{'title_'.$lang} }}</h4>
                            <p class="service__paragraph">{{ $offer_six->{'description_'.$lang} }}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wBaiYSuqOY8?autoplay=0" frameborder="0" allowfullscreen="" id="video"  allowscriptaccess="always"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="video-section video-section--bg">
        <div class="container">
            <div class="page-section page-section--large text-center">
                <button class="video-section__icon" data-toggle="modal" data-target="#myModal"><img src="assets/images/video-icon.png" alt=""></button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="page-section">
                <div class="text-center">
                    <h2 class="page-section__title text-uppercase">{{ $about_us->{'title_'.$lang} }}</h2>
                    <p class="page-section__paragraph">{{ $about_us->{'description_'.$lang} }}</p>
                </div>
                <div class="row gutters-50">
                    <div class="about--narrow">
                        <div class="col-md-6">
                            <img class="img-responsive" src="{{ asset('storage') .'/'. $about_us->icon }}" alt="">
                        </div>
                        <div class="col-md-6 about__extra-padding">
                            {!! $about_us->{'content_'.$lang} !!}
                            <a class="button--light" href="#">@lang('pages.read_more')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="overview overview--bg">
        <div class="container">
            <div class="page-section">
                <div class="overview__wrapper text-center">
                    <ul>
                        <li>
                            <h1 class="overview__number">550+</h1>
                            <p class="overview__title">Языков мира</p>
                        </li>
                        <li>
                            <h1 class="overview__number">800+</h1>
                            <p class="overview__title">Переводчиков</p>
                        </li>
                        <li>
                            <h1 class="overview__number">400+</h1>
                            <p class="overview__title">Успешных проектов</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <div class="container">
        <section class="price">
            <div class="page-section page-section--small text-center">
                <h2 class="page-section__title">OUR PRICING</h2>
                <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="price__panel-wrapper">
                    <div class="row gutters-50">
                        <div class="col-md-4">
                            <div class="panel text-center">
                                <div class="panel-heading">
                                    <h4 class="price__title">SILVER</h4>
                                    <h1 class="price__ammount">UZS<span class="price__ammount--number">100</span> &#47;so'z</h1>
                                </div>
                                <ul class="panel-body">
                                    <li>Up To 5 user</li>
                                    <li>Max. 100 iteam/month</li>
                                    <li>Unlimited queries</li>
                                    <li>Full statistics</li>
                                </ul>
                                <div>
                                    <a class="panel__button" href="#">@lang('Online zakaz berish')</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel text-center">
                                <div class="panel-heading">
                                    <h4 class="price__title">GOLD</h4>
                                    <h1 class="price__ammount">UZS<span class="price__ammount--number">200</span> &#47;so'z</h1>
                                </div>
                                <ul class="panel-body">
                                    <li>Up To 10 user</li>
                                    <li>Max. 200 iteam/month</li>
                                    <li>Unlimited queries</li>
                                    <li>Full statistics</li>
                                </ul>
                                <div>
                                    <a class="panel__button" href="#">@lang('Online zakaz berish')</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel text-center">
                                <div class="panel-heading">
                                    <h4 class="price__title">PLATINUM</h4>
                                    <h1 class="price__ammount"><span>Ushbu ta'rifdan foydalanish uchun biz bilan bog'laning</span></h1>
                                </div>
                                <ul class="panel-body">
                                    <li>Up To 5 user</li>
                                    <li>Unlimited iteam</li>
                                    <li>Unlimited queries</li>
                                    <li>Full statistics</li>
                                </ul>
                                <div>
                                    <a class="panel__button" href="#">@lang('Bog\'lanish')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection






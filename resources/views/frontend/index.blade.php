@extends('layouts.frontend')
@section('content')
    @php
        $lang = App::getLocale();
    @endphp
<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
            <img class="one-third js-fullheight align-self-end order-md-last img-fluid d-none d-md-block d-lg-block d-xl-block" src="{{ asset('assets/images/undraw_pair_programming_njlp.svg') }}" alt="">
            <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
                <div class="text mt-5">
                    <span class="subheading">Isometric Hosting</span>
                    <h1 class="mb-3"><span>Design,</span> <span>Development,</span> <span>Hosting</span></h1>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Get in touch</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Why Choose Us</h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center order-md-last">
                        <span class="flaticon-cloud"></span>
                    </div>
                    <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                        <h3 class="heading">Super Fast Server</h3>
                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-server"></span>
                    </div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Daily Backups</h3>
                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center order-md-last">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                        <h3 class="heading">Technical Services</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-life-insurance"></span>
                    </div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Secure and Reliable</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center order-md-last">
                        <span class="flaticon-cloud-computing"></span>
                    </div>
                    <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                        <h3 class="heading">DNS Control</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>s
                </div>
            </div>
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-settings"></span>
                    </div>
                    <div class="media-body pl-4">
                        <h3 class="heading">24/7 Support</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">More than 12,000 websites trusted hosted</span>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="12000">0</strong>
                                <span>CMS Installation</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="100">0</strong>
                                <span>Awards Won</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="10000">0</strong>
                                <span>Registered Domains</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="9000">0</strong>
                                <span>Satisfied Customers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-5">
                <img src="{{ asset('assets/images/undraw_podcast_q6p7.svg') }}" class="img-fluid" alt="">
                <div class="heading-section ftco-animate mt-5">
                    <h2 class="mb-4">Our Main Services</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
                </div>
            </div>
            <div class="col-lg-6 py-5">
                <div class="row">
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services border text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-cloud-computing"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">Cloud VPS</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services border text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-cloud"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">Share</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services border text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-server"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">VPS</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services border text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-database"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">Dedicated</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Our Best Pricing</h2>
            </div>
        </div>
        sss
        <div class="d-flex loop owl-carousel owl-theme">
           @foreach($services as $service)
                <div class="item">
                    <div class="block-7">
                        <div class="text-center">
                            <h2 class="heading">{{ $service->{'title_'.$lang} }}</h2>
                            <span class="price"><sup>UZS</sup> <span class="number">{{ $service->price }}<small class="per">3333</small></span></span>
                            <span class="excerpt d-block">100% free. Forever</span>
                            <h3 class="heading-2 mb-3">Enjoy All The Features</h3>

                            <ul class="pricing-text mb-4">
                                <li><strong>150 GB</strong> Bandwidth</li>
                                <li><strong>100 GB</strong> Storage</li>
                                <li><strong>$1.00 / GB</strong> Overages</li>
                                <li>All features</li>
                            </ul>
                            <a href="#" class="btn btn-primary d-block px-3 py-3 mb-4">Choose Plan</a>
                        </div>
                    </div>
                </div>
           @endforeach
            <div class="item">
                <div class="block-7">
                    <div class="text-center">
                        <h2 class="heading">Diplom</h2>
                        <span class="price"><sup>$</sup> <span class="number">19<small class="per">/mo</small></span></span>
                        <span class="excerpt d-block">All features are included</span>
                        <h3 class="heading-2 mb-3">Enjoy All The Features</h3>

                        <ul class="pricing-text mb-4">
                            <li><strong>450 GB</strong> Bandwidth</li>
                            <li><strong>400 GB</strong> Storage</li>
                            <li><strong>$2.00 / GB</strong> Overages</li>
                            <li>All features</li>
                        </ul>
                        <a href="#" class="btn btn-primary d-block px-3 py-3 mb-4">Choose Plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="block-7">
                    <div class="text-center">
                        <h2 class="heading">Reyting</h2>
                        <span class="price"><sup>$</sup> <span class="number">49<small class="per">/mo</small></span></span>
                        <span class="excerpt d-block">All features are included</span>
                        <h3 class="heading-2 mb-3">Enjoy All The Features</h3>

                        <ul class="pricing-text mb-4">
                            <li><strong>250 GB</strong> Bandwidth</li>
                            <li><strong>200 GB</strong> Storage</li>
                            <li><strong>$5.00 / GB</strong> Overages</li>
                            <li>All features</li>
                        </ul>
                        <a href="#" class="btn btn-primary d-block px-3 py-3 mb-4">Choose Plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="block-7">
                    <div class="text-center">
                        <h2 class="heading">Pro</h2>
                        <span class="price"><sup>$</sup> <span class="number">99<small class="per">/mo</small></span></span>
                        <span class="excerpt d-block">All features are included</span>
                        <h3 class="heading-2 mb-3">Enjoy All The Features</h3>

                        <ul class="pricing-text mb-4">
                            <li><strong>450 GB</strong> Bandwidth</li>
                            <li><strong>400 GB</strong> Storage</li>
                            <li><strong>$20.00 / GB</strong> Overages</li>
                            <li>All features</li>
                        </ul>
                        <a href="#" class="btn btn-primary d-block px-3 py-3 mb-4">Choose Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Services</span>
                <h2 class="mb-4">How it works</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
                <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen" role="tab" aria-controls="v-pills-nextgen" aria-selected="true">Next gen VPS</a>

                    <a class="nav-link" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false">Performance</a>

                    <a class="nav-link" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect" role="tab" aria-controls="v-pills-effect" aria-selected="false">Effectiveness</a>
                </div>
            </div>
            <div class="col-md-12 align-items-center ftco-animate">

                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                        <div class="d-md-flex">
                            <div class="one-forth align-self-center">
                                <img src="{{ asset('assets/images/undraw_laravel_and_vue_59tp.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="one-half ml-md-5 align-self-center">
                                <h2 class="mb-4">Next gen VPS hosting</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                                <p><a href="#" class="btn btn-primary py-3">Get in touch</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                        <div class="d-md-flex">
                            <div class="one-forth order-last align-self-center">
                                <img src="{{ asset('assets/images/undraw_visual_data_b1wx.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="one-half order-first mr-md-5 align-self-center">
                                <h2 class="mb-4">Performance VPS hosting</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                                <p><a href="#" class="btn btn-primary py-3">Get in touch</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-effect" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                        <div class="d-md-flex">
                            <div class="one-forth align-self-center">
                                <img src="{{ asset('assets/images/undraw_business_plan_5i9d.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="one-half ml-md-5 align-self-center">
                                <h2 class="mb-4">Effective VPS hosting</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                                <p><a href="#" class="btn btn-primary py-3">Get in touch</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('scripts')
    <script !src="">
        $('.loop').owlCarousel({
            center: false,
            items:4,
            loop:false,
            margin:10,
            responsive:{
                600:{
                    items:3
                }
            }
        });
    </script>
@endpush
@endsection

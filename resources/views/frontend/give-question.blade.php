@extends('layouts.frontend')
@section('content')
    @php
        $lang = App::getLocale();
    @endphp
    <style>
        input.error{
            border: 1px solid red;
        }
        textarea.error{
            border: 1px solid red;
        }
        label.error{
            color: red;
        }
    </style>
    <main>
        <div class="slider-area" style="padding-top: 100px">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{ asset('assets/img/hero/h1_hero.png') }}">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="hero__caption row">
                                    <h1 data-animation="fadeInRight" data-delay=".4s">@lang('pages.banner_title')</h1>
                                    <form id="questionForm" action="{{ route('frontend.takeQuestion') }}" method="post" data-animation="fadeInLeft" data-delay=".5s" class="col-md-8 col-lg-8" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="full_name">@lang('pages.form_full_name')</label>
                                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}">
                                            <span class="error_message"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="company_name">@lang('pages.form_company_name')</label>
                                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name') }}">
                                            <span class="error_message"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">@lang('pages.form_email')</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                            <span class="error_message"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">@lang('pages.form_phone')</label>
                                            <input type="tel" class="form-control" id="phone" name="phone"  data-mask="(00) 000-00-00"  value="{{ old('phone') }}"  placeholder="(90) 123-45-67">
                                            <span class="error_message"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="text">@lang('pages.form_text')</label>
                                            <textarea rows="5" class="form-control" id="text" name="text">{{ old('text') }}</textarea>
                                            <span class="error_message"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="" name="files[]" multiple>
                                            <span class="error_message"></span>
                                        </div>
                                        @if(config('services.recaptcha.key'))
                                            <div class="g-recaptcha"
                                                 data-sitekey="{{config('services.recaptcha.key')}}">
                                            </div>
                                        @endif
                                        <div class="hero__btn" data-animation="fadeInRight" data-delay=".8s">
                                            <button href="{{ route('frontend.giveQuestion') }}" id="submit_button" class="btn hero-btn">@lang('pages.form_submit_button')</button>
                                        </div>
                                    </form>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="col-lg-4 col-md-4">
                                        <div class="hero__img d-none d-lg-block" data-animation="fadeInLeft" data-delay="1s">
                                            <img src="{{ asset('assets/img/hero/hero_right.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @push('scripts')
        <script>
            $(function () {

                $('#phone').mask("(99) 999-99-99", {clearIfNotMatch: true});

                $('#questionForm').validate({
                    rules: {
                        "full_name": {
                            required: true,
                            minlength: 3,
                        },
                        "company_name": {
                            required: true,
                            minlength: 5
                        },
                        "email": {
                            required: true,
                            minlength: 5,
                            email: true
                        },
                        "phone": {
                            required: true,
                            minlength: 14,
                        },
                        "text": {
                            required: true,
                            minlength: 5,
                        },
                    },
                    messages: {
                        "full_name": {
                            required: "this field is required",
                            minlength: "this field must contain at least {0} characters",
                            digits: "this field can only contain numbers"
                        }
                    },
                    messages: {
                        "company_name": {
                            required: "this field is required",
                            minlength: "this field must contain at least {0} characters",
                            digits: "this field can only contain numbers"
                        }
                    },
                    messages: {
                        "email": {
                            required: "this field is required",
                            minlength: "this field must contain at least {0} characters",
                            digits: "this field can only contain numbers"
                        }
                    },
                    messages: {
                        "phone": {
                            required: "this field is required",
                            minlength: "this field must contain at least {0} characters",
                            digits: "this field can only contain numbers"
                        }
                    },
                    messages: {
                        "text": {
                            required: "this field is required",
                            minlength: "this field must contain at least {0} characters",
                            digits: "this field can only contain numbers"
                        }
                    }
                });


                // $('#phone').mask("+998(99) 999-99-99");
            })
        </script>
    @endpush
@endsection

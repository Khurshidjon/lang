@extends('layouts.app', ['activePage' => 'services', 'titlePage' => __('Questions')])

@section('content')
  <div class="content">
        <div class="container-fluid">
              <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                              <div class="card-header card-header-primary">
                                    <h4 class="card-title">{{ __('Edit User') }}</h4>
                                    <p class="card-category"></p>
                              </div>
                              <div class="card-body ">
                                  <div class="row">
                                      <div class="col-md-12 text-right">
                                          <a href="{{ route('services.store') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-2">
                                          <ul class="nav nav-pills nav-pills-primary flex-column">
                                              <li class="nav-item"><a class="nav-link active" href="#tab_uz" data-toggle="tab">O'zbekcha</a></li>
                                              <li class="nav-item"><a class="nav-link" href="#tab_en" data-toggle="tab">English</a></li>
                                              <li class="nav-item"><a class="nav-link" href="#tab_ru" data-toggle="tab">Русский</a></li>
                                          </ul>
                                      </div>
                                      <div class="col-md-10">
                                          <form method="post" action="{{ route('services.store') }}" autocomplete="off" class="form-horizontal">
                                              @csrf
                                              <div class="tab-content">
                                                  <div class="tab-pane active" id="tab_uz">
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('Title uz') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('title_uz') ? ' has-danger' : '' }}">
                                                                  <input class="form-control" id="input-title_uz" name="title_uz" type="text" placeholder="{{ __('Title uz') }}" value="{{ old('title_uz') }}" required aria-required="true"/>
                                                                  @if ($errors->has('title_uz'))
                                                                      <span id="name-error" class="error text-danger" for="input-title_uz">{{ $errors->first('title_uz') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('Description uz') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('description_uz') ? ' has-danger' : '' }}">
                                                                  <input class="form-control" id="input-description_uz" name="description_uz" type="text" placeholder="{{ __('Description uz') }}" value="{{ old('description_uz') }}" aria-required="true"/>
                                                                  @if ($errors->has('description_uz'))
                                                                      <span id="name-error" class="error text-danger" for="input-description_uz">{{ $errors->first('description_uz') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('Body uz') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('body_uz') ? ' has-danger' : '' }}">
                                                                  <textarea class="form-control" id="input-body_uz" name="body_uz" placeholder="{{ __('Body uz') }}">{{ old('body_uz') }}</textarea>
                                                                  @if ($errors->has('body_uz'))
                                                                      <span id="name-error" class="error text-danger" for="input-body_uz">{{ $errors->first('body_uz') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="tab-pane" id="tab_en">
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('Title en') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('title_en') ? ' has-danger' : '' }}">
                                                                  <input class="form-control" id="input-title_en" name="title_en" type="text" placeholder="{{ __('Title en') }}" value="{{ old('title_en') }}" />
                                                                  @if ($errors->has('title_en'))
                                                                      <span id="name-error" class="error text-danger" for="input-title_en">{{ $errors->first('title_en') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('Description en') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('description_en') ? ' has-danger' : '' }}">
                                                                  <input class="form-control" id="input-description_en" name="title_ru" type="text" placeholder="{{ __('Description en') }}" value="{{ old('description_en') }}"/>
                                                                  @if ($errors->has('description_en'))
                                                                      <span id="name-error" class="error text-danger" for="input-description_en">{{ $errors->first('description_en') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('Body en') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('body_en') ? ' has-danger' : '' }}">
                                                                  <textarea class="form-control" id="input-body_en" name="body_en" placeholder="{{ __('Body en') }}">{{ old('body_en') }}</textarea>
                                                                  @if ($errors->has('body_en'))
                                                                      <span id="name-error" class="error text-danger" for="input-body_en">{{ $errors->first('body_en') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="tab-pane" id="tab_ru">
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('Title ru') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('title_ru') ? ' has-danger' : '' }}">
                                                                  <input class="form-control" id="input-title_ru" name="title_ru" type="text" placeholder="{{ __('Title ru') }}" value="{{ old('title_ru') }}" />
                                                                  @if ($errors->has('title_ru'))
                                                                      <span id="name-error" class="error text-danger" for="input-title_ru">{{ $errors->first('title_ru') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('Description ru') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('description_ru') ? ' has-danger' : '' }}">
                                                                  <input class="form-control" id="input-description_ru" name="title_ru" type="text" placeholder="{{ __('Description ru') }}" value="{{ old('description_ru') }}"/>
                                                                  @if ($errors->has('description_ru'))
                                                                      <span id="name-error" class="error text-danger" for="input-description_ru">{{ $errors->first('description_ru') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('Body ru') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('body_ru') ? ' has-danger' : '' }}">
                                                                  <textarea class="form-control" id="input-body_ru" name="body_ru" placeholder="{{ __('Body ru') }}">{{ old('body_ru') }}</textarea>
                                                                  @if ($errors->has('body_ru'))
                                                                      <span id="name-error" class="error text-danger" for="input-body_ru">{{ $errors->first('body_ru') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                                                      <div class="col-sm-7">
                                                          <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                                              <input class="form-control" id="input-price" name="price" type="text" placeholder="{{ __('Price') }}" value="{{ old('price') }}"/>
                                                              @if ($errors->has('price'))
                                                                  <span id="name-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                                                              @endif
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="card-footer float-right">
                                                      <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
              </div>
        </div>
  </div>
  <script !src="">
      CKEDITOR.replace( 'input-body_uz', {
          filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });
      CKEDITOR.replace( 'input-body_en', {
          filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });
      CKEDITOR.replace( 'input-body_ru', {
          filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });
  </script>
@endsection

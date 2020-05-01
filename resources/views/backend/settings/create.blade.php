@extends('layouts.app', ['activePage' => 'settings', 'titlePage' => __('Questions')])

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
                              <div class="card-content ">
                                  <div class="row">
                                      <div class="col-md-12 text-right">
                                          <a href="{{ route('settings.store') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
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
                                          <form method="post" action="{{ route('settings.store') }}" autocomplete="off" enctype="multipart/form-data" class="form-horizontal">
                                              @csrf
                                              <div class="tab-content">
                                                  <div class="tab-pane active" id="tab_uz">
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('Title uz') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('title_uz') ? ' has-danger' : '' }}">
                                                                  <input class="form-control" id="input-title_uz" name="title_uz" type="text" placeholder="{{ __('title uz') }}" value="{{ old('title_uz') }}" aria-required="true"/>
                                                                  @if ($errors->has('title_uz'))
                                                                      <span id="name-error" class="error text-danger" for="input-title_uz">{{ $errors->first('title_uz') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('description uz') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('description_uz') ? ' has-danger' : '' }}">
                                                                  <textarea class="form-control" id="input-description_uz" name="description_uz" placeholder="{{ __('description uz') }}">{{ old('description_uz') }}</textarea>
                                                                  @if ($errors->has('description_uz'))
                                                                      <span id="name-error" class="error text-danger" for="input-description_uz">{{ $errors->first('description_uz') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('content uz') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('content_uz') ? ' has-danger' : '' }}">
                                                                  <textarea class="form-control" id="input-content_uz" name="content_uz" placeholder="{{ __('content uz') }}">{{ old('content_uz') }}</textarea>
                                                                  @if ($errors->has('content_uz'))
                                                                      <span id="name-error" class="error text-danger" for="input-content_uz">{{ $errors->first('content_uz') }}</span>
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
                                                                  <input class="form-control" id="input-title_en" name="title_en" type="text" placeholder="{{ __('title en') }}" value="{{ old('title_en') }}"/>
                                                                  @if ($errors->has('title_en'))
                                                                      <span id="name-error" class="error text-danger" for="input-title_en">{{ $errors->first('title_en') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('description en') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('description_en') ? ' has-danger' : '' }}">
                                                                  <textarea class="form-control" id="input-description_en" name="description_en" placeholder="{{ __('description en') }}">{{ old('description_en') }}</textarea>
                                                                  @if ($errors->has('description_en'))
                                                                      <span id="name-error" class="error text-danger" for="input-description_en">{{ $errors->first('description_en') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('content en') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('content_en') ? ' has-danger' : '' }}">
                                                                  <textarea class="form-control" id="input-content_en" name="content_en" placeholder="{{ __('content en') }}">{{ old('content_en') }}</textarea>
                                                                  @if ($errors->has('content_en'))
                                                                      <span id="name-error" class="error text-danger" for="input-content_en">{{ $errors->first('content_en') }}</span>
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
                                                                  <input class="form-control" id="input-title_ru" name="title_ru" type="text" placeholder="{{ __('title ru') }}" value="{{ old('title_ru') }}"/>
                                                                  @if ($errors->has('title_ru'))
                                                                      <span id="name-error" class="error text-danger" for="input-title_ru">{{ $errors->first('title_ru') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('description ru') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('description_uz') ? ' has-danger' : '' }}">
                                                                  <textarea class="form-control" id="input-description_ru" name="description_ru" placeholder="{{ __('description ru') }}">{{ old('description_ru') }}</textarea>
                                                                  @if ($errors->has('description_ru'))
                                                                      <span id="name-error" class="error text-danger" for="input-description_ru">{{ $errors->first('description_ru') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <label class="col-sm-2 col-form-label">{{ __('content ru') }}</label>
                                                          <div class="col-sm-7">
                                                              <div class="form-group{{ $errors->has('content_ru') ? ' has-danger' : '' }}">
                                                                  <textarea class="form-control" id="input-content_ru" name="content_ru" placeholder="{{ __('content ru') }}">{{ old('content_ru') }}</textarea>
                                                                  @if ($errors->has('content_ru'))
                                                                      <span id="name-error" class="error text-danger" for="input-content_ru">{{ $errors->first('content_ru') }}</span>
                                                                  @endif
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <label class="col-sm-2 col-form-label">{{ __('Key') }}</label>
                                                      <div class="col-sm-7">
                                                          <div class="form-group{{ $errors->has('key') ? ' has-danger' : '' }}">
                                                              <input class="form-control" id="input-key" name="key" type="text" placeholder="{{ __('Key') }}" value="{{ old('key') }}"/>
                                                              @if ($errors->has('key'))
                                                                  <span id="name-error" class="error text-danger" for="input-key">{{ $errors->first('key') }}</span>
                                                              @endif
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <label class="col-sm-2 col-form-label">{{ __('Icon') }}</label>
                                                      <div class="col-sm-7">
                                                          <input class="form-control{{ $errors->has('icon') ? ' has-danger' : '' }}" name="icon" type="file" placeholder="{{ __('Icon') }}" />
                                                          @if ($errors->has('icon'))
                                                              <span id="name-error" class="error text-danger " for="input-icon">{{ $errors->first('icon') }}</span>
                                                          @endif
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
      CKEDITOR.replace( 'input-content_uz', {
          filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });
      CKEDITOR.replace( 'input-content_en', {
          filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });
      CKEDITOR.replace( 'input-content_ru', {
          filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });
  </script>
@endsection

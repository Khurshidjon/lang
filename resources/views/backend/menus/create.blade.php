@extends('layouts.app', ['activePage' => 'menus', 'titlePage' => __('Questions')])

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
                                          <a href="{{ route('menus.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                      </div>
                                  </div>
                                  <form method="post" action="{{ route('menus.store') }}" autocomplete="on" class="form-horizontal">
                                      @csrf
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
                                          <label class="col-sm-2 col-form-label">{{ __('Title en') }}</label>
                                          <div class="col-sm-7">
                                              <div class="form-group{{ $errors->has('title_en') ? ' has-danger' : '' }}">
                                                  <input class="form-control" id="input-title_en" name="title_en" type="text" placeholder="{{ __('Title en') }}" value="{{ old('title_en') }}" required aria-required="true"/>
                                                  @if ($errors->has('title_en'))
                                                      <span id="name-error" class="error text-danger" for="input-title_en">{{ $errors->first('title_en') }}</span>
                                                  @endif
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <label class="col-sm-2 col-form-label">{{ __('Title ru') }}</label>
                                          <div class="col-sm-7">
                                              <div class="form-group{{ $errors->has('title_ru') ? ' has-danger' : '' }}">
                                                  <input class="form-control" id="input-title_ru" name="title_ru" type="text" placeholder="{{ __('Title ru') }}" value="{{ old('title_ru') }}" required aria-required="true"/>
                                                  @if ($errors->has('title_ru'))
                                                      <span id="name-error" class="error text-danger" for="input-title_ru">{{ $errors->first('title_ru') }}</span>
                                                  @endif
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <label class="col-sm-2 col-form-label">{{ __('Url') }}</label>
                                          <div class="col-sm-7">
                                              <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                                                  <input class="form-control" id="input-url" name="url" type="text" placeholder="{{ __('Url') }}" value="{{ old('url') }}"/>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <label class="col-sm-2 col-form-label">{{ __('Menu ichidagi menu') }}</label>
                                          <div class="col-sm-7">
                                              <div class="form-group{{ $errors->has('parent_id') ? ' has-danger' : '' }}">
                                                  <select name="parent_id" id="select-parent" class="form-control">
                                                      <option value="">--select--</option>
                                                      @foreach($menus as $menu)
                                                          <option value="{{ $menu->id }}">{{ $menu->title_uz }}</option>
                                                      @endforeach
                                                  </select>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-2"></div>
                                          <div class="col-10">
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" name="page_id" type="checkbox">
                                                      {{ __('Agar boshqa saytdan link berayotgan bo\'lsangiz belgilang') }}
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                  </label>
                                              </div>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" name="is_parent" type="checkbox">
                                                      {{ __('Agar menu o\'z ichiga yana menu olishini hohlasangiz belgilang') }}
                                                      <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                                  </label>
                                              </div>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" name="is_footer" type="checkbox">
                                                      {{ __('Agar saytning tagida ham chiqishini hohlasangiz belgilang') }}
                                                      <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                                  </label>
                                              </div>

                                              <div class="form-check disabled">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" name="target" type="checkbox">
                                                      {{ __('Agar sahifa alohida tabda chiqishini hohlasangiz belgilang') }}
                                                      <span class="form-check-sign">
                                                <span class="check"></span>
                                              </span>
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-footer ml-auto mr-auto">
                                          <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                    </div>
              </div>
        </div>
  </div>
@endsection

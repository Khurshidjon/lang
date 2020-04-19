@extends('layouts.app', ['activePage' => 'questions', 'titlePage' => __('Questions')])

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
                      <a href="{{ route('questions') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control" id="input-name" type="text" placeholder="{{ __('Fullname') }}" value="{{ old('fullname', $question->full_name) }}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', $question->email) }}" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('Company name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" type="text" id="input-password" placeholder="{{ __('Company name') }}" value="{{ $question->company_name }}" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Text') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                        <textarea class="form-control" id="input-password-confirmation" placeholder="{{ __('Text') }}" cols="30" rows="8">{{ $question->text }}</textarea>
                    </div>
                  </div>
                </div>
                  <ul class="list-group">
                  @forelse($files as $file)
                      @php
                        $ext = explode('.', $file->filename)
                      @endphp
                    <li class="list-group-item"><span><b>Расширение файла</b> {{ $ext[1] }}</span> <a href="{{ asset('storage') .'/'. $file->filename }}" download>Скачать файл</a> </li>
                  @empty
                    <li class="list-group-item">Там в настоящее время нет файлов</li>
                  @endforelse
                  </ul>
              </div>
            </div>
            <form method="post" action="" autocomplete="off" class="form-horizontal">
                @csrf
                @method('put')
                  <div class="card-footer ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                  </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection

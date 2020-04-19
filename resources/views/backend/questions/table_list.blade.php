@extends('layouts.app', ['activePage' => 'questions', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                @php
                $i = 1
                @endphp
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                      Фамилия Имя Отчество
                  </th>
                  <th>
                      Название компании или СМИ
                  </th>
                  <th>
                      Адрес электронной почты
                  </th>
                  <th>
                      Номер телефона
                  </th>
                  <th>
                      Действия
                  </th>
                </thead>
                <tbody>
                    @forelse($questions as $question)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $question->full_name }}</td>
                            <td>{{ $question->company_name }}</td>
                            <td>{{ $question->email }}</td>
                            <td>{{ $question->phone }}</td>
                            <td>
                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('questions.show', [$question]) }}" data-original-title="" title="">
                                    <i class="material-icons">fingerprint</i>
                                    <div class="ripple-container"></div>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">Там в настоящее время нет записей</td>
                        </tr>
                    @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

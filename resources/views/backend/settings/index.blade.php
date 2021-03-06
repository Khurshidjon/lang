@extends('layouts.app', ['activePage' => 'settings', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
              <a class="card-category btn btn-success" href="{{ route('settings.create') }}"> Create new settings</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                @php
                $i = 1
                @endphp
              <table class="table table-hover">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                      Название услуги на узбекском языке
                  </th>
                  <th>
                      Название услуги на английском языке
                  </th>
                  <th>
                      Название услуги на русском языке
                  </th>
                  <th>
                      Изображение настроек
                  </th>
                  <th>
                      Ключ настроек
                  </th>
                  <th class="text-center">
                     Действие
                  </th>
                </thead>
                <tbody>
                    @forelse($settings as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->title_uz }}</td>
                            <td>{{ $item->title_en }}</td>
                            <td>{{ $item->title_ru }}</td>
                            <td><img src="{{ asset('storage') .'/'. $item->icon}}" style="width: 70px" alt=""></td>
                            <td>{{ $item->key }}</td>
                            <td>
                                <a rel="tooltip" class="btn btn-info btn-link" href="{{ route('settings.edit', [$item]) }}" data-original-title="" title="Edit">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                </a>
                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('settings.show', [$item]) }}" data-original-title="" title="Show">
                                    <i class="material-icons">fingerprint</i>
                                    <div class="ripple-container"></div>
                                </a>
                                <a rel="tooltip" onclick="event.preventDefault();document.getElementById('delete_{{$item->id}}').submit();"   class="btn btn-danger btn-link" data-original-title="" title="Delete">
                                    <form action="{{ route('settings.destroy', [$item]) }}" id="delete_{{$item->id}}" style="display: none" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <i class="material-icons">close</i>
                                    <div class="ripple-container"></div>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Там в настоящее время нет записей</td>
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
@if (Session::has('success'))
    @push('js')
        <script !src="">
            $.notify({
                icon: "add_alert",
                message: "{{ Session::get('success')  }}"

            }, {
                type: 'success',
                timer: 3000,
                placement: {
                    from: 'top',
                    align: 'right'
                }
            });
        </script>
    @endpush
@endif
@endsection

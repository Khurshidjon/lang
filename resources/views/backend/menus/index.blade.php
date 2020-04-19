@extends('layouts.app', ['activePage' => 'menus', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
              <a class="card-category btn btn-success" href="{{ route('menus.create') }}"> Create new menu</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                @php
                $i = 1
                @endphp
              <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Название меню на узбекском языке
                        </th>
                        <th>
                            Название меню на английском языке
                        </th>
                        <th>
                            Название меню на русском языке
                        </th>
                        <th>
                            URL меню
                        </th>
                        <th class="text-center">
                            Статус
                        </th>
                        <th class="text-center">
                            Действие
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menus as $menu)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $menu->title_uz }}</td>
                            <td>{{ $menu->title_en }}</td>
                            <td>{{ $menu->title_ru }}</td>
                            <td>{{ $menu->url }}</td>
                            <td>{{ $menu->status }}</td>
                            <td>
                                <a rel="tooltip" class="btn btn-info btn-link" href="{{ route('menus.edit', [$menu]) }}" data-original-title="" title="Edit">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                </a>
                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('menus.show', [$menu]) }}" data-original-title="" title="Show">
                                    <i class="material-icons">fingerprint</i>
                                    <div class="ripple-container"></div>
                                </a>
                                <a rel="tooltip" onclick="event.preventDefault();document.getElementById('delete_{{$menu->id}}').submit();"  class="btn btn-danger btn-link" method="post" data-original-title="" title="Delete">
                                    <form action="{{ route('menus.destroy', [$menu]) }}" id="delete_{{$menu->id}}" style="display: none" method="post">
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

@extends('master')
@section('content')
    <h2>Danh sách đại lý phân phối</h2>
    <table class="table">
        <a href="{{route('agency.create')}}">
            <button type="button" class="btn btn-success">Thêm mới</button>
        </a>
        <thead class="thead-dark">
        <tr>
            <th scope="col">Mã số đại lý</th>
            <th scope="col">Tên đại lý</th>
            <th scope="col">Điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Tên người quản lý</th>
            <th scope="col">Trạng thái</th>
            <th scope="col" colspan="2">Trức năng</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($agencies as $agency)
            <tr>
                <td>{{$agency->id}}</td>
                <td>{{$agency->name}}</td>
                <td>{{$agency->phone}}</td>
                <td>{{$agency->email}}</td>
                <td>{{$agency->address}}</td>
                <td>{{$agency->name_manage}}</td>
                <td>@if($agency->status == 1) {{'Hoạt Động'}}
                @else {{'Không hoạt động'}} @endif</td>
                <td><a href="{{ route('agency.delete',$agency->id) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd"
                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </a>
                </td>
                <td><a href="{{route('agency.edit',$agency->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-vector-pen" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>
                            <path fill-rule="evenodd"
                                  d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"/>
                        </svg>
                    </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

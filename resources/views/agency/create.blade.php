@extends('master')
@section('content')
    <h3>Thêm mới đại lý phân phối</h3>
    <form method="post" action="{{route('agency.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Mã số đại lý</label>
            <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tên đại lý</label>
            <input type="text" name="name" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Điện thoại</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Địa chỉ</label>
            <textarea type="text" name="address" class="form-control" id="exampleInputEmail1"
                      aria-describedby="emailHelp"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tên người quản lý</label>
            <input type="text" name="manage" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Trạng thái</label>
            <select name="status" class="form-control form-control-lg">
                <option value="1">hoạt động</option>
                <option value="2">Ngưng hoạt động</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

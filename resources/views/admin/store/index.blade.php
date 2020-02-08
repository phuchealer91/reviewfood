@extends('layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('api-admin.index')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.index.store')}}">Cửa hàng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
        </ol>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Quản lý cửa hàng
        </h1>
        <a href="{{route('admin.create.store')}}" class="btn btn-success pull-right">Thêm mới</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên cửa hàng</th>
                <th>Địa chỉ</th>
                <th>Thời gian hoạt động</th>
                <th>Giá trung bình</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($stores))
                @foreach($stores as $store)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$store->st_name}}</td>
                        <td>{{$store->st_address}}</td>
                        <td>{{$store->st_timeOpen}}</td>
                        <td>{{$store->st_price}}</td>
                        <td><a href="" class="{{$store->getStatus($store->st_active)['class']}}">{{$store->getStatus($store->st_active)['st_name']}}</a></td>
                        <td>
                            <a href="{{route('admin.update.store',$store->id)}}" class="btn btn-success">Sửa</a>
                            <a href="{{route('admin.delete.store',['delete',$store->id])}}" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('api-admin.index')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.index.product')}}">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
        </ol>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Quản lý sản phẩm
        </h1>
        <a href="{{route('admin.create.product')}}" class="btn btn-success pull-right">Thêm mới</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Thuộc cửa hàng</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($products))
                @foreach($products as $product)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$product->pro_name}}</td>
                        <td>{{$product->pro_price}}</td>
                        <td>{{$product->pro_typeStore_id}}</td>
                        <td><a href="" class="{{$product->getStatus($product->pro_active)['class']}}">{{$product->getStatus($product->pro_active)['pro_name']}}</a></td>
                        <td>
                            <a href="{{route('admin.update.product',$product->id)}}" class="btn btn-success">Sửa</a>
                            <a href="{{route('admin.delete.product',['delete',$product->id])}}" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection

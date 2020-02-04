@extends('layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('api-admin.index')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.index.category')}}">Danh mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
        </ol>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Quản lý danh mục
        </h1>
        <a href="{{route('admin.create.category')}}" class="btn btn-success pull-right">Thêm mới</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Icon</th>
                <th>Title Seo</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($categories))
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->c_name}}</td>
                        <td>{{$category->c_icon}}</td>
                        <td>{{$category->c_title_seo}}</td>
                        <td>{{$category->c_active}}</td>
                        <td>
                            <a href="{{route('admin.update.category',$category->id)}}" class="btn btn-success">Sửa</a>
                            <a href="{{route('admin.delete.category',['delete',$category->id])}}" onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection

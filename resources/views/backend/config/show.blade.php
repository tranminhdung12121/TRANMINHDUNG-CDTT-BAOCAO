@extends('layouts.admin')
@section('title', 'config')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>CHI TIẾT CẤU HÌNH</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index')  }}">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Chi tiết cấu hình</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content --> 
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                       
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="text-right">
                            
                            <a class="btn btn-sm btn-info" href="{{ route('config.index') }}">
                                <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                            </a>                            
                            <a class="btn btn-sm btn-primary" href="{{ route('config.edit',['config'=>$row->id]) }}">
                                <i class=" fas fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="{{ route('config.trash',['config'=>$row->id]) }}">
                                <i class=" fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered border-primary table-hover ">
                    <thead class="bg-orange">
                        <tr class="fs-1">
                            <th width="30%">
                                Tên trường
                            </th>
                            <th>
                                Giá trị
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ $row->id }}</td>
                        </tr>
                        <tr>
                            <th>Tên Shop</th>
                            <td>{{ $row->name }}</td>
                        </tr>                        
                        <tr>
                            <th>Hình</th>
                            <td class="index-img">
                                <img src="{{ asset('images/config/'.$row->image) }}" alt="{{ $row->image }}" class="img-fluid">
                            </td>
                        </tr>
                        <tr>
                            <th>Địa chỉ</th>
                            <td>{{ $row->address }}</td>
                        </tr>
                        <tr>
                            <th>Số liên hệ</th>
                            <td>{{ $row->phone }}</td>
                        </tr>
                        <tr>
                            <th>Tác giả</th>
                            <td>{{ $row->author }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $row->email }}</td>
                        </tr>
                        <tr>
                            <th>Facebook</th>
                            <td>{{ $row->facebook }}</td>
                        </tr>
                        <tr>
                            <th>Twitter</th>
                            <td>{{ $row->twitter }}</td>
                        </tr>
                        <tr>
                            <th>Youtube</th>
                            <td>{{ $row->youtube }}</td>
                        </tr>
                        <tr>
                            <th>Trạng thái</th>
                            @if ($row->status === 1)                            
                            <td>đang hiện</td>
                            @else
                            <td>đang ẩn</td>
                            @endif
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                       
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="text-right">
                            
                            <a class="btn btn-sm btn-info" href="{{ route('config.index') }}">
                                <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                            </a>                            
                            <a class="btn btn-sm btn-primary" href="{{ route('config.edit',['config'=>$row->id]) }}">
                                <i class=" fas fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="{{ route('config.trash',['config'=>$row->id]) }}">
                                <i class=" fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-footer-->
        </div>
    </section>
  </div>
@endsection
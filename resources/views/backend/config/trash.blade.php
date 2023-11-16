@extends('layouts.admin')
@section('title', 'config')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thùng rác</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index')  }}">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Thùng rác</li>
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
                        <button class="btn btn-sm btn-danger" type="submit" name="DELETE_ALL">
                            <i class="fas fa-trash"></i> Xóa đã chọn
                        </button>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="text-right">
                            <a class="btn btn-sm btn-info" href="{{ route('config.index')  }}">
                                <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @includeIf('backend.messageAlert', ['some' => 'data']) 
                <table class="table table-bordered" id="myTable">
                    <thead class="bg-orange">
                        <tr>
                            <th class="text-center" style="width:20px"><input type="checkbox"></th>
                            <th class="text-center" style="width:170px">Hình</th>
                            <th class="text-center" style="width:250px">Tên Shop</th>
                            <th class="text-center" style="width:250px">Địa chỉ</th>
                            <th class="text-center" style="width:200px">Số liên hệ</th>
                            <th class="text-center" style="width:200px">Email</th>
                            <th class="text-center" style="width:200px">Chức năng</th>
                            <th class="text-center" style="width:20px">ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $row)
                        {{-- <tr>
                            <td>
                                <input type="checkbox" name="checkId[]" value="{{ $row->id }}">
                            </td>
                            <td>
                                    <img src="{{ asset('images/product/'.$row->images) }}" alt="{{ $row->images }}" class="img-fluid">
                            </td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->link }}</td>                         
                            <td>{{ $row->created_at }}</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" href="{{ route('config.show',['config'=>$row->id]) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-primary" href="{{ route('config.restore',['config'=>$row->id]) }}">
                                    <i class="fas fa-undo-alt"></i>
                                </a>                                
                                <form action="{{ route('config.destroy',['config'=>$row->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            <td>{{ $row->id }}</td>
                        </tr> --}}
                        <tr>
                            <td>
                            <input type="checkbox" name="checkId[]" value="{{ $row->id }}">
                            </td>
                            <td class="text-center">
                                <img src="{{ asset('images/config/'.$row->image) }}" alt="{{ $row->images }}" class="img-fluid">
                            </td>
                            <td class="text-center">{{ $row->name }}</td>
                            <td class="text-center">{{ $row->address }}</td>                         
                            <td class="text-center">{{ $row->phone }}</td>                         
                            <td class="text-center">{{ $row->email }}</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" href="{{ route('config.show',['config'=>$row->id]) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-primary" href="{{ route('config.restore',['config'=>$row->id]) }}">
                                    <i class="fas fa-undo-alt"></i>
                                </a>                                
                                <form action="{{ route('config.destroy',['config'=>$row->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            <td>{{ $row->id }}</td>
                        </tr>        
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-sm btn-danger" type="submit" name="DELETE_ALL">
                            <i class="fas fa-trash"></i> Xóa đã chọn
                        </button>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-sm btn-info" href="{{ route('config.index')  }}">
                            <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection
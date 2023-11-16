@extends('layouts.admin')
@section('title',$title??'config')
@section('content')
<form action="{{ route('config.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>THÊM CẤU HÌNH</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index')  }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item active">Thêm cấu hình</li>
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
                        <div class="col-md-12 text-right">
                            <button name="THEM" type="submit" class="btn btn-sm btn-success">
                                <i class="fas fa-save"></i> Save[Thêm]
                            </button>
                            <a class="btn btn-sm btn-info" href="{{ route('config.index')  }}">
                                <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name">Tên shop</label>
                                <input name="name" id="name" type="text" class="form-control " placeholder="Tên shop">
                                @if ( $errors->has('name') )
                                <div class="text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="address">Địa chỉ</label>
                                <input name="address" id="address" type="text" class="form-control " placeholder="nhập địa chỉ...........">
                                @if ( $errors->has('address') )
                                <div class="text-danger">
                                    {{ $errors->first('address') }}
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="author">Tác giả</label>
                                <input name="author" id="author" type="text" class="form-control " placeholder="Tên tác giả của wed...........">
                                @if ( $errors->has('author') )
                                <div class="text-danger">
                                    {{ $errors->first('author') }}
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="phone">Số liên hệ</label>
                                <input name="phone" id="phone" type="text" class="form-control " placeholder="0909.........">
                                @if ( $errors->has('phone') )
                                <div class="text-danger">
                                    {{ $errors->first('phone') }}
                                </div>
                                @endif
                            </div>                           
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input name="email" id="email" type="text" class="form-control " placeholder="http://...........">
                                @if ( $errors->has('email') )
                                <div class="text-danger">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="facebook">Facebook</label>
                                <input name="facebook" id="facebook" type="text" class="form-control " placeholder="http://...........">
                                @if ( $errors->has('addrfacebookess') )
                                <div class="text-danger">
                                    {{ $errors->first('facebook') }}
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="twitter">Twitter</label>
                                <input name="twitter" id="twitter" type="text" class="form-control " placeholder="http://...........">
                                @if ( $errors->has('twitter') )
                                <div class="text-danger">
                                    {{ $errors->first('twitter') }}
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="youtube">Youtube</label>
                                <input name="youtube" id="youtube" type="text" class="form-control " placeholder="http://...........">
                                @if ( $errors->has('youtube') )
                                <div class="text-danger">
                                    {{ $errors->first('youtube') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">                            
                        <div class="col-6 mb-3">
                            <label for="image">Hình ảnh</label>
                            <input name="image" id="image" type="file" class="form-control btn-sm">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="status">Trạng thái</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Xuất bản</option>
                                <option value="2">Chưa xuất bản</option>

                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button name="THEM" type="submit" class="btn btn-sm btn-success">
                                <i class="fas fa-save"></i> Save[Thêm]
                            </button>
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
    
</form>
@endsection
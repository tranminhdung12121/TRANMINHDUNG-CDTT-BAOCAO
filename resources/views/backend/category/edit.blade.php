@extends('layouts.admin')
@section('title','CẬP NHẬT DANH MỤC SẢN PHẨM')
@section('content')
<form action="{{ route('category.update',['category'=> $row->id]) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>CẬP NHẬT DANH MỤC SẢN PHẨM</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index')  }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item active">Cập nhật</li>
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
                                <i class="fas fa-save"></i> Save[Cập nhật]
                            </button>
                            <a class="btn btn-sm btn-info" href="{{ route('category.index')  }}">
                                <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="name">Tên danh mục</label>
                                <input name="name" id="name" type="text" class="form-control " placeholder="Tên danh mục" value="{{ old('name',$row->name) }}">
                                @if ( $errors->has('name') )
                                <div class="text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="metadesc">Mô tả</label>
                                <input name="metadesc" id="metadesc" cols="10" rows="2" class="form-control " value="{{ old('metadesc',$row->metadesc) }}" placeholder="Mô tả">
                                
                            </div>
                            <div class="mb-3">
                                <label for="metakey">Từ khóa</label>
                                <input name="metakey" id="metakey" cols="10" rows="2" class="form-control " value="{{ old('metadesc',$row->metakey) }}" placeholder="Từ khóa">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="parent_id">Chủ đề cha</label>
                                <select name="parent_id" id="parent_id" class="form-control">
                                    <option value="0">--chon chủ đề--</option>
                                    {{!!$html_parent_id!!}}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="sort_order">Vị trí</label>
                                <select name="sort_order" id="sort_order" class="form-control">
                                    <option value="0">--chon vị trí--</option>
                                    {{!!$html_sort_order!!}}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="image">Hình ảnh</label>
                                <input name="image" id="image" type="file" class="form-control btn-sm">
                            </div>
                            <div class="mb-3">
                                <label for="status">Trạng thái</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1" <?= ($row->status == 1) ? 'selected' : ''; ?>>Xuất bản</option>
                                    <option value="2" <?= ($row->status == 2) ? 'selected' : ''; ?>>Chưa xuất bản</option>    
                                </select>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button name="THEM" type="submit" class="btn btn-sm btn-success">
                                <i class="fas fa-save"></i> Save[Cập nhật]
                            </button>
                            <a class="btn btn-sm btn-info" href="{{ route('category.index')  }}">
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
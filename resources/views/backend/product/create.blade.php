@extends('layouts.admin')
@section('title',$title??'TẤT CẢ SẢN PHẨM')
@section('content')
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>THÊM SẢN PHẨM</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index')  }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item active">Thêm sản phẩm</li>
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
                            <a class="btn btn-sm btn-info" href="{{ route('product.index')  }}">
                                <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body"> 
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link active" id="productinfo-tab" data-toggle="tab" data-target="#productinfo" type="button" role="tab" aria-controls="productinfo" aria-selected="true">Thông tin</button>
                          {{-- <button class="nav-link" id="nav-productimage-tab" data-toggle="tab" data-target="#nav-productimage" type="button" role="tab" aria-controls="nav-productimage" aria-selected="false">Hình ảnh</button> --}}
                          <button class="nav-link" id="nav-productsale-tab" data-toggle="tab" data-target="#nav-productsale" type="button" role="tab" aria-controls="nav-productsale" aria-selected="false">Giá</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active border-right border-left border-bottom p-3"
                            id="productinfo" role="tabpanel" aria-labelledby="productinfo-tab">
                            @includeif('backend.product.create.tab_productinfo')
                        </div>
                        {{-- <div class="tab-pane fade border-right border-left border-bottom p-3"
                            id="nav-productimage" role="tabpanel" aria-labelledby="nav-productimage-tab">
                            @includeif('backend.product.tab_productimage')
                        </div> --}}
                        <div class="tab-pane fade border-right border-left border-bottom p-3"
                            id="nav-productsale" role="tabpanel" aria-labelledby="nav-productsale-tab">
                            @includeif('backend.product.create.tab_productsale')
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
                            <a class="btn btn-sm btn-info" href="index.php?option=product">
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
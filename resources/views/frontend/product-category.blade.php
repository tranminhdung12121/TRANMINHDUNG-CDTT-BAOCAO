@extends('layouts.site')
@section('title',$cat->name)
@section('content')
<section class="vung 2">
  <x-slide-show />
    <div class="vungspc py-4">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 ">
                        <x-list-category/>
                        <x-list-brand/> 
                </div>
                <div class="col-md-9">
                    <h3 style="text-transform: uppercase" class="mauh3 pb-4">{{ $cat->name }}</h3>
          
                    <div class="row">
                        @foreach ($list_product as $product)
                            <div class="col-md-4 mb-5">
                                <div class="card doimau">
                                    <a href="{{ $product->slug }}"> 
                                      <img src={{ asset('images/product/'.$product->image) }} class="card-img-top" alt="...">
                                    </a>
                                      <div class="card-body">
                                        <h5 class="card-title home-product">
                                           <a class="nav-link" href="{{ $product->slug }}">
                                            {{ $product->name }}
                                           </a>
                                         </h5>
                                        <p class="card-text text-muted"><del>Sale: {{ number_format($product->price_sale) }}₫</del></p>
                                        <h3 class="card-title gia text-danger">Giá: {{ number_format($product->price) }}₫</h3>                  
                                        <a href="#" class="btn btn-secondary mua text-center">THÊM VÀO GIỎ</a>
                                      </div>    
                                  </div>
                            </div>
                        @endforeach                           
                    </div>     
                    <div class="row py-4">
                        <div class="col-md-5"></div>
                        <div class="col-md-2">
                          {{ $list_product->links() }}
                        </div>
                        <div class="col-md-5"></div>  
                      </div>             
                </div>
            </div>
          
         
        </div>
    </div>
    <div class="row">
      <div class="col-md-11">  </div>
      <div class="col-md-1 fs-1">
          <a href="#" class="nav-link backtop show" title="Lên đầu trang"><i class="fa-solid fa-circle-arrow-up"></i></a>   
      </div>
    </div>
  </section>
@endsection
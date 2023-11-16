@extends('layouts.site')
@section('title',$product->name )
@section('content')
@section('header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
<link rel="stylesheet" href="{{ asset('css/buy_amount.css') }}">
@endsection
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="bsixDGv1"></script>
<section class="vung 2">

    <div class="vungspc py-4">
        <div class="container">
          <h1 class="product-name text-center">{{ $product->name }}</h1>  

          <form style="background-color: #E0E0E0; border: 1px solid #D8D8D8; border-radius: 10px;" class="p-4">
           <div class="row product-header">
              
            <div class="col-md-5">
              <img class="card img-fluid" src="{{ asset('images/product/'.$product->image) }}" alt="{{ $product->image }}">
            </div>
            <div class="col-md-7">
              <h4 style="border-bottom: 1px solid #000000;"
               class="py-1 text-uppercase fw-bold">Thông tin sản phẩm</h4>
                <div class="col-md-12 ">
                    <div class="row"> 
                        <div class="col-6">
                            <p>> Xuất sứ: </p>
                        </div>
                        <div class="col-6">
                            <p class="fw-bold"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <div class="row">
                        <div class="col-3">
                            <p>> Tình trạng: </p>
                        </div>
                        <div class="col-9">
                            @if ($product->qty > 0)
                                <p class="fw-bold text-success">Còn hàng</p>
                            @else
                                <p class="fw-bold text-danger">Hết hàng</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ">
                  <div class="row">
                      <div class="col-3">
                          <p>> Đơn vị tiền: </p>
                      </div>
                      <div class="col-9">
                          <p class="fw-bold">VNĐ</p>
                      </div>
                  </div>
                </div>
                <div class="col-md-12 ">
                  <div class="row">
                      <div class="col-3">
                          <p>> Thương hiệu: </p>
                      </div>
                      <div class="col-9">
                          <p class="fw-bold">VNĐ</p>
                      </div>
                  </div>
                </div>
                <div class="col-md-12 ">
                  <div class="row">
                      <div class="col-3">
                          <p>> Danh mục: </p>
                      </div>
                      <div class="col-9">
                          <p class="fw-bold">{{ $product->category_name }}</p>
                      </div>
                  </div>
                </div>
                @php
                if (!empty($product->sale->price_sale)) {
                        $price_sale = $product->sale->price_sale;
                        } else {
                            $price_sale='';                                    
                        }
                 @endphp                
                <h2 class="product-price">Giá: {{ number_format($product->price) }}₫</h2>
                {{-- <p class="card-text text-muted"><del>Sale: {{ number_format($price_sale) }}₫</del></p> --}}
                <div class="row">
                  <p style="text-transform: uppercase" class="col-2 pt-2">
                    số lượng:
                  </p>
                  {{-- <div class="col-2">
                     <div class="input-group mb-3">
                        <input name="qty" id="qty" type="number" min="1" value="1" class="amount form-control">
                      </div> 
                  </div> --}}
                  <div class="col-4">
                    <div class="ms-4 buy-amount form-qty" >
                      <input type="hidden" value="{{ $product->qty }} " class="qty_max">
                      <div class="input-group mb-3">
                        <input id="amount" name="amount" type="number" min="1" value="1" class="amount form-control">
                      </div>
                    </div>
                    <input type="hidden" value="{{ route('site.addcart') }}" id='addcart_url'>
                    @if ($product->qty > 0)
                        <button class="btn btn-success" onclick="add2cart(this.value)" value="{{ $product->id }}">
                           Thêm vào giỏ hàng
                        </button>
                    @else
                    <button class="btn btn-success" @disabled(true)>
                        <p class="my-auto ">Thêm vào giỏ hàng</p>
                    </button>
                    @endif 
                  </div>
                </div>
                  
                
            </div>
         </div>
        </form>
         <div class="row product-detail">
          <div class="col-12 py-3">
              <h3 class="mb-3">THÔNG TIN & BÌNH LUẬN</h3>
              
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">CHI TIẾT SẢN PHẨM</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Bình luận</button>
                </li>                
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                  <p>{{ $product->detail }}</p>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                  
                      <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="1300" data-numposts="5"></div>
                   
                  
                </div>
              </div>
          </div>
        </div><hr>

      <div class="row product-other">
        @if (count($list_product)>0)
           <h4>SẢN PHẨM GỢI Ý</h4>
    @foreach ($list_product as $row)                     
      <div class="card col mx-2">    
         <div class="card-body">
            <div class="product-image img-size">
               <a href="{{ $row->slug }}">
                  <img class="figure-img img-fluid" src="{{ asset('images/product/'.$row->image) }}" alt="{{ $row->image }}">
                </a>
            </div>
            <h5 class="product-name fs-5 home-product">
                <a href="{{ $row->slug }}" class="nav-link">  
                  {{ $row->name }}
                </a>
            </h5> 
            <div class="product-price ">
                <div class="row">
                    <h4>Giá: {{ number_format($row->price) }}₫</h4><hr>
                    <div>
                        <a href="" class="btn btn-sm btn-secondary">THÊM VÀO GIỎ</a>
                    </div>
                </div>
            </div>
         </div>    
     </div>                          
    @endforeach 
        @endif
        
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
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
     function add2cart(id){
    let cart_qty=document.getElementById('amount').value;
  
   let addcart_url=document.getElementById('addcart_url').value;
   console.log(addcart_url);
   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
});
   $.ajax({
    type: "POST",
    url: addcart_url,
    data: {
        'product_id':id,
        'qty':cart_qty
    },
    success: function (response) {
        if(response.success){
            swal("Thành công!!", response.success, "success", { timer: 10000 });
        }
        else{
            swal("Thông báo!!", response.alert, { timer: 10000 });
        }
    }
   });
}
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"
        integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
@endsection
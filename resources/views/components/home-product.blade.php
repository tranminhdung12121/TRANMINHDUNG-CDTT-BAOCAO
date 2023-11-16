<div class="vungspc py-4">
  
  <div class="container py-4">
    <h3 class="mauh3 pb-4">{{ $cat->name }}</h3>
    <div class="row ab ">
      @foreach ($list_product as $product)
          <div class="col-3">
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
      <div class="row py-4">
        <div class="col-md-5"></div>
        <div class="col-md-2">
          <a class="nav-link" href="{{ $cat->slug }}">                                
              <h6 class="text-center color-but py-2">Xem Thêm...></h6>  
          </a>  
        </div>
        <div class="col-md-5"></div>  
      </div>

        
    </div>
  </div>
</div>
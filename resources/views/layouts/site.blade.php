<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>D.T Audio</title>
    <link rel="shortcut icon" href="{{ asset ('images/logo LTwed4.png') }}" type='image/vnd.microsoft.icon'>
    <link rel="stylesheet" href="{{ asset ('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/layout.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <section class="vung 1 bg-menu1">
    <div class="row py-2">
      <div class="col-md-2 text-center ">
          <img class="img-fluid" src="{{ asset ('images/logo LTwed4.png') }}" alt="logo">
      </div>
      <!--vung1.1------------------------------------------------------------------------------------------------------->
      <div class="col-md-10 py-4">
        @if (Auth::guard('users')->check())
        <div class="row">  
          <div class="col-md-2 fs-6 p-2">
            <i class="fa-solid fa-phone"></i> HOTLINE: 1900 6750
          </div>
          <div class="col-md-2 fs-6 p-2">
              <i class="fa-solid fa-location-dot"></i> CỬA HÀNG KHÁC
          </div>
          <div class="col-md-4 text-center">
              <div class="input-group mb-2">
                  <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>      
          </div>
          <div class="col-md-2 fs-6">   
            <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{ asset('images/user/'.Auth::guard('users')->user()->image ) }}"
               style="border: 1px solid #D8D8D8; border-radius: 50%; width: 40px; height: 40px;">
              {{ Auth::guard('users')->user()->name }}
            </a>
            {{-- @php
                 $user_ls=Auth::guard('users')->user()->id;
            @endphp --}}
            <ul class="dropdown-menu text-center">
              <li><a href="{{ route('site.myaccount') }}" class="nav-link dropdown-item">THÔNG TIN TÀI KHOẢNG</a></li>
              <li><a class="dropdown-item" href="{{ route('site.logout')  }}">ĐĂNG XUẤT</a></li>
            </ul>
          </div>
          <div class="col-md-2 fs-6 p-2 ">
            <div class="row">
              <div class="col ">
                  <div class="fs-6">
                    <a class="nav-link" href="{{ route('site.cart') }}" target="">
                      <i class="fa-solid fa-cart-shopping"></i>GIỎ HÀNG</a>
                  </div>                    
              </div>
            </div>                            
          </div>
        </div>
       {{-- ------------------------------------------------------------------------------------------------------------------  --}}
        @else
        <div class="row">  
          <div class="col-md-2 fs-6 p-2 text-center">
            <i class="fa-solid fa-phone"></i> HOTLINE: 1900 6750
          </div>
          <div class="col-md-2 fs-6 p-2 text-center">
              <i class="fa-solid fa-location-dot"></i> CỬA HÀNG KHÁC
          </div>
          <div class="col-md-4 text-center">
              <div class="input-group mb-2">
                  <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>      
          </div>
          <div class="col-md-2 fs-6 p-2 ">   
            <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user"></i> TÀI KHOẢNG
            </a>
            <ul class="dropdown-menu text-center">
              <li><a href="{{ route('site.getlogin')  }}" class="nav-link dropdown-item border-bottom">ĐĂNG NHẬP</a></li>
              <li><a class="dropdown-item" href="{{ route('site.getregister')  }}">ĐĂNG KÝ</a></li>
            </ul>
          </div>
          <div class="col-md-2 fs-6 p-2 ">
            <div class="row">
              <div class="col ">
                  <div class="fs-6">
                    <a class="nav-link" href="{{ route('site.cart') }}" target="">
                      <i class="fa-solid fa-cart-shopping"></i>GIỎ HÀNG</a>
                  </div>                    
              </div>
            </div>                            
          </div>
        </div>
        @endif
    </div>
    </div>
  </section>
    <!--timkiem------------------------------------------------------------------------------------------------------->
<section class="bg-menu2">
  <x-main-menu />
</section>
     <!--menu2------------------------------------------------------------------------------------------------------->
     @yield('content')
<!--noidung------------------------------------------------------------------------------------------>
    <section class="vung 3 bg-vung3 py-4">
        <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="fs-5">GIỚI THIỆU</h3>
                <div class="col fs-12 py-2">Tuyển dụng</div>
                <div class="col fs-12 py-2">Địa chỉ: 287 Hồng Bàng, Phường 11, Quận 5, TP.HCM</div>
                <div class="col fs-12 py-2">Điện thoại: 1900 9797</div>
                <div class="col fs-12 py-2">Email: tranminhdung044@gmail.com</div>
                <div class="row">
                  <div class="col py-2">
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-twitter  ms-2"></i>
                  <i class="fa-brands fa-youtube  ms-2"></i>
                  <i class="fa-brands fa-instagram  ms-2"></i>
                  </div>
                </div>
              </div>
              <!--THÔNG TIN CHUNG------------------------------------------------------------------------------------------>
    
              <div class="col-md-3">
                <h3 class="fs-5">HỖ TRỢ KHÁCH HÀNG</h3>
                <div class="col fs-12 py-2">Hướng dẫn mua hàng Online</div>
                <div class="col fs-12 py-2">Hướng dẫn thanh toán</div>
                <div class="col fs-12 py-2">Hướng dẫn mua trả góp</div>
                <div class="col fs-12 py-2">Gửi góp ý, khiếu nại</div>
              </div>
    <!--BÀI VIẾT MỚI------------------------------------------------------------------------------------------>
    
              <div class="col-md-3">
                <x-menu-footer />
              </div>
    <!--THÔNG TIN CHUNG------------------------------------------------------------------------------------------>
    
              <div class="col-md-3">
                <h3 class="fs-5">THÔNG TIN CHUNG</h3>
                <div class="col fs-12 py-2">Khuyến mãi</div>
                <div class="col fs-12 py-2">Phương thức thanh toán</div>
                <div class="col fs-12 py-2">
                  <img src="{{ asset ('images/dmca.png') }}" alt="">
                </div>
                <div class="col fs-12 py-2 ">
                  <img src="{{ asset ('images/logo_so_cong_thuong.png') }}" alt="">
                </div>
              </div>
             
            </div>
          </div>
    </section>
    

    <section class="vung4 bg-vung4">
        <div class="container border-top py-4 text-center">
          Thiết kế: TRẦN MINH DŨNG
        </div>
      </section>

    <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
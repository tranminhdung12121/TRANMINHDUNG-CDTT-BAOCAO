@extends('layouts.site')
@section('content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="bsixDGv1"></script>
{{-- <section class="vung 2">
    <div class="container">
        
        <h2 style="text-transform: uppercase" class="text-center pt-4">{{ $post->title }}</h2>
                    <div class="row py-4 ">
                        <div class="col-md-4 mt-2"> 
                            <a class="nav-link" href="">
                            <img class="img-fluid" src="{{ asset('images/post/'.$post->image) }}" alt="{{ $post->image }}">
                            </a>
                        </div>
                        <div style="font-size: 1.25rem" class="col-md-8">
                            {!! $post->detail !!}
                        </div>
                    </div>
               
           
    </div>
    <div class="row">
        <div class="col-md-11">  </div>
        <div class="col-md-1 fs-1">
            <a href="#" class="nav-link backtop show" title="Lên đầu trang"><i class="fa-solid fa-circle-arrow-up"></i></a>   
        </div>
      </div>
</section> --}} 
<section class="mycontent py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-12 mx-auto">
                <div class="page-title">
                    <h2 style="text-transform: uppercase" class="text-center pt-4">{{ $post->title }}</h2>
                </div>
            </div>
        </div>
        <div class="row py-5 ">
            <div class="col-md-10 col-12 mx-auto bg-white pb-4">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="pt-2 mx-auto">
                                <a class="nav-link" href="./list_post-detail.html">
                                    <img class="img-product img-md-product-3x" src="{{ asset('images/post/'.$post->image) }}" alt="{{ $post->image }}">
                                    </a>
                            </div>
                            <div class=" row card-body">
                                <div class="col-md-12 border-end border-1">
                                    <div class="row">
                                        <h3 class="card-title fs-3 text-bl_gr m-0">Nội dung:</h3>
                                        <p class="card-text m-0 pt-3"><small style="font-size: 1.25rem" class="text-muted">{!! $post->detail !!}</small></p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 py-4">
                <h3 class="mb-3">BÌNH LUẬN</h3>
                    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="1300" data-numposts="5">
                    </div>
            </div>
            
            <!-- BÀI VIẾT KHÁC  -->
            <div class="row my-5">
                <div class="col-md-12 col-12 border-bottom border-4 px-0">
                    <div class="heading1 ">
                        <h2 class="title">
                            <span class="d-md-inline-block d-none text-warning "> | </span>
                            <a href="index.php?option=post" class="nav-link text-decoration-none text-bl_gr">BÀI VIẾT KHÁC</a>
                        </h2>
                    </div>
                    <div class="d-md-block d-none">
                        <a class="text-decoration-none btn-tab text-bl_gr" href="{{ route ('site.post') }}"
                            title="Xem thêm">Xem thêm</a>
                    </div>
                </div>
            </div>
            
            <div class="post_slide">
                <div class="row mx-auto">
                    <!--  -->

                    <div class="col-md-12 mx-auto">
                        <!-- 1 -->
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach ($list_post as $list_post)
                            <div class="col-md-6 col-6">
                                <div class="card h-100 shadow-product port">
                                    <img class="img-md-product-3x" src="{{ asset('images/post/'.$list_post->image) }}" alt="{{ $list_post->image }}">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">
                                            <a href="{{ $list_post->slug }}" class=" nav-link">
                                                {{ $list_post->title }}  
                                            </a>
                                        </h5>
                                        <span class=" "> {!! $list_post->detail !!} </span>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                            <!--  -->
                        </div>
                    </div>
                   

                </div>

            </div>

        </div>
</section>
@endsection
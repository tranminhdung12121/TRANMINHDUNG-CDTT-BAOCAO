@extends('layouts.site')
@section('content')
<section class="vung 2">
    <div class="container">
        @foreach ($list_page as $post)
            <div class="row">
                <div class="col-md-10 col-12 mx-auto">
                    <div class="page-title">
                        <h2 style="text-transform: uppercase" class="text-center pt-4">{{ $post->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-10 col-12 mx-auto bg-white pb-4">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="pt-2 mx-auto">
                                    <a class="nav-link" href="./list_post-detail.html">
                                        <img class="img-fluid" src="{{ asset('images/page/'.$post->image) }}" alt="{{ $post->image }}">
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
            </div>         
        @endforeach
      
               
           
    </div>
    <div class="row">
        <div class="col-md-11">  </div>
        <div class="col-md-1 fs-1">
            <a href="#" class="nav-link backtop show" title="Lên đầu trang"><i class="fa-solid fa-circle-arrow-up"></i></a>   
        </div>
      </div>
</section>
@endsection
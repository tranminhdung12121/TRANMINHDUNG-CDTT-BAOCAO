@extends('layouts.site')
@section('content')
<section class="vung 2">
    <div class="container">
        <h2 class="text-center pt-4 border-bottom border-danger fst-italic">TẤT CẢ BÀI VIẾT</h2>
                @foreach ($list_post as $row)
                    <div class="row py-4 ">
                        
                        <div class="col-md-4 mt-2"> 
                            <a class="nav-link" href="{{ $row->slug }}">
                            <img class="img-fluid" src="{{ asset('images/post/'.$row->image) }}" alt="{{ $row->image }}">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <a class="nav-link" href="{{ $row->slug }}"><h5 style="text-transform: uppercase;  " class="text-center mb-4">{{ $row->title }}</h5></a>
                            <div class="post">{!! $row->detail !!}</div>
                        </div>
                    </div><hr>
                @endforeach
           
    </div> 
    <div class="row py-4">
        <div class="col-md-5"></div>
        <div class="col-md-2 text-center">
          {{ $list_post->links() }}
        </div>
        <div class="col-md-5"></div>  
    </div>
    <div class="row">
        <div class="col-md-11">  </div>
        <div class="col-md-1 fs-1">
            <a href="#" class="nav-link backtop show" title="Lên đầu trang"><i class="fa-solid fa-circle-arrow-up"></i></a>   
        </div>
      </div>
</section>
@endsection
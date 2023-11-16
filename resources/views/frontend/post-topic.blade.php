@extends('layouts.site')
@section('content')
<section class="vung 2">
    <div class="container">
        {{-- @foreach ($list_page as $item)
             <h2 style="text-transform: uppercase" class="text-center pt-4">{{ $item->title }}</h2>
                    <div class="row py-4 ">
                        <div class="col-md-4 mt-2"> 
                            <a class="nav-link" href="">
                            <img class="img-fluid" src="{{ asset('images/page/'.$item->image) }}" alt="{{ $item->image }}">
                            </a>
                        </div>
                        <div style="font-size: 1.25rem" class="col-md-8">
                            {{ $item->detail }}
                        </div>
                    </div> 
        @endforeach --}}
      
        <section class="post_all body container">
            <div class="post_list">
                <div id="" class="h4 pb-2 mb-4  border-bottom border-danger fst-italic">
                    <span class="title" >{{ $topic->name }}</span>
                </div> 
                @foreach($list_post as $post)
                        <div class="row py-4 ">
                            <div class="col-md-4 mt-2"> 
                                <a class="nav-link" href="{{ $post->slug }}">
                                    <img class="img-fluid" src="{{ asset('images/post/'.$post->image) }}" alt="{{ $post->image }}">
                                </a>
                            </div>
                            <div style="font-size: 1.25rem" class="col-md-8"><a class="nav-link" href="{{ $post->slug }}">
                                {{ $post->title }}</a>
                            </div>                        
                        </div>
                @endforeach
            </div>
           
        
            <div class="row py-4">
                <div class="col-md-5"></div>
                <div class="col-md-2 text-center">
                  {{ $list_post->links() }}
                </div>
                <div class="col-md-5"></div>  
            </div>
        
        </section>
           
    </div>
    <div class="row">
        <div class="col-md-11">  </div>
        <div class="col-md-1 fs-1">
            <a href="#" class="nav-link backtop show" title="Lên đầu trang"><i class="fa-solid fa-circle-arrow-up"></i></a>   
        </div>
      </div>
</section>
@endsection
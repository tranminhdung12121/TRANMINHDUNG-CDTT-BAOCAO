@extends('layouts.site')
@section('content')
<section class="vung 2">
  <x-slide-show />
    <!--spc-------------------------------------------------------------------------------------------------------------------------------------------------->
    <div class="vungspc py-4">
        <div class="container py-4">
          @foreach ($list_category as $category)
              <x-home-product :catitem="$category" />
          @endforeach
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
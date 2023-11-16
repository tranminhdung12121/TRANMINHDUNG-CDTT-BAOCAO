@if (count($list_category)>0)
  <ul class="list-group py-2">
    <li class="bg-menu1 list-group-item text-center" aria-current="true"><h5>Danh mục sản phẩm</h5></li>
  @foreach ($list_category as $category)
    <li class="list-group-item list-group-item-action">
      <a class="nav-link" href="{{ $category->slug }}">{{ $category->name }}</a>
    </li>  
  @endforeach
  
      
</ul>
@endif 

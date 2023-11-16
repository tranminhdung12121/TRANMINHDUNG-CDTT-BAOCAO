<ul class="list-group py-2">
  <li class="bg-menu1 list-group-item text-center" aria-current="true"><h5>THƯƠNG HIỆU</h5></li>
  @foreach($list_brand as $brand)
  <li class="list-group-item list-group-item-action">
      <a class="nav-link" href="{{ $brand->slug }}">{{ $brand->name }}</a>
  </li>
@endforeach  
  </ul> 
@if ($menusub==true)
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="{{ $menu->link }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    {{ $menu->name }}
  </a>
  <ul class="dropdown-menu">
    @foreach ($list_menu2 as $menu2)
        <li>
          <a class="dropdown-item" href="{{ $menu2->link }}" target="">{{ $menu2->name }}</a>
        </li>
    @endforeach         
  </ul>
</li>
@else
    <li class="nav-item">
      <a class="nav-link" href="{{ $menu->link }}">{{ $menu->name }}</a>
    </li>
@endif 
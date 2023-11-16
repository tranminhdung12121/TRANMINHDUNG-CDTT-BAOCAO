
<h3 class="fs-5">CHÍNH SÁCH DỊCH VỤ</h3>
 @foreach ($list_menufooter as $row)
    <div class="col fs-12 py-2"><a class="nav-link" href="{{ $row->link }}">{{ $row->name }}</a></div> 
@endforeach
                
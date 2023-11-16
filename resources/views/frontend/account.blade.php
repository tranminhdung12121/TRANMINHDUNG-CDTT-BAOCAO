@extends('layouts.site')
@section('title',)
@section('content')
<section class="vung 2">  
    @includeIf('frontend.messageAlert', ['some' => 'data'])
    <h2 class='text-center p-4'>THÔNG TIN TÀI KHOẢN</h2>
      <form style="background-color: #F0F0F0; border: 1px solid #C8C8C8; border-radius: 10px;
          margin-bottom: 50px; margin-left: 150px; margin-right: 150px; padding: 15px" action="" method="post">
        <div class="container myaccount">
            {{-- <div ><a class="nav-link" href="{{ route('account.edit')  }}">
                <i class="fa-regular fa-pen-to-square fa-bounce"></i>Thay đổi</a>
            </div> --}}
                
            <div class="row">                
                <div class="col-4 left-content" style="border-right: 1px solid">
                    <img style="border: 1px solid #D8D8D8; border-radius: 50%; width: 250px; height: 250px; margin-left: 55px;" 
                    class="img-fluid" src="{{ asset('images/user/'.$user->image) }}" alt="{{$user->image }}">
                </div>
                <div class="col-8 name" style="border-left: 1px solid">
                    <div class="row">                
                        <div class="col-4" style="margin-top: 5px">
                            <h4>- TÊN TÀI KHOẢNG: </h4>
                        </div>
                        <div class="col-6">
                            <p style="font-size: 25px">{{ $user->name }}</p>
                        </div>
                        <div class="col-2">
                            <p style="float: right; font-size: 20px"><a class="nav-link" href="{{ route('account.edit')  }}">
                                <i class="fa-regular fa-pen-to-square fa-bounce"></i>Thay đổi</a></p>
                        </div>
                    </div>
                    <div class="row">                
                        <div class="col-4" style="margin-top: 5px">
                            <h4>- EMAIL: </h4>
                        </div>
                        <div class="col-6">
                            <p style="font-size: 25px">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="row">                
                        <div class="col-4" style="margin-top: 5px">
                            <h4>- GIỚI TÍNH: </h4>
                        </div>
                        <div class="col-6">
                            <?php if ($user->gender == 0): ?>
                                <p style="font-size: 25px">nam</p>
                            <?php else: ?>
                                <p style="font-size: 25px">nữ</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">                
                        <div class="col-4" style="margin-top: 5px">
                            <h4>- SỐ ĐIỆN THOẠI: </h4>
                        </div>
                        <div class="col-6">
                            <p style="font-size: 25px">{{ $user->phone }}</p>
                        </div>
                    </div>
                    <div class="row">                
                        <div class="col-4" style="margin-top: 5px">
                            <h4>- ĐỊA CHỈ: </h4>
                        </div>
                        <div class="col-6">
                            <p style="font-size: 25px">{{ $user->address }}</p>
                        </div>
                    </div>
                </div>                   
            </div>                
        </div>            
    </form>   
</section>
@endsection
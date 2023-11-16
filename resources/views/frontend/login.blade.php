@extends('layouts.site')
@section('title',)
@section('content')
<section class="vung 2">  
    @includeIf('frontend.messageAlert', ['some' => 'data'])

  <div class="row ">
    <div class="col-3"></div>
    
    <div class="col-6 p-4">
        <form action="{{ route('site.postlogin') }}" method="post">
            @csrf
            <h1 class='text-center'>Đăng nhập</h1>
            <label for="username">Tên tài khoản hoặc địa chỉ email</label>
            <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
            @if ($errors->has('username'))
                <div style="  font-size: small;
            " class="text-danger">
                    {{ $errors->first('username') }}
                </div>
            @endif 
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password" class="form-control" >
            @if ($errors->has('password'))
                <div style="  font-size: small;
            " class="text-danger">
                    {{ $errors->first('password') }}
                </div>
            @endif
            <input type="checkbox" name="remember" id="remember">
            <label for="remember" class="pt-3 pb-2">Ghi nhớ tài khoản</label><br />
            <div style="  font-size: medium;
                " class="text-danger mb-2">
                @if(isset($error_login))
                {{ $error_login }}
                @endif
            </div>
            <button style="width: 150px; height: 40px; margin-left: 270px" class='btn btn-sm btn-primary' type="submit">Đăng nhập</button><br />
        </form>
    </div>
    <div class="col-3"></div>
</div>
</section>
@endsection
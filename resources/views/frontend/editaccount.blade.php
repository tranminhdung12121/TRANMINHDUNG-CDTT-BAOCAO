@extends('layouts.site')
@section('title',)
@section('content')
<script>
    function myFunction() {
        var x = document.getElementById("password_re");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }

    function myFunction2() {
        var x = document.getElementById("password");
        var show_eye = document.getElementById("show_eye2");
        var hide_eye = document.getElementById("hide_eye2");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }
</script>
<section class="vung 2">  
    <h2 class='text-center p-4'>CHỈNH SỬA THÔNG TIN TÀI KHOẢN</h2>           
     <form style="background-color: #F0F0F0; border: 1px solid #C8C8C8; border-radius: 10px;
        margin-bottom: 50px; margin-left: 150px; margin-right: 150px; padding: 15px"
        action="" method="post" enctype="multipart/form-data" id="check_submit">
        @csrf
        <div class="container myaccount">
            <div class="row">                
                <div class="col-4 left-content" style="border-right: 1px solid">
                    <img style="border: 1px solid #D8D8D8; border-radius: 50%; width: 250px;
                     height: 250px; margin-left: 55px; margin-top: 30px;" 
                    class="img-fluid" src="{{ asset('images/user/'.$user->image) }}" alt="{{$user->image }}">
                </div>
                <div class="col-8 name" style="border-left: 1px solid">
                    <div class="row py-1">                
                        <div class="col-4" style="margin-top: 5px">
                            <h4>- TÊN TÀI KHOẢNG: </h4>
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" name="name" id="name"
                                    value="{{ old('name', $user->name) }}">
                                @if ($errors->has('name'))
                                    <div class="text-danger">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                        </div>
                    </div>
                    <div class="row py-1">                
                        <div class="col-4" style="margin-top: 5px">
                            <h4>- EMAIL: </h4>
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" name="email" id="email"
                                    value="{{ old('email', $user->email) }}">
                                    @if ($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                        </div>
                    </div>
                    <div class="row py-1">                
                        <div class="col-4" style="margin-top: 5px">
                            <h4>- GIỚI TÍNH: </h4>
                        </div>
                        <div class="col-6" style="margin-top: 5px">
                            <input type="radio" name="gender" id="nam" value="0"
                                {{ old('gender', $user->gender) == 0 ? 'checked' : ' ' }}><label 
                                style="font-size: 20px" for="nam">Nam</label>
                            <input type="radio" name="gender" id="nu" value="1"
                                {{ old('gender', $user->gender) == 1 ? 'checked' : ' ' }}><label
                                style="font-size: 20px" for="nu">Nữ</label>
                        </div>
                    </div>
                    <div class="row py-1">                
                        <div class="col-4" style="margin-top: 5px">
                            <h4>- SỐ ĐIỆN THOẠI: </h4>
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="number" name="phone" id="phone"
                                    value="{{ old('phone', $user->phone) }}">
                                @if ($errors->has('phone'))
                                    <div class="text-danger">
                                        {{ $errors->first('phone') }}
                                    </div>
                                @endif
                        </div>
                    </div>
                    <div class="row py-1">                
                        <div class="col-4" style="margin-top: 5px">
                            <h4>- ĐỊA CHỈ: </h4>
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" name="address" id="address"
                                    value="{{ old('address', $user->address) }}">
                                    @if ($errors->has('address'))
                                    <div class="text-danger">
                                        {{ $errors->first('address') }}
                                    </div>
                                @endif
                        </div>
                    </div>
                    <div class="row py-1">                
                        <div class="col-4" style="margin-top: 5px">
                            <h4>- ẢNH ĐẠI DIỆN: </h4>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" name="def_image" value="1"
                                        {{ old('def_image') == 1 ? 'checked' : '' }}>(Mặc định)
                            <input name="image" id="image" type="file" class="form-control " style="width"
                                value="{{ old('image', $user->image) }}">
                            @if ($errors->has('image'))
                                <div class="text-danger">
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>                   
            </div>



                        <h4 class="mt-4 mb-1 border-bottom fs-5">Thay đổi mật khẩu ( <span style="font-weight: 100">bỏ trống nếu
                            không đổi</span> )</h4>
                        <label class="my-3" for="password">Mật khẩu hiện tại 
                        </label>
                        <input class="form-control" type="password" name="password" id="password" value="">
                        @if ($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                        <label class="my-3" for="new_password">Mật khẩu mới 
                        </label>
                        <input class="form-control" type="password" name="new_password" id="new_password-password"
                            value="">
                        @if ($errors->has('new_password'))
                            <div class="text-danger">
                                {{ $errors->first('new_password') }}
                            </div>
                        @endif
                        <label class="my-3" for="confirm_password">Xác nhận mật khẩu mới
                        </label>
                        <input class="form-control" type="password" name="confirm_password" id="confirm_password"
                            value="">
                        @if ($errors->has('confirm_password'))
                            <div class="text-danger">
                                {{ $errors->first('confirm_password') }}
                            </div>
                        @endif
                        <div class="text-center">
                            <button style="width: 150px; height: 40px;" 
                            class="btn btn-sm btn-primary my-3 p-2" type="submit">LƯU THAY ĐỔI</button>
                        </div>
        </div>                
     </form>    
</section>
@endsection
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

    <form class='p-4' action="{{ route('site.postregister') }}" name="form1" method="post" enctype="multipart/form-data">
        <h1 class='text-center'>ĐĂNG KÝ TÀI KHOẢNG</h1>
        <!-- Default box --> @csrf
            <div class="card-header">
                {{-- <div class="row">
                    <div class="col-md-12 text-right">
                        <button name="THEM" type="submit" class="btn btn-sm btn-success">
                            <i class="fas fa-save"></i> Lưu[Thêm]
                        </button>                        
                    </div>
                </div> --}}
            </div>
            <div class="card-body">
                @includeIf('backend.message_alert')

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="username">Tên tài khoản</label>
                            <input name="username" id="username" type="text" class="form-control "
                                placeholder="vd:tk123" value="{{ old('username') }}">
                            @if ($errors->has('username'))
                                <div class="text-danger">
                                    {{ $errors->first('username') }}
                                </div>
                            @endif
                        </div>
                        <div class="">
                            <label for="password">Mật khẩu</label>
                            <div class="input-group mb-3">

                                <input name="password" id="password" type="password" class="form-control "
                                    value="{{ old('password') }}">
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="myFunction2();">
                                        <i class="fas fa-eye py-1" id="show_eye2"></i>
                                        <i class="fas fa-eye-slash d-none py-1" id="hide_eye2"></i>
                                    </span>
                                </div>

                            </div>
                            @if ($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif

                        </div>

                        <div class="">
                            <label for="password_re">Nhập lại mật khẩu</label>
                            <div class="input-group mb-3">
                                <input name="password_re" id="password_re" type="password" class="form-control "
                                    value="{{ old('password_re') }}">
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="myFunction();">
                                        <i class="fas fa-eye py-1" id="show_eye"></i>
                                        <i class="fas fa-eye-slash d-none py-1" id="hide_eye"></i>
                                    </span>
                                </div>
                            </div>
                            @if ($errors->has('password_re'))
                                <div class="text-danger">
                                    {{ $errors->first('password_re') }}
                                </div>
                            @endif
                        </div>



                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="text" class="form-control "
                                placeholder="vd: abc@gmail.com" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="phone">Điện thoại</label>
                            <input name="phone" id="phone" type="tel" class="form-control "
                                placeholder="" value="{{ old('phone') }}">
                            @if ($errors->has('phone'))
                                <div class="text-danger">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name">Họ&tên</label>
                            <input name="name" id="name" type="text" class="form-control "
                                placeholder="vd: " value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label>Giới tính</label><br>
                            <input type="radio" name="gender" id="nam" value="0"
                                {{ old('gender') == 0 ? 'checked' : ' ' }}><label for="nam">Nam</label>
                            <input type="radio" name="gender" id="nu" value="1"
                                {{ old('gender') == 1 ? 'checked' : ' ' }}><label for="nu">Nữ</label>
                        </div>
                        <div class="mb-3">
                            <label for="address">Địa chỉ</label>
                            <input name="address" id="address" type="text" class="form-control "
                                placeholder="vd:" value="{{ old('address') }}">
                            @if ($errors->has('address'))
                                <div class="text-danger">
                                    {{ $errors->first('address') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="image">Hình đại diện</label>
                            <input name="image" id="image" type="file" class="form-control btn-sm"
                                value="{{ old('image') }}">
                            @if ($errors->has('image'))
                                <div class="text-danger">
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            <div class="col-md-12 text-center">
                        <button style="width: 150px; height: 40px;" name="THEM" type="submit" class="btn btn-sm btn-primary">
                            Đăng ký
                        </button>                        
                    </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="row">
                    
                </div>
                <!-- /.card-footer-->
            </div>
        
        <!-- /.card -->
    </form>

@endsection
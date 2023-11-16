@extends('layouts.admin')
@section('title','CẬP NHẬT THÀNH VIÊN')
@section('content')
    <section class="content">
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
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="text-transform: uppercase;  ">CẬP NHẬT THÀNH VIÊN</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('user.index') }}"
                                        style="text-transform: capitalize;">Tất cả khách hàng</a></li>
                                <li class="breadcrumb-item active ">Cập Nhật Thành Viên</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->

            </section>
            <!-- Main content -->
            <section class="content">
                <form action="{{ route('user.update', ['user' => $row->id]) }}" name="form1" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    <!-- Default box --> @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button name="THEM" type="submit" class="btn btn-sm btn-success">
                                        <i class="fas fa-save"></i> Lưu[Sửa]
                                    </button>
                                    <a class="btn btn-sm btn-info" href="{{ route('user.index') }}">
                                        <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @includeIf('backend.message_alert')

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="username">Tên tài khoản</label>
                                        <input name="username" id="username" type="text" class="form-control "
                                            placeholder="vd:tk123" value="{{ old('username', $row->username) }}">
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
                                                    <i class="fas fa-eye" id="show_eye2"></i>
                                                    <i class="fas fa-eye-slash d-none" id="hide_eye2"></i>
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
                                                    <i class="fas fa-eye" id="show_eye"></i>
                                                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
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
                                            placeholder="vd: abc@gmail.com" value="{{ old('email', $row->email) }}">
                                        @if ($errors->has('email'))
                                            <div class="text-danger">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone">Điện thoại</label>
                                        <input name="phone" id="phone" type="tel" class="form-control "
                                            placeholder="" value="{{ old('phone', $row->phone) }}">
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
                                            placeholder="vd: " value="{{ old('name', $row->name) }}">
                                        @if ($errors->has('name'))
                                            <div class="text-danger">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label>Giới tính</label><br>
                                        <input type="radio" name="gender" id="nam" value="0"
                                            {{ old('gender', $row->gender) == 0 ? 'checked' : ' ' }}><label
                                            for="nam">Nam</label>
                                        <input type="radio" name="gender" id="nu" value="1"
                                            {{ old('gender', $row->gender) == 1 ? 'checked' : ' ' }}><label
                                            for="nu">Nữ</label>
                                    </div>
                                    <div class="mb-3">
                                        <label>Quyền truy cập</label><br>
                                        <input type="radio" name="roles" id="nam" value="0"
                                            {{ old('roles', $row->roles) == 0 ? 'checked' : ' ' }}><label for="nam">Khách hàng</label>
                                        <input type="radio" name="roles" id="nu" value="1"
                                            {{ old('roles', $row->roles) == 1 ? 'checked' : ' ' }}><label for="nu">Admin</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address">Địa chỉ</label>
                                        <input name="address" id="address" type="text" class="form-control "
                                            placeholder="vd:" value="{{ old('address', $row->address) }}">
                                        @if ($errors->has('address'))
                                            <div class="text-danger">
                                                {{ $errors->first('address') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="image">Hình đại diện</label>
                                        <input type="checkbox" name="def_image" value="1"
                                            {{ old('def_image') == 1 ? 'checked' : '' }}>(Mặc định)
                                        <input name="image" id="image" type="file" class="form-control btn-sm"
                                            value="{{ old('image', $row->image) }}">
                                        @if ($errors->has('image'))
                                            <div class="text-danger">
                                                {{ $errors->first('image') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="status">Trạng thái</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" {{ old('status', $row->status) == 1 ? 'selected' : ' ' }}>
                                                Xuất bản</option>
                                            <option value="2" {{ old('status', $row->status) == 2 ? 'selected' : ' ' }}>
                                                Không xuất bản</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button name="THEM" type="submit" class="btn btn-sm btn-success">
                                        <i class="fas fa-save"></i>Lưu[Sửa]
                                    </button>
                                    <a class="btn btn-sm btn-info" href="{{ route('user.index') }}">
                                        <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                    </div>
                    <!-- /.card -->
                </form>
            </section>
            <!-- /.content -->
        </div>
    </section>

@endsection

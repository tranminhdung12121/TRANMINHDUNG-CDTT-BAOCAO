<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Events\MessageSending;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Validator;

class SiteLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getlogin()
    {
        return view('frontend.login');
    }
    public function getregister()
    {        
        return view("frontend.register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postregister(Request $request)
    {

        $row = new User();
        $row->name = $request->name;
        $row->username = $request->username;
        $row->password = Hash::make($request->password);
        $row->email = $request->email;
        $row->gender = $request->gender;
        $row->phone = $request->phone;
        $row->address = $request->address;
        $row->roles = 0;
        // $row->level = 1;
        $row->status = 1;
        $row->created_at = date('Y-m-d H:i:s');
        $row->created_by = ($request->session()->exists('user_id') ? session('user_id') : 1);
        //upload file
        if ($request->hasFile('image')) {
            $path = 'images/user/';
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $row->username . '.' . $extension;
            $file->move($path, $filename);
            $row->image = $filename;
        } else {
            if ($row->gender) {
                $row->image = 'user_women.png';
            } else {
                $row->image = 'user_men.png';
            } 
        }
        if ($row->save()) {
            return redirect()->route('site.getlogin')->with('message', ['type' => 'success', 'msg' => 'Tạo tài khoảng thành công!']);
        }
        return redirect()->route('site.getlogin')->with('message', ['type' => 'danger', 'msg' => 'Thêm thất bại!!']);
    }
    
    public function postlogin(Request $request)
    {      
        $username = $request->username;
        $password = $request->password;
        $data = array('password' => $password);
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $data['email'] = $username;
        } else {
            $data['username'] = $username;
        }
        $remember = $request->has('remember');
        if (Auth::guard('users')->attempt($data, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('site.index');
        }
        $error_login = "Thông tin đăng nhập không chính xác";
        return view('frontend.login',compact('error'));
    }
    public function logout(Request $request)
    {
        Auth::guard('users')->logout();
        return redirect()->route('site.index');
    }
}

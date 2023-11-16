<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SiteAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function myaccount()
    {
        $user = Auth::guard('users')->user();
        return view('frontend.account', compact('user'));
    }

    // public function getaccount()
    // {
    //     // // $user = User::where([['status', '!=', '0'], ['id', '=', $id], ['roles', '!=', '0']])->first();
    //     // $user = User::where([['status', '!=', '0'], ['id', '=', $id]])->first();
    //     // if ($user == null) {
    //     //     return redirect()->route('site.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
    //     // }
    //     // $title = 'Sửa Thành Viên';
    //     return view('frontend.editaccount');
    // }

    // public function editaccount(Request $request, $id)
    // {

    //     $user = User::find($id);
    //     $user->name = $request->name;
    //     $user->username = $request->username;
    //     if ($request->password != null) {
    //         $user->password = Hash::make($request->password);
    //     }
    //     $user->email = $request->email;
    //     $user->gender = $request->gender;
    //     $user->phone = $request->phone;
    //     $user->address = $request->address;
    //     $user->roles = $request->roles;
    //     // $user->roles = 1;
    //     // $user->level = 1;
    //     $user->status = $request->status;
    //     $user->created_at = date('Y-m-d H:i:s');
    //     $user->created_by = ($request->session()->exists('user_id') ? session('user_id') : 1);
    //     //upload file

    //     if ($request->def_image == 1) {
    //         if ($user->gender) {
    //             $user->image = 'user_women.png';
    //         } else {
    //             $user->image = 'user_men.png';
    //         }
    //     }
    //     if ($request->hasFile('image')) {
    //         $path = 'images/user/';
    //         if (File::exists(public_path($path . $user->image)) && ($user->image != 'user_women.png') && ($user->image != 'user_men.png')) {
    //             File::delete(public_path($path . $user->image));
    //         }
    //         $file = $request->file('image');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = $user->username . '.' . $extension;
    //         $file->move($path, $filename);
    //         $user->image = $filename;
    //     } else {
    //         if ($user->gender == 1 && (($user->image == 'user_women.png') || ($user->image == 'user_men.png'))) {
    //             $user->image = 'user_women.png';
    //         }
    //         if ($user->gender == 0 && (($user->image == 'user_women.png') || ($user->image == 'user_men.png'))) {
    //             $user->image = 'user_men.png';
    //         }
    //     }
    //     if ($user->save()) {
    //         return redirect()->route('site.index')->with('message', ['type' => 'success', 'msg' => 'Cập nhật thành công!']);
    //     }
    //     return redirect()->route('site.edit')->with('message', ['type' => 'danger', 'msg' => 'Cập nhật thất bại!!']);
    // }
    public function edit()
    {
        $user = Auth::guard('users')->user();
        return view('frontend.editaccount', compact('user'));
    }
    public function postedit(Request $request)
    {
        $id = Auth::guard('users')->user()->id;
        Validator::extend('gmail', function ($attribute, $value, $parameters, $validator) {
            return Str::endsWith($value, '@gmail.com');
        });
        $user = User::find($id);
        $user->name = $request->name;
        if ($request->password != null) {
            if (!password_verify($request->password, $user->password)) {
                return redirect()->back()->with('message', ['type' => 'danger', 'msg' => 'Mật khẩu hiện tại không khớp với mật khẩu của bạn trong hệ thống']);
            }
            $user->password = bcrypt($request->new_password);
        }
        $user->email = $request->email;
        $parts = explode('@', $request->email);
        // $user->username = $parts[0];
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->updated_at = date('Y-m-d H:i:s');
        $user->updated_by = Auth::guard('users')->user()->id;
        //upload file

        if ($request->def_image == 1) {
            if ($user->gender) {
                $user->image = 'user_women.jpg';
            } else {
                $user->image = 'user_men.jpg';
            } 
        }
        if ($request->hasFile('image')) {
            $path = 'images/user/';
            if (File::exists(public_path($path . $user->image)) && ($user->image != 'user_women.jpg') && ($user->image != 'user_men.jpg')) {
                File::delete(public_path($path . $user->image));
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $user->username . '.' . $extension;
            $file->move($path, $filename);
            $user->image = $filename;
        } else {
            if ($user->gender == 1 && (($user->image == 'user_women.jpg') || ($user->image == 'user_men.jpg'))) {
                $user->image = 'user_women.jpg';
            }
            if ($user->gender == 0 && (($user->image == 'user_women.jpg') || ($user->image == 'user_men.jpg'))) {
                $user->image = 'user_men.jpg';
            }
        }
        if ($user->save()) {
            return redirect()->route('site.myaccount')->with('message', ['type' => 'success', 'msg' => 'Cập nhật thành công!']);
        }
        return redirect()->route('site.myaccount')->with('message', ['type' => 'danger', 'msg' => 'Cập nhật thất bại!!']);
    }
}

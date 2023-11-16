<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Config;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\ConfigStoreRequest;
use App\Http\Requests\ConfigUpdateRequest;

class ConfigController extends Controller
{
    #danh sach
    public function index()
    {
        $list = Config::where('status', '<>', '0')->get();
        return view('backend.config.index', compact('list'));
    }
 
    #THEM
    public function create()
    {
        $list = Config::where('status', '<>', '0')->get();        
        return view('backend.config.create');
    }



    public function store(ConfigStoreRequest $request)
    {
        $row = new Config();
        $row->name = $request->name;
        $row->address = $request->address;
        $row->author = $request->author;
        $row->phone = $request->phone; 
        $row->email = $request->email; 
        $row->facebook = $request->facebook; 
        $row->twitter = $request->twitter; 
        $row->youtube = $request->youtube; 
        $row->created_at =date('Y-m-d H:i:s');
        $row->created_by = 1;
        $row->status = $request->status;
        //up load file
        $file = $request->file('image');
        if ($file != NULL) {
            $extention = $file->getClientOriginalExtension();
            if (in_array($extention, ['png', 'jpg', 'jpeg', 'webp'])) {
                $fileName = $row->name.'.'.$extention;
                $file->move(public_path('images/config'), $fileName);
                $row->image = $fileName;
            }
        }
        
        //$config->image=$request->image;
        $row->save();
        return redirect()->route('config.index')->with('message', ['type' => 'success','msg' => 'Thêm cấu hình thành công!']);
    }

  
    public function show($id)
    {
        $row = Config::find($id);
        if($row==NULL)
        {
            return redirect()->route('config.index')->with('message', ['type' => 'danger','msg' => 'Mẫu tin không tồn tại!']);
        }
        $title = 'Chi tiết mẫu tin';
        return view('backend.config.show',compact('row','title'));
    }

   
    public function edit($id)
    {
        $row = Config::find($id);
        if($row==NULL)
        {
            return redirect()->route('config.index')->with('message', ['type' => 'danger','msg' => 'Mẫu tin không tồn tại!']);
        }
        $list = Config::where('status', '<>', '0')->get();        
        $title = 'Cập nhật mẫu tin';
        return view('backend.config.edit',compact('row','title'));
    }

   
    public function update(ConfigUpdateRequest $request, $id)
    {
        $row = Config::find($id);
        $row->name = $request->name;
        $row->address = $request->address;
        $row->author = $request->author;
        $row->phone = $request->phone; 
        $row->email = $request->email; 
        $row->facebook = $request->facebook; 
        $row->twitter = $request->twitter; 
        $row->youtube = $request->youtube; 
        $row->created_at =date('Y-m-d H:i:s');
        $row->created_by = 1;
        $row->status = $request->status;
        //up load file
        $file = $request->file('image');
        if ($file != NULL) {
            $extention = $file->getClientOriginalExtension();
            if (in_array($extention, ['png', 'jpg', 'jpeg', 'webp'])) {
                $fileName = $row->name.'.'.$extention;
                $file->move(public_path('images/config'), $fileName);
                $row->image = $fileName;
            }
        }
        
        //$config->image=$request->image;
        $row->save();
        return redirect()->route('config.index')->with('message', ['type' => 'success','msg' => 'Cập nhật mẫu tin thành công!']);
    }

    
    public function destroy($id)
    {
        $row = Config::find($id);
        if($row==NULL)
        {
            return redirect()->route('config.index')->with('message', ['type' => 'danger','msg' => 'Mẫu tin không tồn tại!']);
        }
        $row->delete();
        return redirect()->route('config.trash')->with('message', ['type' => 'success','msg' => 'Xóa mẫu tin thành công!']);
    }


    public function trash()
    {
        $list = Config::where('status', '=', '0')->orderBy('created_at', 'desc')->get();
        return view('backend.config.trash', compact('list'));
    }


    
    public function delete($id)
    {
        $row = Config::find($id);
        if($row==NULL)
        {
            return redirect()->route('config.index')->with('message', ['type' => 'danger','msg' => 'Mẫu tin không tồn tại!']);
        }
        else
        {
         $row->status = 0;
         $row->updated_at =date('Y-m-d H:i:s');
         $row->updated_by = 1;
         $row->save();
        return redirect()->route('config.index')->with('message', ['type' => 'success','msg' => 'Xóa vào thùng rác thành công!']);
        }
        
    }


    public function restore($id)
    {
        $row = Config::find($id);
        if($row==NULL)
        {
            return redirect()->route('config.index')->with('message', ['type' => 'danger','msg' => 'Mẫu tin không tồn tại!']);
        }
        else
        {
            $row->status = 2;
            $row->updated_at=date('Y-m-d H:i:s');
            $row->updated_by =1;
            $row->save();
        return redirect()->route('config.index')->with('message', ['type' => 'success','msg' => 'Khôi phục thành công!']);
        }
        
    }
    
    
    public function status($id)
    {
        $row = Config::find($id);
        if($row==NULL)        {
            return redirect()->route('config.index')->with('message', ['type' => 'danger','msg' => 'Mẫu tin không tồn tại!']);        }
        else
        {
         $row->status = ($row->status == 1) ? 2 : 1;
         $row->updated_at =date('Y-m-d H:i:s');
         $row->updated_by = 1;
         $row->save();
        return redirect()->route('config.index')->with('message', ['type' => 'success','msg' => 'Thay đổi trạng thái thành công!']);
        }
        
    }
}

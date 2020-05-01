<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\ResetPassword;
use App\models\device;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class DeviceController extends Controller
{
    public function index()
    {
        if (!in_array('viewDevice',\Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = ucwords(str_replace('-',' ',request()->segment(2)));
        if (request()->ajax()) {
            return datatables()->of(device::where("user_id",'=',auth()->user()->id)->get())
                ->addColumn('checkbox',function($data){
                    return '<input type="checkbox" class="delete_checkbox flat" value="'.$data->id.'">';
                })->addColumn('action',function($data){
                    $actions='<button title="Edit" type="button" name="edit" id="'.$data->id.'" class="edit btn btn-info btn-sm"><i class="fa fa-edit"></i></button>&nbsp;
                              <button title="Link" type="button" name="link" id="'.$data->id.'" class="link btn btn-primary btn-sm"><i class="fa fa-chain"></i></button>&nbsp;
                              <button title="Delete" type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>&nbsp;';
                    return $actions;
                })->rawColumns(['checkbox','action'])
                ->make(true);
        }
        return view('admin.'.request()->segment(2).'.list')->with($content);
    }

    public function view($id)
    {
        if (!in_array('viewDevice',\Request::get('permission'))) {
            return redirect('admin');
        }
        if (request()->ajax()) {
            $data["data"] = device::findOrFail($id);
            return response()->json($data);
        }
    }

    public function view_devices($id)
    {
        if (request()->ajax()) {
            $data["devices"] = device::where("user_id",$id)->get();
            return response()->json($data);
        }
    }

    public function update($id)
    {
        if (!in_array('updateDevice',\Request::get('permission'))) {
            return redirect('admin');
        }
        if (request()->ajax()) {
            $device = device::where("id",$id)->update(
                [
                    "device_name"=>request()->get("device_name"),
                    "device_description"=>request()->get("device_description")
                ]
            );
        }
    }

    public function store(Request $request){
        if (!in_array('createDevice',\Request::get('permission'))) {
            return redirect('admin');
        }
        $countDevices=device::where("user_id",$request->get("id"))->count();
        if ($countDevices<5) {
            $device = new device();
            $device->device_name = $request->get('device_name');
            $device->device_description = $request->get('device_description');
            $device->user_id = $request->get("id");
            $device->save();
            echo 1;
        }else{
            echo 0;
        }
    }

    public function link_profile_url($id){
        if (!in_array('updateDevice',\Request::get('permission'))) {
            return redirect('admin');
        }
        $device=device::find($id);
        $device->profile_url=request()->get('profile_url');
        $device->save();
    }

    public function get_profile_url($id){
        if (!in_array('updateDevice',\Request::get('permission'))) {
            return redirect('admin');
        }
        $device=device::find($id);
        return $device;
    }

    public function destroy($id)
    {
        if (!in_array('deleteDevice',\Request::get('permission'))) {
            return redirect('admin');
        }
        $data = device::findOrFail($id);
        $data->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if (!in_array('deleteDevice',\Request::get('permission'))) {
            return redirect('admin');
        }
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i=0; $i < count($id); $i++) {
                $data = device::findorFail($id[$i]);
                $data->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }

}

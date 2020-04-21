<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index()
    {
        if (!in_array('viewCompany', \Request::get('permission'))) {
            return redirect('admin');
        }
        $content['title'] = ucwords(str_replace('-', ' ', request()->segment(2)));
//        dd(User::latest()->where('role_id',2)->get());
        if (request()->ajax()) {
            return datatables()->of(User::latest()->where([['role_id', "=", 5], ['acc_type', "=", "company"]])->get())
                ->addColumn('image', function ($data) {
                    return '<img width="65" src="' . asset(!empty($data->profile_picture) ? $data->profile_picture : 'assets/admin/images/placeholder.png') . '">';
                })
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="delete_checkbox flat" value="' . $data->id . '">';
                })
                ->addColumn('profile_link', function ($data) {
                    return '<a target="_blank" href="' . route('pro', $data->id) . '">' . $data->first_name . '</a>';
                })->addColumn('action', function ($data) {
                    return '<button title="View" type="button" name="view" id="' . $data->id . '" class="view btn btn-info btn-sm"><i class="fa fa-eye"></i></button>&nbsp;<button title="Show Employees" type="button" name="show_emp" id="' . $data->id . '" class="show_emp btn btn-info btn-sm"><i class="fa fa-user"></i></button>&nbsp;<button title="Reset Password" type="button" name="reset_password" id="'.$data->id.'" class="reset_password btn btn-warning btn-sm"><i class="fa fa-key"></i></button>&nbsp;<button title="Add Employee" type="button" name="add_employee" id="'.$data->id.'" class="add_employee btn btn-primary btn-sm"><i class="fa fa-user-plus"></i></button>&nbsp;<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                })->rawColumns(['checkbox', 'action', 'image', 'profile_link'])->make(true);
        }
        return view('admin.' . request()->segment(2) . '.list')->with($content);
    }


    public function view($id)
    {
        if (request()->ajax()) {
            $data = User::findOrFail($id);
            return response()->json($data);
        }
    }

    public function view_employees($id)
    {
        if (request()->ajax()) {
            return datatables()->of(User::where("parent_id", "=", $id)->get())->make(true);
        }
    }

    public function destroy($id)
    {
        if (!in_array('deleteCompany', \Request::get('permission'))) {
            return redirect('admin');
        }
        $data = User::findOrFail($id);
        $data->delete();
        echo "Deleted Successfully.";
    }

    public function delete_all(Request $request)
    {
        if (!in_array('deleteCompany', \Request::get('permission'))) {
            return redirect('admin');
        }
        if ($request->input('checkbox_value')) {
            $id = $request->input('checkbox_value');
            for ($i = 0; $i < count($id); $i++) {
                $data = User::findorFail($id[$i]);
                $data->delete();
            }
            echo "Selected records Deleted Successfully.";
        }
    }

}

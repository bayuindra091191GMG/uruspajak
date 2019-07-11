<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function index(){
        return view('admin.setting.option');
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'password_new'          => 'required',
            'password_confirm'      => 'required|same:password_new'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator->errors())->withInput($request->all());

        $admin = Auth::guard('admin')->user();

        if(!Hash::check($request->input('password_current'), $admin->password)){
            return redirect()->back()->withErrors('Wrong Password!!', 'default')->withInput($request->all());
        }

        $admin->password = Hash::make($request->input('password_new'));
        $admin->save();

        Session::flash('success', 'Successfully changed password');
        return redirect()->route('admin.setting');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Location;
use App\Info;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $active = 'home';
        $data = Info::orderBy('created_at', 'desc')->paginate(15);
        return view('home', compact('active', 'data'));
    }

    public function info_detail($id)
    {
        $active = 'home';
        if(Info::where('id', $id)->exists()){
            $info = Info::find($id);
            return view('info_detail', compact('info', 'active'));
        }else{
            return back();
        }
    }

    public function delete_info($id)
    {
        if(Info::where('id', $id)->exists()){
            Info::find($id)->delete();
            return back();
        }else{
            return back();
        }
    }

    public function save_comment(Request $request)
    {
        $id = $request->id;
        $comment = $request->get('comment');
        $info = Info::find($id);
        $info->comment = $comment;
        $info->save();
        return [
            'data' => 'success',
            'message' => 'Saved successfully.'
        ];
    }

    public function save_sell(Request $request)
    {
        $sell = $request->sell;
        $id = $request->id;
        $info = Info::find($id);
        $info->sell = $sell;
        $info->save();
        return [
            'data' => 'success',
            'message' => 'Saved successfully.'
        ];
    }

    public function save_user_info(Request $request)
    {
        $name = $request->get('name');
        $first_name = $request->get('first_name');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $id = $request->id;
        $info = Info::find($id);
        $info->name = $name;
        $info->first_name = $first_name;
        $info->phone_number = $phone;
        $info->email = $email;
        $info->save();
        return [
            'data' => 'success',
            'message' => 'Saved successfully.'
        ];
    }

    public function get_all()
    {
        $info = Info::select('location', 'who', 'surface_type', 'energy', 'area', 'number_people', 'tax', 'name', 'first_name', 'phone_number', 'email', 'site_url', 'comment', 'sell', 'eligble', 'created_at')->orderBy('created_at','desc')->get();
        return response()->json($info);
    }


    public function change_password(Request $request)
    {
        $cur_password = $request['old_password'];
        $new_password = $request['new_password'];
        if(!Hash::check($cur_password, Auth::user()->password)){
            $errors = ['error' => 'The old password is incorrect.'];
            return $errors;
        }else{
            DB::table('users')
                ->where('id', Auth::user()->id)
                ->update([
                    'password' => Hash::make($new_password),
            ]);
            return [
                'success' => 'The password was changed successfully.'
            ];
        }
    }

    public function change_profile(Request $request)
    {
        $user = Auth::user();
        if($request->get('username') != ''){
            $user->name = $request->get('username');
        }
        if($request->get('email') != ''){
            $user->email = $request->get('email');
        }
        $user->update();
        return [
            'success' => 'success'
        ];
    }
}

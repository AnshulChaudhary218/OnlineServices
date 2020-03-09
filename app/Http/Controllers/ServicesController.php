<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ServicesController extends Controller
{
    public function standard()
    {
        if(!Auth::check()){
            return Redirect::back()->with('alert','Please login to continue!');
        }   
        $id = Auth::user()->id;
        DB::table('confirmations')->insert(['userId'=>$id,'serviceId'=>1]);
        return redirect::back()->with('success','Service Requested!');
    }

    public function pro()
    {
        if(!Auth::check()){
            return Redirect::back()->with('alert','Please login to continue!');
        }
        $id = Auth::user()->id;
        DB::table('confirmations')->insert(['userId'=>$id,'serviceId'=>2]);
        return redirect::back()->with('success','Service Requested!');
    }

    public function enterprise()
    {
        if(!Auth::check()){
            return Redirect::back()->with('alert','Please login to continue!');
        }
        $id = Auth::user()->id;
        DB::table('confirmations')->insert(['userId'=>$id,'serviceId'=>3]);
        return redirect::back()->with('success','Service Requested!');
    }

    public function confirmation()
    {
        $data = DB::table('confirmations')->get();
        $temp_arr = [];
        foreach($data as $dat){
            $temp_arr[] = $dat;
        }
        return view('pages.confirmation')->with('temp_arr',$temp_arr);
    }

    public function accept($userId,$serviceId)
    {
        DB::table('active_services')->insert(['userId'=>$userId,'serviceId'=>$serviceId]);
        DB::table('confirmations')->where('userId',$userId)->where('serviceId',$serviceId)->delete();
        return redirect::back();
        // return($userId);
    }
}

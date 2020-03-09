<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class ContactController extends Controller
{
    public function message(Request $request)
    {
        $name = $request->input('user_name');
        $email = $request->input('user_email');
        $subject = $request->input('user_subject');
        $message = $request->input('user_message');
        DB::table('contact')->insert(['name'=>$name,'email'=>$email,'subject'=>$subject,'message'=>$message]);
        return redirect('/');
    }
}

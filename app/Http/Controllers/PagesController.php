<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }

    public function emailVerifyNotice(Request $request)
    {
        return view('pages.email_verify_notice');
    }

    public function test()
    {
        $arr = [3, 8, 9, 89, 23, 87,22];
       $collect  = collect([1, 2, 3, 4, 5]);
        $collect->each(function ($value, $key) use (&$arr) {
//            dd($arr);
            $new_clients = array_splice($arr, 0, 1);
        });
        dd($arr);
    }
}

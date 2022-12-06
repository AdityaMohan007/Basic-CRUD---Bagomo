<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user_form');
    }
    public function store(Request $request)
    {
        $row = new User();
        $row->name = $request->user_name;
        $row->email = $request->email;
        $user = User::whereMobile($request->mobile)->first();
        if (User::whereMobile($request->mobile)->exists())
        {
            // if mobile number already exist, form is redirected to show the details of the user with that mobile number
            $mob = $user->mobile;
            return view('view_form', compact('user'));
        }
        else
        {
            $row->mobile = $request->mobile;
            $row->blood_group = $request->blood_group;
            $row->save();
            return redirect(route('user.list'));
        }
    }

    public function view()
    {
        return view('view_form');
    }
    public function list()
    {
        $list = User::all();
        return view('user_list', compact('list'));
    }




}

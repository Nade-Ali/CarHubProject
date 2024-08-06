<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\SignupModel;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("frontend.signup");
    }

    public function submitMessage(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'email|required',
                'password' => 'required',
                'confirmpassword' => 'required|same:password'
            ]
        );

        $signup = new SignupModel();
        $signup->name = $request->name;
        $signup->email = $request->email;
        $signup->password = $request->password;
        $signup->confirmpassword = $request->confirmpassword;
        $signup->save();
        return back()->withSuccess('Register Successfully');
    }

}

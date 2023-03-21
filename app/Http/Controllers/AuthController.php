<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        try
        {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->route('index')
                            ->withSuccess('Signed in');
            }

            return redirect("login")->withSuccess('Login details are not valid');
        } catch (ValidationException $e) {
            return redirect()->back()->with("danger", $e->validator->errors()->first());

        } catch (\Exception $e) {
            return redirect()->back()->with("danger", $e->getMessage());

        }
    }



    /*
    Register
    */

    public function register(Request $request) {
        try{
            $this->validate($request, [
                'fullname' => 'string|between:2,100',
                'address' => 'string|between:2,100',
                'phone' => 'string',
                'email' => 'string|email|max:100|unique:users',
                'password' => 'string|confirmed|min:6',
            ]);

            $user = User::create([
                'fullname' => $request->fullname,
                'address' => $request->address,
                'phone' => $request->phone,
                'password' => bcrypt($request->password),
                // 'validId' => $idname,

            ]);
            return redirect()->route('index')->withSuccess('Signed in');
        } catch (ValidationException $e) {
            return redirect()->back()->with("danger", $e->validator->errors()->first());
        } catch (\Exception $e) {
            return redirect()->back()->with("danger", $e->validator->errors()->first());
        }
    }


}

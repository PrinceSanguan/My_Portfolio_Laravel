<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class SendMessageController extends Controller
{
    public function welcomePage() {
        return view ('welcome');
    }

    public function getMessage(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'captcha' => 'required|captcha',
        ]);

        // Check if user with the provided email already exists
        $existingUser = User::where('email', $request->input('email'))->first();
    
        if ($existingUser) {
            // User with the same email already exists, redirect to the error page
            $error = "You have entered an Repeat Email Address";
            return redirect()->route('error')->with('error', $error);
        }
    
        // Check if validation fails
        if ($validator->fails()) {
            $error = "You have entered an invalid Captcha";
            return redirect()->route('error')->with('error', $error);
        }
    
        // Saving in the database
        $post = new User;
    
        $data = ([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'created_at' => now(),
        ]);
    
        $post->insert($data);
    
        return redirect()->route('show.success');
    }

    public function showSuccess() {
        return view ('success');
    }

    public function reloadCaptcha() {
        return response()->json(['captcha'=>captcha_img('math')]);
    }

    public function resume() {
        return view ('resumes');
    }

    public function error() {
        return view ('error');
    }
}

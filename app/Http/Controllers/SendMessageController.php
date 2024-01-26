<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ContactInformation;
use Illuminate\Support\Facades\Session;
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
        $existingEmail = ContactInformation::where('email', $request->input('email'))->first();
    
        if ($existingEmail) {
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
        $post = new ContactInformation;
    
        $data = ([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'created_at' => now(),
        ]);
    
        $post->insert($data);
    
        $success = "Thank you for reaching out. Your 
        inquiry is important to me. Please anticipate a response within 24 hours. 
        Appreciate your patience.";

        return redirect()->route('show.success')->with('success', $success);
    }

    public function loginUser() {
        return view ('login');
    }

    public function loginPost(Request $request) {
        // Validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Authentication
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        } else {
            // Authentication failed, redirect back with errors
            return redirect()->route('login')->withErrors(['error' => 'Invalid credentials.']);
        } 
    }

    public function dashboard() {
        return view ('admin.dashboard');
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

    /////////////////This Code Is For Logout////////////////////////////////////////
    public function logout() {

        Session::flush();
        Auth::logout();

        return redirect()->route('welcome.page');
    }
    /////////////////This Code Is For Logout////////////////////////////////////////

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SendMessageController extends Controller
{
    public function welcomePage() {
        return view ('welcome');
    }

    public function getMessage(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

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
        return response()->json(['captcha'=>captcha_img()]);
    }
}

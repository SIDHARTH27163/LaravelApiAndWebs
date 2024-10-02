<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailVerificationController extends Controller
{
    public function show(Request $request)
    {

        $email = $request->session()->get('email');

        // Check if the email exists
        if (!$email) {
            return redirect()->route('register')->withErrors(['email' => 'Email not found. Please register again.']);
        }

        // Pass the email to the view
        return view('auth.verify-email', compact('email'));
    }

    public function verify(Request $request)
    {

        $request->validate(['otp' => 'required|numeric']);

        $user = User::where('email', $request->session()->get('email'))->first();

        if ($user && $user->otp == $request->otp) {
            $user->email_verified_at = now();
            $user->otp = null; // clear the OTP
            $user->save();

            return redirect()->route('admin.dashboard')->with('success', 'Email verified successfully.');
        }

        return back()->withErrors(['otp' => 'Invalid OTP']);
    }
}

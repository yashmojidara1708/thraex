<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (session()->has('user')) {
            return redirect()->route('admin.dashboard');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data['email'] = isset($request->email) ? $request->email : '';
        $data['password'] = isset($request->password) ? $request->password : '';

        $user = User::where('email', $data['email'])->first();
        // $user->password = "";

        if (!empty($user) && !empty($user->password)) {
            if ($user && Hash::check($data['password'], isset($user->password) ?  $user->password : '')) {
                Auth::login($user);
                $request->session()->regenerate();

                session([
                    'user' => [
                        'id' => $user->id,
                        'email' => $user->email,
                        'name' => $user->name
                    ]
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Login successful.',
                    'user' => [
                        'id' => $user->id,
                        'email' => $user->email,
                    ],
                    'redirect' => route('admin.dashboard')
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid email or password.'
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User not found or Password is empty.'
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}

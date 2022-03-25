<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('client')->attempt($credentials))
        {
            $request->session()->regenerate();

            $client = Client::where('email', $request->email)->first();
            $message = array(['success' => true, $client]);
            //return response()->json($message);
            Session::put('client', $client);
            return redirect('/');
        }

        else 
        {
            $message = array(['success' => false]);
            //return response()->json($message);
            return back();
        }
    }

    public function logout()
    {
        Auth::guard('client')->logout();
        Session::remove('client');

        /* $request->session()->invalidate();

        $request->session()->regenerateToken(); */

        $message = array(['logout' => 'true']);
        //return response()->json($message);
        return redirect('/');
    }
}

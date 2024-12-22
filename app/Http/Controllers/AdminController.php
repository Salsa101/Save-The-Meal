<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Donor;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /*************  ✨ Codeium Command ⭐  *************/
    /**
     * Menampilkan halaman login untuk admin.
     *
     * @return \Illuminate\Http\Response
     */
    /******  25010406-49f0-4ddb-bc73-44235445aa84  *******/
    public function login()
    {
        return view('auth.admin-login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Email atau password salah.');
    }

    public function dashboard()
    {
        $partners = Partner::all();
        $donors = Donor::all();
        $contacts = Contact::all();
        $volunteers = Volunteer::all();
        $beneficiaries = Beneficiary::all();

        return view('admin', compact('partners', 'donors', 'contacts', 'volunteers', 'beneficiaries'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'You have successfully logged out.');
    }


    public function __construct()
    {
        // Menambahkan middleware admin untuk memastikan hanya admin yang bisa mengakses dashboard
        $this->middleware('auth:admin')->only('dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([

            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email_address' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'reason_apply' => 'required|string',
        ]);

        Beneficiary::create($request->all());

        return redirect()->back()->with('success', 'Beneficiary successfully registered!');
    }

    public function destroy($id)
    {
        $beneficiary = Beneficiary::findOrFail($id);
        $beneficiary->delete();

        // $secretToken = 'secure_admin_token123';

        // return redirect()->route('admin.dashboard', ['admin_token' => $secretToken])->with('success', 'Beneficiary deleted successfully!');
        return redirect()->route('admin.dashboard')->with('success', 'Beneficiary deleted successfully!');
    }
}

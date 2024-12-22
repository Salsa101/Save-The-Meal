<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'contact_name' => 'required|string|max:255',
            'business_phone' => 'required|string|max:20',
            'email_address' => 'required|email|max:255',
            'restaurant_address' => 'required|string|max:255',
            'food_type' => 'required|string',
            'quantity_food' => 'required|integer|min:1',
            'delivery_method' => 'required',
            'courier_name' => 'required_if:delivery_method,Courier Service',
            'tracking_number' => 'required_if:delivery_method,Courier Service',
        ]);

        Donor::create($request->all());

        return redirect()->back()->with('success', 'Donation successfully registered!');
    }

    public function destroy($id)
    {
        $donor = Donor::findOrFail($id);
        $donor->delete();

        // $secretToken = 'secure_admin_token123';

        // return redirect()->route('admin.dashboard', ['admin_token' => $secretToken])->with('success', 'Donor deleted successfully!');
        return redirect()->route('admin.dashboard')->with('success', 'Donor deleted successfully!');

    }
}

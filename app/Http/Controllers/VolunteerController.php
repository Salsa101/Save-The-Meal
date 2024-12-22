<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteers = Volunteer::all();
        return view('volunteers', compact('volunteers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'quota' => 'required|integer',
        ]);

        Volunteer::create($request->all());

        return redirect()->back()->with('success', 'Volunteer created successfully!');
    }

    public function destroy($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();

        // $secretToken = 'secure_admin_token123';

        // return redirect()->route('admin.dashboard', ['admin_token' => $secretToken])->with('success', 'Volunteer deleted successfully!');
        return redirect()->route('admin.dashboard')->with('success', 'Volunteer deleted successfully!');

    }
}

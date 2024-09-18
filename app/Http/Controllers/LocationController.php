<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LocationController extends Controller
{
    // Display a listing of the locations.
    public function index()
    {
        $locations = Location::all();
        return view('admin.managelocations', compact('locations'));
    }

    // Show the form for creating a new location.
    public function create()
    {

        return view('admin.managelocations');
    }

    // Store a newly created location in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
        ]);

        // Handle image upload
        $imagePath = $request->file('image') ? $request->file('image')->store('locations', 'public') : null;

        Location::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'image' => $imagePath,
        ]);

        return redirect()->route('managelocations.index')->with('success', 'Location created successfully.');
    }

    // Show the form for editing the specified location.
    public function edit(Location $location , $id)
    {
        $location = Location::find($id);

        // Check if the record exists
        if (!$location) {
            // Handle the case where the record is not found
            return redirect()->route('managelocations.index')->with('error', 'Location not found.');
        }
        return view('admin.managelocations', compact('location'));
    }

    // Update the specified location in storage.
    public function update(Request $request, Location $location , $id)
    {
        $location = Location::find($id);

        // Check if the record exists
        if (!$location) {
            return redirect()->route('managelocations.index')->with('error', 'Location not found.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($location->image) {
                Storage::disk('public')->delete($location->image);
            }
            $imagePath = $request->file('image')->store('locations', 'public');
        } else {
            $imagePath = $location->image;
        }

        $location->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'image' => $imagePath,
        ]);

        return redirect()->route('managelocations.index')->with('success', 'Location updated successfully.');
    }

    // Remove the specified location from storage.
    public function destroy(Location $location , $id)
    {
        try {
            // Find the ITService record by ID
            $location = Location::findOrFail($id);
            if ($location->image) {
                Storage::disk('public')->delete($location->image);
            }

            // Delete the record
            $location->delete();

            // Redirect with success message
            return redirect()->route('managelocations.index')->with('success', 'Location deleted successfully.');
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Failed to delete IT Service: ' . $e->getMessage());

            // Redirect with error message
            return redirect()->route('managelocations.index')->with('error', 'Failed to delete IT Service.');
        }



    }
    public function changeStatus(Request $request, $id)
    {
        // Validate that the ID is provided in the request
        $location = Location::find($id);

        if (!$location) {
            return redirect()->route('managelocations.index')->with('error', 'Location not found.');
        }

        // Toggle the status value
        $currentStatus = $location->status;
        // $newStatus = !$currentStatus; // If current status is true, new status will be false and vice versa
        $newStatus = ($location->status === 'active') ? 'inactive' : 'active';
        // Update the location status
        $location->update([
            'status' => $newStatus,
        ]);

        return redirect()->route('managelocations.index')->with('success', 'Location status updated successfully.');
    }
}


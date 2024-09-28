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

        // Handle image upload directly to the public folder
        $imagePath = null; // Initialize the variable to hold the image path

        if ($request->file('image')) {
            // Generate a unique filename
            $imageName = time() . '_' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            // Move the uploaded image to the public/locations directory
            $request->file('image')->move(public_path('locations'), $imageName);
            // Set the image path to the relative URL
            $imagePath = 'locations/' . $imageName;
        }

        // Create a new location entry in the database
        Location::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'image' => $imagePath,
        ]);

        return redirect()->route('managelocations.index')->with('success', 'Location created successfully.');
    }

    // Show the form for editing the specified location.
    public function edit(Location $location, $id)
    {
        $location = Location::find($id);

        // Check if the record exists
        if (!$location) {
            return redirect()->route('managelocations.index')->with('error', 'Location not found.');
        }
        return view('admin.managelocations', compact('location'));
    }

    // Update the specified location in storage.
    public function update(Request $request, $id)
    {
        // Find the location record by ID
        $location = Location::find($id);

        // Check if the record exists
        if (!$location) {
            return redirect()->route('managelocations.index')->with('error', 'Location not found.');
        }

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($location->image) {
                $oldImagePath = public_path($location->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Delete the old image
                }
            }

            // Generate a unique filename for the new image
            $imageName = time() . '_' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            // Move the uploaded image to the public/locations directory
            $request->file('image')->move(public_path('locations'), $imageName);
            $imagePath = 'locations/' . $imageName; // Set the image path
        } else {
            $imagePath = $location->image; // Keep the old image if none is uploaded
        }

        // Update the location record
        $location->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'image' => $imagePath, // Save the path relative to public
        ]);

        return redirect()->route('managelocations.index')->with('success', 'Location updated successfully.');
    }

    // Remove the specified location from storage.
    public function destroy($id)
    {
        try {
            // Find the location record by ID
            $location = Location::findOrFail($id);

            // Delete the associated image from the public folder
            if ($location->image) {
                $imagePath = public_path($location->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete the image file
                }
            }

            // Delete the record
            $location->delete();

            // Redirect with success message
            return redirect()->route('managelocations.index')->with('success', 'Location deleted successfully.');
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Failed to delete location: ' . $e->getMessage());

            // Redirect with error message
            return redirect()->route('managelocations.index')->with('error', 'Failed to delete location.');
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
        $newStatus = ($location->status === 'active') ? 'inactive' : 'active';
        // Update the location status
        $location->update([
            'status' => $newStatus,
        ]);

        return redirect()->route('managelocations.index')->with('success', 'Location status updated successfully.');
    }
}

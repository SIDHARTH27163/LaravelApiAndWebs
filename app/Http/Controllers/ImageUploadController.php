<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()], 422);
        }

        // Handle the file upload
        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                // Define the path where you want to save the image
                $path = public_path('editor'); // Ensure the 'editor' directory exists
                $fileName = time() . '_' . $file->getClientOriginalName(); // Generate a unique file name
                $file->move($path, $fileName); // Move the file to the specified path

                // Construct the URL to access the uploaded file
                $url = asset('editor/' . $fileName);
                return response()->json(['url' => $url], 200);
            } else {
                return response()->json(['error' => 'No file uploaded'], 400);
            }
        } catch (\Exception $e) {
            // Log the exception
            \Log::error('Image upload failed: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to upload image'], 500);
        }
    }
}

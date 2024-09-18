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
                $path = $file->store('editor', 'public');
                $url = Storage::url($path);
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

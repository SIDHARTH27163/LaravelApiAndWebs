<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Gallery;

class GalleryService
{
    public function getGallery($model, $modelType)
    {
        return Gallery::where('model_id', $model->id)
                      ->where('model_type', $modelType)
                      ->get();
    }

    public function addImagesToGallery(Request $request, $model, $modelType)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        foreach ($request->file('images') as $image) {
            $imagePath = $image->store('gallery', 'public');

            Gallery::create([
                'model_id' => $model->id,
                'model_type' => $modelType,
                'image' => $imagePath,
            ]);
        }
    }

    public function deleteImageFromGallery($galleryId)
    {
        $gallery = Gallery::find($galleryId);
        if (!$gallery) {
            return false;
        }

        Storage::disk('public')->delete($gallery->image);
        $gallery->delete();

        return true;
    }
}

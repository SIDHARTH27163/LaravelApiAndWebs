<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Gallery;
use App\Services\GalleryService;
use App\Models\ITService;
use Illuminate\Http\Request;
/*
created by:Sidharth Guleria
task: performing the crud operations fot admin side it services
*/
class ITServiceController extends Controller
{
    protected $galleryService;

    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }

    public function index()
    {
        $itServices = ITService::all();
    return view('admin.manage-itservices', compact('itServices'));
    }

    public function create()
    {
        return view('admin.manage-itservices'); // Use the same template for create view
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        ITService::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('manageitservices.index')->with('success', 'IT Service created successfully.');

    }

        public function edit($id)
    {
        // Fetch the ITService record by ID
        $itService = ITService::find($id);

        // Check if the record exists
        if (!$itService) {
            // Handle the case where the record is not found
            return redirect()->route('itservices.index')->with('error', 'IT Service not found.');
        }

        // Pass the ITService model to the view
        return view('admin.manage-itservices', compact('itService'));
    }


    public function update(Request $request, $id)
    {
    // Retrieve the record by ID
    $itService = ITService::find($id);

    // Check if the record exists
    if (!$itService) {
        return redirect()->route('itservices.index')->with('error', 'IT Service not found.');
    }

    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:2048', // Optional image validation
    ]);

    // Update the record's attributes
    $itService->name = $request->input('name');
    $itService->description = $request->input('description');

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($itService->image) {
            Storage::disk('public')->delete($itService->image);
        }

        // Store the new image
        $imagePath = $request->file('image')->store('images', 'public');
        $itService->image = $imagePath;
    }

    // Save the record
    $itService->save();

    // Redirect with a success message
    return redirect()->route('manageitservices.index')->with('success', 'IT Service updated successfully.');
   }


    public function destroy(Request $request, $id)
    {
        try {
            // Find the ITService record by ID
            $itService = ITService::findOrFail($id);
            if ($itService->image) {
                Storage::disk('public')->delete($itService->image);
            }
            // Delete the record
            $itService->delete();

            // Redirect with success message
            return redirect()->route('manageitservices.index')->with('success', 'IT Service deleted successfully.');
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Failed to delete IT Service: ' . $e->getMessage());

            // Redirect with error message
            return redirect()->route('manageitservices.index')->with('error', 'Failed to delete IT Service.');
        }
    }

// manage gallery
        public function gallery($id)
        {
            $itservice =  ITService::find($id);
            if (!$itservice) {
                return redirect()->route('managecasestudies.index')->with('error', 'Case study not found.');
            }

            $galleries = $this->galleryService->getGallery($itservice,  ITService::class);

            return view('admin.itservicesgallery', compact('itservice', 'galleries'));
        }

        public function addImageToGallery(Request $request, $id)
        {
            $itservice =  ITService::find($id);
            if (!$itservice) {
                return redirect()->route('managecasestudies.index')->with('error', 'Case study not found.');
            }

            $this->galleryService->addImagesToGallery($request, $itservice,  ITService::class);

            return redirect()->route('managecasestudies.index', $itservice->id)
                            ->with('success', 'Gallery images added successfully.');
        }

        public function deleteImageFromGallery($id)
        {
            $deleted = $this->galleryService->deleteImageFromGallery($id);

            if (!$deleted) {
                return redirect()->back()->with('error', 'Image not found.');
            }

            return redirect()->back()->with('success', 'Image deleted successfully.');
        }
}

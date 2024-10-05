<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\TouristPlace;
use App\Models\TimeToVisit;
use App\Models\Activity;
use App\Models\Accommodation;
use App\Models\Tip;
use App\Models\Transportation;
use App\Models\PlacesGallery;
use App\Models\Location; // Assuming Location is a model
use App\Models\Category;
use Illuminate\Http\Request;

class TouristPlaceController extends Controller
{
    public function index(Request $request)
    {
        // Define the column you want to order by
        $orderByColumn = 'id'; // Replace with your column name

        // Get the search query from the request
        $search = $request->input('search');

        // Build the query with eager loading, ordering, and search filter
        $query = TouristPlace::with(['location', 'activities', 'accommodations', 'tips', 'transportations', 'timeToVisits'])
            ->orderBy($orderByColumn, 'desc'); // Ordering by descending


        // Paginate the results
        $touristPlaces = $query->simplePaginate(20);

        $categories = Category::where('table_name', 'tourist_places')->get();
        $locations = Location::where('status', 'active')->get(); // Fetch all locations for the dropdown

        return view('admin.manageplaces', compact('touristPlaces', 'locations', 'categories', 'search'));
    }


    public function create()
    {
        $locations = Location::all(); // Fetch locations for the dropdown
        return view('admin.manageplaces', compact('locations'));
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'location_id' => 'required|exists:locations,id',
            'title' => 'required|string|max:255',
            'category' => 'required',
            'about' => 'required|string',
            'time_to_visit' => 'required|string',
            'activity' => 'required|string',
            'accommodation' => 'required|string',
            'tip' => 'required|string',
            'transportation' => 'required|string',
            'gallery' => 'required|array', // Ensure gallery is an array
            'gallery.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate each image
        ]);

        // Handle creation within a transaction for data consistency
        \DB::transaction(function () use ($request) {
            // Handle TouristPlace
            $touristPlace = TouristPlace::create([
                'location_id' => $request->input('location_id'),
                'title' => $request->input('title'),
                'about' => $request->input('about'),
                'category' => $request->input('category'),
            ]);

            // Handle related models (TimeToVisit, Activity, etc.)
            TimeToVisit::create([
                'tourist_place_id' => $touristPlace->id,
                'time_to_visit' => $request->input('time_to_visit'),
            ]);

            Activity::create([
                'tourist_place_id' => $touristPlace->id,
                'activity' => $request->input('activity'),
            ]);

            Accommodation::create([
                'tourist_place_id' => $touristPlace->id,
                'accommodation' => $request->input('accommodation'),
            ]);

            Tip::create([
                'tourist_place_id' => $touristPlace->id,
                'tip' => $request->input('tip'),
            ]);

            Transportation::create([
                'tourist_place_id' => $touristPlace->id,
                'transportation' => $request->input('transportation'),
            ]);

            // Handle gallery images
            foreach ($request->file('gallery') as $image) {
                // Generate a unique image name
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                // Save image directly to the public/places_galleries directory
                $imagePath = $image->move(public_path('places_galleries'), $imageName);

                PlacesGallery::create([
                    'tourist_place_id' => $touristPlace->id,
                    'gallery' => 'places_galleries/' . $imageName, // Store the relative path in the database
                ]);
            }
        });

        // Redirect to the appropriate route with a success message
        return redirect()->route('touristplaces.index')->with('success', 'Tourist Place and related resources created successfully');
    }



    public function edit($id)
    {
        // Find the TouristPlace by ID
        $touristPlace = TouristPlace::findOrFail($id);
        $categories = Category::where('table_name', 'tourist_places')->get();
        // Fetch locations for the dropdown
        $locations = Location::all();

        // Fetch additional data specific to the TouristPlace
        $activities = $touristPlace->activities; // Assuming a 'activities' relationship exists
        $accommodations = $touristPlace->accommodations; // Assuming a 'accommodations' relationship exists
        $tips = $touristPlace->tips; // Assuming a 'tips' relationship exists
        $transportations = $touristPlace->transportations; // Assuming a 'transportations' relationship exists
        $time_to_visit= $touristPlace->time_to_visit;
        // Pass all data to the view
        return view('admin.manageplaces', compact('touristPlace', 'locations', 'activities', 'accommodations', 'tips', 'transportations' , 'time_to_visit' , 'categories'));
    }


    public function update(Request $request, $id)
    {

        // print_r($id);
        // die;
        \DB::transaction(function () use ($request, $id) {
            // Update TouristPlace
            $touristPlace = TouristPlace::findOrFail($id);
            $touristPlace->update([
                'location_id' => $request->input('location_id'),
                'title' => $request->input('title'),
                'about' => $request->input('about'),
            ]);

            // Update related models (TimeToVisit, Activity, etc.)
            $touristPlace->timeToVisits()->update([
                'time_to_visit' => $request->input('time_to_visit'),
            ]);

            $touristPlace->activities()->update([
                'activity' => $request->input('activity'),
            ]);

            $touristPlace->accommodations()->update([
                'accommodation' => $request->input('accommodation'),
            ]);

            $touristPlace->tips()->update([
                'tip' => $request->input('tip'),
            ]);

            $touristPlace->transportations()->update([
                'transportation' => $request->input('transportation'),
            ]);

            // Delete old gallery images
            $oldImages = PlacesGallery::where('tourist_place_id', $touristPlace->id)->get();
            foreach ($oldImages as $oldImage) {
                // Delete the file from the public folder
                $filePath = public_path($oldImage->gallery);
                if (file_exists($filePath)) {
                    unlink($filePath); // Use unlink to delete the file
                }
                // Delete the record from the database
                $oldImage->delete();
            }

            // Save the new gallery images
            foreach ($request->file('gallery') as $image) {
                // Generate a unique image name
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                // Move image directly to the public/places_galleries directory
                $imagePath = $image->move(public_path('places_galleries'), $imageName);

                PlacesGallery::create([
                    'tourist_place_id' => $touristPlace->id,
                    'gallery' => 'places_galleries/' . $imageName, // Store the relative path in the database
                ]);
            }
        });

        // Redirect to the appropriate route with a success message
        return redirect()->route('touristplaces.index')->with('success', 'Tourist Place and related resources updated successfully');
    }


    public function destroy($id)
    {
        $touristPlace = TouristPlace::findOrFail($id);

        \DB::transaction(function () use ($touristPlace) {
            // Delete related models
            $touristPlace->timeToVisits()->delete();
            $touristPlace->activities()->delete();
            $touristPlace->accommodations()->delete();
            $touristPlace->tips()->delete();
            $touristPlace->transportations()->delete();
            $touristPlace->gallery()->delete();

            // Delete the TouristPlace itself
            $touristPlace->delete();
        });

        // Redirect to the appropriate route with a success message
        return redirect()->route('touristplaces.index')->with('success', 'Tourist Place and related resources deleted successfully');
    }
    public function search(Request $request)
    {
        // Get the search query from the request
        $search = $request->input('search');

        // Build the query with eager loading and ordering
        $query = TouristPlace::with(['location', 'activities', 'accommodations', 'tips', 'transportations', 'timeToVisits'])
            ->orderBy('created_at', 'desc'); // Order by descending

        // Apply search filter
        if ($search) {
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('about', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%"); // You can add more fields to search
        }

        // Paginate the results
        $touristPlaces = $query->simplePaginate(20);

        $categories = Category::where('table_name', 'tourist_places')->get();
        $locations = Location::where('status', 'active')->get(); // Fetch all locations for the dropdown

        return view('admin.manageplaces', compact('touristPlaces', 'locations', 'categories'));
    }
    // change status
    public function changeStatus(Request $request, $id)
    {
        // Validate that the ID is provided in the request
        $touristPlace = TouristPlace::find($id);

        if (!$touristPlace) {
            return redirect()->route('touristplaces.index')->with('error', 'TouristPlace not found.');
        }

        // Toggle the status value
        $currentStatus = $touristPlace->status;
        // $newStatus = !$currentStatus; // If current status is true, new status will be false and vice versa
        $newStatus = ($touristPlace->status === 'active') ? 'inactive' : 'active';
        // Update the touristPlace status
        $touristPlace->update([
            'status' => $newStatus,
        ]);

        return redirect()->route('touristplaces.index')->with('success', 'Status updated successfully.');
    }
// methods for home user
protected function getTouristPlaceData(Request $request, $orderByColumn = 'id', $limit = 30)
{
    // Get the search query from the request
    $search = $request->input('search');

    // Build the query with eager loading, ordering, and search filter
    $query = TouristPlace::with(['location', 'activities', 'accommodations', 'tips', 'transportations', 'timeToVisits'])
        ->where('status', 'active') // Filter by status
        ->when($search, function ($query, $search) {
            // Apply search filter if provided
            return $query->where('name', 'like', "%{$search}%"); // Adjust the column to search as needed
        })
        ->orderBy($orderByColumn, 'desc'); // Ordering by descending

    // Limit the results
    $touristPlaces = $query->take($limit)->get();

    // Fetch categories and locations
    $categories = Category::where('table_name', 'tourist_places')
        ->where('status', 1) // Filter by status
        ->withCount(['touristPlaces' => function ($query) {
            $query->where('status', 'active'); // Filter tourist places by active status
        }])
        ->get();

    $locations = Location::where('status', 'active')->get(); // Fetch all active locations for the dropdown

    // Fetch the latest post
    $latestPost = TouristPlace::with(['location'])
        ->where('status', 'active')
        ->orderBy('created_at', 'desc')
        ->first();

    return compact('touristPlaces', 'categories', 'locations', 'latestPost', 'search');
}
// common methods ends
public function home(Request $request)
{
    // Fetch common data
    $data = $this->getTouristPlaceData($request, 'title', 30);

    // Slice the results into the desired segments
    $touristPlaces = $data['touristPlaces'];
    $firstItem = $touristPlaces->slice(0, 1);
    $firstSet = $touristPlaces->slice(1, 6);
    $staticItem = $touristPlaces->slice(7, 1);
    $secondSet = $touristPlaces->slice(8, 6);
    $posts = $touristPlaces->take(5);

    // Pass data to the view
    return view('touristplaces.touristplaces', array_merge($data, compact('firstItem', 'firstSet', 'staticItem', 'secondSet', 'posts')));
}

public function popularPlaces(Request $request)
{
    // Fetch common data
    $data = $this->getTouristPlaceData($request, 'id', 12);

    // Paginate the tourist places
    $touristPlaces = TouristPlace::with(['location', 'activities', 'accommodations', 'tips', 'transportations', 'timeToVisits'])
        ->where('status', 'active')
        ->when($data['search'], function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%");
        })
        ->orderBy('id', 'desc')
        ->paginate(12);

    $posts = $data['touristPlaces']->take(5);

    // Pass data to the view
    return view('touristplaces.popularplaces', array_merge($data, compact('touristPlaces', 'posts')));
}

public function viewtouristplace(Request $request , $title)
{

    $text=str_replace('-', ' ', $title);

    // Fetch common data
    $data = $this->getTouristPlaceData($request, 'id', 12);

    // Paginate the tourist places
    $touristPlaces = TouristPlace::with(['location', 'activities', 'accommodations', 'tips', 'transportations', 'timeToVisits'])
        ->where('status', 'active')
        ->when($data['search'], function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%");
        })
        ->orderBy('id', 'desc')
        ->paginate(12);

    $posts = $data['touristPlaces']->take(5);

    $query = TouristPlace::with([
        'location',
        'activities',
        'accommodations',
        'tips',
        'transportations',
        'timeToVisits',
        'gallery' // Eager load the gallery
    ])
    ->where('title', $text); // Filter by title

// Fetch the data
$touristPlace = $query->get();

    // Pass data to the view
    return view('touristplaces.viewplace', array_merge($data, compact('touristPlaces', 'posts' , 'touristPlace')));
}
public function filterByCategory(Request $request, $text)
{
    $category=str_replace('-', ' ', $text);

    // Fetch common data
    $data = $this->getTouristPlaceData($request, 'title', 30);

    // Filter tourist places by the selected category
    $touristPlaces = TouristPlace::with(['location', 'activities', 'accommodations', 'tips', 'transportations', 'timeToVisits'])
        ->where('status', 'active')
        ->where('category', $category) // Filter by category
        ->orderBy('title', 'asc') // You can adjust the order as needed
        ->paginate(12);

    // Fetch the latest post
    $latestPost = TouristPlace::with(['location'])
        ->where('status', 'active')
        ->orderBy('created_at', 'desc')
        ->first();

    // Fetch categories and locations
    $categories = Category::where('table_name', 'tourist_places')
        ->where('status', 1) // Filter by status
        ->withCount(['touristPlaces' => function ($query) {
            $query->where('status', 'active'); // Filter tourist places by active status
        }])
        ->get();

    $locations = Location::where('status', 'active')->get(); // Fetch all active locations for the dropdown

    // Fetch the top 5 popular places
    $posts = $touristPlaces->take(5);

    // Pass data to the view
    return view('touristplaces.filterbycategory', array_merge($data, compact('touristPlaces', 'categories', 'locations', 'latestPost', 'posts')));
}

}

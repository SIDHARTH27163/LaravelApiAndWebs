<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'table_name' => 'required',

        ]);

        Category::create($request->all());

         return redirect()->route('manage-categories.index')->with('success', 'Category created successfully.');
        // return($request);
    }

    public function show(Category $category)
    {
        return view('admin.categories', compact('category'));
    }


    public function edit(Category $category , $id)
    {
        $category = Category::find($id);

        // Check if the record exists
        if (!$category) {
            // Handle the case where the record is not found
            return redirect()->route('manage-categories.index')->with('error', 'category not found.');
        }
        return view('admin.categories', compact('category'));
    }


    public function update(Request $request, Category $category , $id)
    {
        $category = Category::find($id);

        // Check if the record exists
        if (!$category) {
            return redirect()->route('manage-categories.index')->with('error', 'Category not found.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'table_name' => 'required',

        ]);



        $category->update([
            'name' => $request->input('name'),
            'table_name'=> $request->input('table_name')
        ]);


        return redirect()->route('manage-categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category , $id)
    {

        $category = Category::findOrFail($id);


        $category->delete();

        return redirect()->route('manage-categories.index')->with('success', 'Category deleted successfully.');
    }
    public function changeStatus(Request $request, $id)
{
    // Validate that the ID is provided in the request
    $category = Category::find($id);

    if (!$category) {
        return redirect()->route('manage-categories.index')->with('error', 'Category not found.');
    }

    // Toggle the status value
    $currentStatus = $category->status;
    $newStatus = !$currentStatus; // If current status is true, new status will be false and vice versa

    // Update the category status
    $category->update([
        'status' => $newStatus,
    ]);

    return redirect()->route('manage-categories.index')->with('success', 'Category status updated successfully.');
}

}

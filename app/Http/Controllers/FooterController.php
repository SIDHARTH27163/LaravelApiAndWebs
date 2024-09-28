<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterContent;

class FooterController extends Controller
{
    /**
     * Show the specified footer content based on the type.
     *
     * @param  string  $type
     * @return \Illuminate\Http\Response
     */
    public function show($type)
    {
        $content = FooterContent::where('type', $type)->firstOrFail();
        return view('footer.show', compact('content'));
    }

    /**
     * Show the form for editing the specified footer content.
     *
     * @param  string  $type
     * @return \Illuminate\Http\Response
     */
    public function edit($type)
    {
        $content = FooterContent::where('type', $type)->firstOrFail();
        return view('admin.edit-footer', compact('content'));
    }

    /**
     * Update the specified footer content in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'content' => 'required|string',
        ]);

        // Find the footer content by ID and update it
        $content = FooterContent::findOrFail($id);
        $content->update($validatedData);

        // Redirect back to the admin dashboard or wherever necessary with a success message
        return redirect()->route('admin.dashboard')->with('success', 'Footer content updated successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class SendMessageController extends Controller
{
    public function welcomePage() {

        // Retrieve all projects
        $projects = Project::all();

        return view ('welcome', ['projects' => $projects]);
        
    }

    public function loginUser() {
        return view ('login');
    }

    public function loginPost(Request $request) {
        // Validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Authentication
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        } else {
            // Authentication failed, redirect back with errors
            return redirect()->route('login')->withErrors(['error' => 'Invalid credentials.']);
        } 
    }

    public function dashboard()
    {
        // Retrieve all projects
        $projects = Project::all();
    
        // Pass the information to the view
        return view('admin.dashboard', ['projects' => $projects]);
    }

    public function addProject(Request $request)
    {

        // Check if a file is uploaded
        if ($request->hasFile('file')) {
            // Store the file and get the path
            $path = $request->file('file')->store('/', ['disk' => 'my_disk']);
        } else {
            // Handle the case where no file is uploaded
            return redirect()->route('dashboard')->with('error', 'Please upload a project image.');
        }

        // Then insert into the database
        $project = new Project();
        $project->image = $path;
        $project->project = $request->input('project');
        $project->category = $request->input('category');
        $project->summary = $request->input('summary');
        $project->link = $request->input('link');
        $project->save();
    
        if (!$project) {
            return redirect()->route('dashboard')->with('error', 'Failed to create project.');
        }
    
        // Redirect with success message
        return redirect()->route('dashboard')->with('success', 'You have successfully added a project!');
    }

    public function deleteProject($projectId)
    {
        // Find the project by ID
        $project = Project::find($projectId);

        // Check if the Product exists
        if (!$project) {
            return redirect()->route('dashboard')->with('error', 'Failed to create project.');
        }

        // Get the image path from the product
        $imagePath = public_path('upload-image/' . $project->image);

        // Check if the image file exists and delete it
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Delete the project
        $project->delete();

        // Redirect with success message
        return redirect()->route('dashboard')->with('success', 'You have deleted the Project!');
    }

    public function addImage(Request $request)
    {
        // Validate the request data with custom error messages
        $request->validate([
            'files.*' => 'required|file|mimes:jpeg,png,jpg,gif,pdf|max:2048', // Adjust the maximum file size as needed
        ], [
            'files.*.required' => 'All files are required.',
            'files.*.file' => 'The uploaded file is not valid.',
            'files.*.mimes' => 'All files must be either an image (jpeg, png, jpg, gif) or a PDF.',
            'files.*.max' => 'Each file may not be greater than :max kilobytes.',
        ]);

        // Check if files are uploaded
        if ($request->hasFile('files')) {
            // Iterate over each file
            foreach ($request->file('files') as $file) {
                // Store the file and get the path
                $path = $file->store('/', ['disk' => 'my_disk']);

                // Saving in the database
                Images::create([
                    'project_id' => $request->input('project_id'),
                    'image' => $path,
                ]);
            }

            // Redirect with success message
        return redirect()->route('dashboard')->with('success', 'You have added image in the Project!');

        } else {
            // Handle the case where no file is uploaded
            return redirect()->route('dashboard')->with('error', 'Please upload at least one file.');
        }
    }

    public function viewImages(Request $request, $imageId)
    {
        // Fetch images content based on the image id
        $images = Images::where('project_id', $imageId)->get();
    
        // Return the images data as JSON
        return response()->json(['images' => $images]);
    }

    public function setProjectSession($id)
    {
        $project = Project::findOrFail($id);

        // Store the project ID in the session
        session(['project_id' => $id]);

        return redirect()->route('project');
    }       

    public function project()
    {
        // Retrieve the project ID from the session
        $projectId = session('project_id');

        if (!$projectId) {
            // Handle the case where the project ID is not found in the session
            abort(404);
        }

        $project = Project::findOrFail($projectId);
        $images = Images::where('project_id', $projectId)->get();

        return view('project', ['project' => $project, 'images' => $images]);
    }

}

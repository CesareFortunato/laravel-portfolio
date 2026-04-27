<?php

namespace App\Http\Controllers\Admin;
use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project();

        $newProject->title = $data['title'];
        $newProject->description = $data['description'];
        $newProject->image = $data['image'];
        $newProject->project_url = $data['project_url'];
        $newProject->type = $data['type'];
        $newProject->technologies = $data['technologies'];
        $newProject->is_published = $request->has('is_published');

        $slug = Str::slug($data['title']);
        $originalSlug = $slug;
        $counter = 1;

        while (Project::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $newProject->slug = $slug;

        $newProject->save();

        return redirect()->route('admin.projects.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->image = $data['image'];
        $project->project_url = $data['project_url'];
        $project->type = $data['type'];
        $project->technologies = $data['technologies'];
        $project->is_published = $request->has('is_published');

        $project->update();

        return redirect()->route('admin.projects.show', $project);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

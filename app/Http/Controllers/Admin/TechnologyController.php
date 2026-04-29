<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::all();
        return view('admin.technologies.index', compact('technologies'));
    }

    public function create()
    {
        return view('admin.technologies.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'color' => 'required|string|max:20',
        ]);

        Technology::create($data);

        return redirect()->route('admin.technologies.index');
    }

    public function edit(Technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    public function update(Request $request, Technology $technology)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'color' => 'required|string|max:20',
        ]);

        $technology->update($data);

        return redirect()->route('admin.technologies.index');
    }

    public function destroy(Technology $technology)
    {
        // 🔥 stacca tutte le relazioni con i project
        $technology->projects()->detach();

        // poi elimina la technology
        $technology->delete();

        return redirect()->route('admin.technologies.index');
    }
}
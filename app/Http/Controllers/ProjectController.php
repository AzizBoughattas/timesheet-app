<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\AttributeValue;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        // Filter by regular attributes
        if ($request->has('filters')) {
            foreach ($request->filters as $key => $value) {
                if (in_array($key, ['name', 'status'])) { 
                    $query->where($key, $value);
                }
            }
        }

        // Filter by EAV attributes
        if ($request->has('eav_filters')) {
            foreach ($request->eav_filters as $key => $value) {
                $query->whereHas('attributeValues', function ($q) use ($key, $value) {
                    $q->where('attribute_id', $key)->where('value', $value);
                });
            }
        }

        $projects = $query->get();

        return response()->json($projects);
    }

    public function store(StoreProjectRequest $request)
{
    $project = Project::create($request->validated());
    return response()->json($project, 201);
}
}

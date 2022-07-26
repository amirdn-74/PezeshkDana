<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourcesRequest;
use App\Models\Resource;
use Illuminate\Support\Facades\Request;

class ResourcesController extends Controller
{
    public function index()
    {
        $resources = Resource::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->orderByDesc('id')
            ->paginate(10)
            ->appends(request()->except('page'));

        return view(
            'panel.resourcesList',
            [
                'resources' => $resources
            ]
        );
    }

    public function create()
    {
        return view('panel.createResource');
    }

    public function store(ResourcesRequest $request)
    {
        Resource::create($request->all());

        return response()->redirectSuccess('resources.index', 'منبع جدید با موفقیت ایجار شد');
    }

    public function edit(Resource $resource)
    {
        return view('panel.editResource', [
            'resource' => $resource
        ]);
    }

    public function update(ResourcesRequest $request, Resource $resource)
    {
        $resource->name = $request->name;
        $resource->url = $request->url;
        $resource->status = $request->status;
        $resource->save();

        return response()->redirectSuccess('resources.index', 'منبع مورد نظر با موفقیت ویرایش شد');
    }
}

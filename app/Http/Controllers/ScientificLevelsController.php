<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScientificLevelRequest;
use App\Models\ScientificLevel;
use Illuminate\Support\Facades\Request;

class ScientificLevelsController extends Controller
{
    public function index()
    {
        $levels = ScientificLevel::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->orderByDesc('id')
            ->paginate(10)
            ->appends(request()->except('page'));

        return view('panel.manageScientificLevels', [
            'scientificLevels' => $levels
        ]);
    }

    public function create()
    {
        return view('panel.createScientificLevel');
    }

    public function store(ScientificLevelRequest $request)
    {
        ScientificLevel::create([
            'title' => $request->title
        ]);

        return response()
            ->redirectSuccess(
                'categories.scientificLevels.index',
                'سطح علمی جدید با موفقیت ساخته شد'
            );
    }

    public function edit(ScientificLevel $level)
    {
        return view('panel.editScientificLevel', [
            'level' => $level
        ]);
    }

    public function update(ScientificLevelRequest $request, ScientificLevel $level)
    {
        $level->title = $request->title;
        $level->save();

        return response()
            ->redirectSuccess(
                'categories.scientificLevels.index',
                'سطح علمی مورد نظر با موفقیت ویرایش شد'
            );
    }

    public function destroy(ScientificLevel $level)
    {
        $level->delete();

        return response()
            ->redirectSuccess(
                'categories.scientificLevels.index',
                'سطح علمی با موفقیت حذف شد'
            );
    }
}

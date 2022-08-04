<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttributesRequest;
use App\Models\Attribute;
use App\Models\Illness;
use Illuminate\Support\Facades\Request;

class AttributesController extends Controller
{
    public function index()
    {
        $attributes = Attribute::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->orderByDesc('id')
            ->paginate(10)
            ->appends(request()->except('page'));

        return view('panel.manageAttributes', [
            'attributes' => $attributes
        ]);
    }

    public function create()
    {
        return view('panel.createAttribute', [
            'illnesses' => Illness::all()
        ]);
    }

    public function store(AttributesRequest $request)
    {
        Attribute::create([
            'title' => $request->title,
            'illness_id' => $request->illness
        ]);

        return response()
            ->redirectSuccess(
                'categories.attributes.index',
                'ویژگی جدید با موفقیت ساخته شد'
            );
    }

    public function edit(Attribute $attribute)
    {
        return view('panel.editAttribute', [
            'attribute' => $attribute,
            'illnesses' => Illness::all()
        ]);
    }

    public function update(AttributesRequest $request, Attribute $attribute)
    {
        $attribute->title = $request->title;
        $attribute->illness_id = $request->illness;
        $attribute->save();

        return response()
            ->redirectSuccess(
                'categories.attributes.index',
                'ویژگی با موفقیت ویرایش شد'
            );
    }

    public function destroy(Attribute $attribute)
    {
        $attribute->delete();

        return response()
            ->redirectSuccess(
                'categories.attributes.index',
                'ویژگی با موفقیت حذف شد'
            );
    }
}

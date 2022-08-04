<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialtyRequest;
use App\Models\ScientificLevel;
use App\Models\Specialty;
use Illuminate\Support\Facades\Request;

class SpecialtiesController extends Controller
{
    public function index()
    {
        $specialties = Specialty::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->orderByDesc('id')
            ->paginate(10)
            ->appends(request()->except('page'));

        return view('panel.manageSpecialty', [
            'specialties' => $specialties
        ]);
    }

    public function create()
    {
        return view('panel.createSpecialty', [
            'scientificLevels' => ScientificLevel::all()
        ]);
    }

    public function store(SpecialtyRequest $request)
    {
        Specialty::create([
            'title' => $request->title,
            'scientific_level_id' => $request->scientific_level
        ]);

        return response()
            ->redirectSuccess(
                'categories.specialties.index',
                'تخصص جدید با موفقیت ساخته شد'
            );
    }

    public function edit(Specialty $specialty)
    {
        return view('panel.editSpecialty', [
            'specialty' => $specialty,
            'scientificLevels' => ScientificLevel::all()
        ]);
    }

    public function update(SpecialtyRequest $request, Specialty $specialty)
    {
        $specialty->title = $request->title;
        $specialty->scientific_level_id = $request->scientific_level;
        $specialty->save();

        return response()
            ->redirectSuccess(
                'categories.specialties.index',
                'تخصص با موفقیت ویرایش شد'
            );
    }

    public function destroy(Specialty $specialty)
    {
        $specialty->delete();

        return response()
            ->redirectSuccess(
                'categories.specialties.index',
                'تخصص با موفقیت حذف شد'
            );
    }
}

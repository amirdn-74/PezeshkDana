<?php

namespace App\Http\Controllers;

use App\Http\Requests\IllnessRequest;
use App\Models\Illness;
use App\Models\Specialty;
use Illuminate\Support\Facades\Request;

class IllnessesController extends Controller
{
    public function index()
    {
        $illnesses = Illness::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->orderByDesc('id')
            ->paginate(10)
            ->appends(request()->except('page'));

        return view('panel.manageIllnesses', [
            'illnesses' => $illnesses
        ]);
    }

    public function create()
    {
        return view('panel.createIllness', [
            'specialties' => Specialty::all()
        ]);
    }

    public function store(IllnessRequest $request)
    {
        Illness::create([
            'title' => $request->title,
            'specialty_id' => $request->specialty
        ]);

        return response()
            ->redirectSuccess(
                'categories.illnesses.index',
                'بیماری جدید با موفقیت ساخته شد'
            );
    }

    public function edit(Illness $illness)
    {
        return view('panel.editIllness', [
            'illness' => $illness,
            'specialties' => Specialty::all()
        ]);
    }

    public function update(IllnessRequest $request, Illness $illness)
    {
        $illness->title = $request->title;
        $illness->specialty_id = $request->specialty;
        $illness->save();

        return response()
            ->redirectSuccess(
                'categories.illnesses.index',
                'بیماری با موفقیت ویرایش شد'
            );
    }

    public function destroy(Illness $illness)
    {
        $illness->delete();

        return response()
            ->redirectSuccess(
                'categories.illnesses.index',
                'بیماری با موفقیت حذف شد'
            );
    }
}

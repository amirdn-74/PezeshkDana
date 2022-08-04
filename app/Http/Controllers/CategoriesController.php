<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Illness;
use App\Models\ScientificLevel;
use App\Models\Specialty;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('panel.categories', [
            'scientificLevels' => ScientificLevel::count(),
            'specialties' => Specialty::count(),
            'illnesses' => Illness::count(),
            'attributes' => Attribute::count()
        ]);
    }
}

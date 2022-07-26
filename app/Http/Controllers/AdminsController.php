<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdminsRequest;
use App\Models\User;
use App\Rules\IsAdminable;
use Illuminate\Support\Facades\Request;

class AdminsController extends Controller
{
    public function index()
    {
        $admins = User::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->where('role', 'admin')
            ->orWhere('role', 'super')
            ->orderByDesc('id')
            ->get();

        return view('panel.adminsList', [
            'admins' => $admins
        ]);
    }

    public function create()
    {
        $users = User::where('role', '!=', 'admin')
            ->where('role', '!=', 'super')
            ->orderBy('name')
            ->get();

        return view('panel.createAdmin', [
            'users' => $users
        ]);
    }

    public function store(CreateAdminsRequest $request)
    {
        $user = User::where('id', $request->user)->first();

        $user->transformToAdmin();

        return response()->redirectSuccess('admins.index', 'کاربر مورد نظر با موفقیت با مدیر ارتقا یافت');
    }

    public function edit(User $user)
    {
        $user->transformToUser();

        return response()->redirectSuccess('admins.index', 'مدیر مورد نظر با موفقیت حذف شد');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\PromotionRequest;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;

class RequestsController extends Controller
{
    public function index()
    {
        $requests = Request::where('user_id', Auth::user()->id)
            ->orderByDesc('id')
            ->get();

        return view('panel.getPromote', [
            'canSend' => request()->user()->can('submitRequest'),
            'requests' => $requests
        ]);
    }

    public function store(PromotionRequest $request)
    {
        Request::create([
            'type' => $request->request_type,
            'message' => $request->message,
            'user_id' => $request->user()->id
        ]);

        return response()->redirectSuccess('requests.index', 'درخواست با موفقیت ارسال شد');
    }

    public function list()
    {
        $requests = Request::query()
            ->when(FacadesRequest::input('search'), function ($query, $search) {
                $query->whereRelation('user', 'name', 'like', "%{$search}%");
            })
            ->orderByDesc('id')
            ->paginate(15)
            ->appends(request()->except('page'));

        return view('panel.RequestsList', [
            'requests' => $requests
        ]);
    }

    public function show(Request $request)
    {
        return view('panel.showRequest', [
            'request' => $request
        ]);
    }

    public function accept(Request $request)
    {
        $request->accept();

        return response()->redirectSuccess('requests.list', 'درخواست با موفقیت قبول شد.');
    }

    public function reject(Request $request)
    {
        $request->reject();

        return response()->redirectSuccess('requests.list', 'درخواست با موفقیت رد شد.');
    }
}

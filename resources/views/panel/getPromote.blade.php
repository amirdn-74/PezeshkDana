@extends('layouts.panel')

@section('content')
    <div class="d-grid grid-tc-2">
        @if ($canSend)
            <div class="card">
                <form action="/panel/get-promote" method="POST">
                    @csrf
                    <div class="card__title">
                        ارسال درخواست ارتقا
                        <button type="submit" class="panel-btn d-flex ai-center">
                            <icon class="material-icons-outlined icon ml-1">done</icon>
                            ثبت درخواست
                        </button>
                    </div>
                    <div class="card__content mt-6">
                        <div class="mb-4">
                            <label for="type" class="label">نوع ارتقا:</label>
                            <select name="request_type" id="type" class="panel-input w-100">
                                <option selected disabled>انتخاب</option>
                                <option value="1">نویسندگی</option>
                                <option value="2">ویرایشگر</option>
                            </select>
                            @error('request_type')
                                <span class="error-message mt-1 mb-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="type" class="label">پیام (اختیاری):</label>
                            <textarea type="text" name="message" id="" class="panel-input w-100"></textarea>
                            @error('message')
                                <span class="error-message mt-1 mb-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        @else
            <div class="alert alert-yellow">شما مجاز به ارسال مجدد درخواست نیستید</div>
        @endif
    </div>

    <div class="card mt-3">
        <div class="card__title">درخواست های اخیر</div>
        <div class="card__content mt-2">
            <table class="table">
                <thead>
                    <tr>
                        <th>عنوان</th>
                        <th>پیام</th>
                        <th>وضعیت</th>
                        <th>تاریخ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requests as $request)
                        <tr>
                            <td>{{ $request->typeDecoded() }}</td>
                            <td>{{ $request->message }}</td>
                            <td>
                                @if ($request->status == 0)
                                    <span class="table-badge badge--blue">در انتظار</span>
                                @elseif ($request->status == 1)
                                    <span class="table-badge badge--red">رد شده</span>
                                @elseif ($request->status == 2)
                                    <span class="table-badge">پذیرفته شده</span>
                                @endif
                            </td>
                            <td>{{ jdate($request->created_at) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

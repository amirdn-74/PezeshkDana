@extends('layouts.panel')

@section('content')
    <div class="card">
        <div class="card__title">لیست درخواست ها</div>
        <div class="card__content mt-3">
            <form action="/panel/requests" method="GET">
                <div class="d-grid grid-tc-5 ji-start ai-center mb-1">
                    <div class="d-flex ai-center js-stretch">
                        <input type="text" name="search" class="panel-input w-100 mt-1" placeholder="نام کاربر"
                            value="{{ Request::input('search') }}" />
                    </div>
                    <button type="submit" class="panel-btn panel-btn--outlined btn--small mr-2">
                        جستجو
                    </button>
                </div>
            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th>کاربر</th>
                        <th>نوع درخواست</th>
                        <th>تاریخ</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requests as $request)
                        <tr>
                            <td>{{ $request->user->name }}</td>
                            <td>
                                {{ $request->typeDecoded() }}
                            </td>
                            <td>{{ jdate($request->created_at) }}</td>
                            <td>
                                @if ($request->status === 0)
                                    <span class="table-badge badge--blue">در انتظار</span>
                                @elseif ($request->status === 1)
                                    <span class="table-badge badge--red">رد شده</span>
                                @elseif ($request->status === 2)
                                    <span class="table-badge badge--primary">پذیرفته شده</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('requests.show', $request->id) }}"
                                    class="panel-btn panel-btn--outlined btn--small">مشاهده</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $requests->links() }}
        </div>
    </div>
@endsection

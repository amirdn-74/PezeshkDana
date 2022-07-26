@extends('layouts.panel')

@section('content')
    <div class="card">
        <div class="card__title">
            لیست مدیران
            <a href="{{ route('admins.create') }}" class="panel-btn d-flex ai-center">
                <span class="material-icons-outlined icon ml-1">add</span>
                مدیر جدید
            </a>
        </div>
        <div class="card__content mt-3">
            <form action="" method="GET">
                <div class="d-grid grid-tc-5 ji-start ai-center mb-1">
                    <div class="d-flex ai-center js-stretch">
                        <input type="text" name="search" class="panel-input w-100 mt-1" placeholder="نام مدیر"
                            value="{{ Request::input('search') }}" />
                    </div>
                    <button type="submit" class="panel-btn panel-btn--outlined btn--small mr-2">
                        جستجو
                    </button>
                </div>
            </form>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>نام</th>
                        <th>ایمیل</th>
                        <th>نقش</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>
                                @if ($admin->is('admin'))
                                    <span class="table-badge badge--blue">مدیر</span>
                                @elseif($admin->is('super'))
                                    <span class="table-badge">مدیر ارشد</span>
                                @endif
                            </td>
                            <td>
                                @if ($admin->is('admin'))
                                    <form action="{{ route('admins.patch', $admin->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button class="panel-btn btn--small bg-red d-flex ai-center"
                                            data-action="removeAdminBtn">
                                            <span class="material-icons-outlined icon ml-1"
                                                style="font-size: 1.8rem">delete</span>
                                            حذف
                                        </button>
                                    </form>
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

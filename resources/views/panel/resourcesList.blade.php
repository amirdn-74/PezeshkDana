@extends('layouts.panel')

@section('content')
    <div class="card mt-2">
        <div class="card__title">
            لیست منابع

            <a href="{{ route('resources.create') }}" class="panel-btn d-flex ai-center">
                <span class="material-icons-outlined icon ml-1">add</span>
                تعریف جدید
            </a>
        </div>
        <div class="card__content mt-3">
            <form method="GET">
                <div class="d-grid grid-tc-5 ji-start ai-center mb-1">
                    <div class="d-flex ai-center js-stretch">
                        <input type="text" name="search" class="panel-input w-100 mt-1" placeholder="نام"
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
                        <th>نام</th>
                        <th>آدرس اینترنتی</th>
                        <th>تاریخ</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resources as $resource)
                        <tr>
                            <td>{{ $resource->name }}</td>
                            <td>{{ $resource->url }}</td>
                            <td>{{ jdate($resource->created_at) }}</td>
                            <td>
                                @if ($resource->status == 0)
                                    <span class="table-badge badge--red">غیر فعال</span>
                                @else
                                    <span class="table-badge">فعال</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('resources.edit', $resource->id) }}"
                                    class="panel-btn panel-btn--outlined btn--small">ویرایش</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $resources->links() }}
        </div>
    </div>
@endsection

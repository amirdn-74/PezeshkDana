@extends('layouts.panel')

@section('content')
    <div class="card">
        <div class="card__title">
            لیست تخصص ها

            <a href="{{ route('categories.specialties.create') }}" class="panel-btn d-flex ai-center">
                <span class="material-icons-outlined icon ml-1">add</span>
                جدید
            </a>
        </div>
        <div class="card__content mt-2">
            <form action="" method="get">
                <div class="d-grid grid-tc-5 ji-start ai-center mb-2">
                    <div class="d-flex ai-center js-stretch">
                        <input type="text" name="search" class="panel-input w-100 mt-1" placeholder="عنوان"
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
                        <th>عنوان</th>
                        <th>سطح علمی</th>
                        <th>تاریخ</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($specialties as $specialty)
                        <tr>
                            <td>{{ $specialty->title }}</td>
                            <td>{{ $specialty->scientificLevel->title }}</td>
                            <td>{{ jdate($specialty->created_at) }}</td>
                            <td>
                                <a href="{{ route('categories.specialties.edit', $specialty->id) }}"
                                    class="panel-btn panel-btn--outlined btn--small">
                                    ویرایش
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $specialties->links() }}
        </div>
    </div>
@endsection

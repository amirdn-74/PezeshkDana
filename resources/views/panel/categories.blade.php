@extends('layouts.panel')

@section('content')
    <div class="d-grid grid-tc-5 gap-4">
        <div class="card reporter d-flex fd-col">
            <div class="counter">{{ $scientificLevels }}</div>
            <div class="title">سطح علمی</div>
            <a href="{{ route('categories.scientificLevels.index') }}"
                class="panel-btn panel-btn--outlined mt-2 d-flex ai-center">
                مدیریت
                <span class="material-icons-outlined icon mr-2">west</span>
            </a>
        </div>
        <div class="card reporter d-flex fd-col">
            <div class="counter">{{ $specialties }}</div>
            <div class="title">تخصص ها</div>
            <a href="{{ route('categories.specialties.index') }}"
                class="panel-btn panel-btn--outlined mt-2 d-flex ai-center">
                مدیریت
                <span class="material-icons-outlined icon mr-2">west</span>
            </a>
        </div>
        <div class="card reporter d-flex fd-col">
            <div class="counter">{{ $illnesses }}</div>
            <div class="title">بیماری و شرایط</div>
            <a href="{{ route('categories.illnesses.index') }}" class="panel-btn panel-btn--outlined mt-2 d-flex ai-center">
                مدیریت
                <span class="material-icons-outlined icon mr-2">west</span>
            </a>
        </div>
        <div class="card reporter d-flex fd-col">
            <div class="counter">{{ $attributes }}</div>
            <div class="title">ویژگی ها</div>
            <a href="{{ route('categories.attributes.index') }}"
                class="panel-btn panel-btn--outlined mt-2 d-flex ai-center">
                مدیریت
                <span class="material-icons-outlined icon mr-2">west</span>
            </a>
        </div>
    </div>
@endsection

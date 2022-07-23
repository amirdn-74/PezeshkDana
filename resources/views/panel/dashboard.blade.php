@extends('layouts.panel')

@section('content')
    <div class="d-grid grid-tc-5 gap-4">
        <div class="card reporter d-flex fd-col">
            <div class="indicator">
                <span class="material-icons-outlined icon">description</span>
            </div>
            <div class="counter">45</div>
            <div class="title">تعداد نوشته های من</div>
        </div>
        <div class="card reporter d-flex fd-col">
            <div class="indicator">
                <span class="material-icons-outlined icon">description</span>
            </div>
            <div class="counter">405</div>
            <div class="title">تعداد کل مقالات</div>
        </div>
        <div class="card reporter d-flex fd-col">
            <div class="indicator">
                <span class="material-icons-outlined icon">draw</span>
            </div>
            <div class="counter">15</div>
            <div class="title">تعداد نویسندگان</div>
        </div>
        <div class="card reporter d-flex fd-col">
            <div class="indicator">
                <span class="material-icons-outlined icon">groups</span>
            </div>
            <div class="counter">1405</div>
            <div class="title">تعداد کل کاربران</div>
        </div>
        <div class="card reporter d-flex fd-col">
            <div class="indicator">
                <span class="material-icons-outlined icon">schedule</span>
            </div>
            <div class="counter">25</div>
            <div class="title">در انتظار تایید</div>
        </div>
    </div>

    <div class="d-grid grid-tc-2 gap-4 mt-6">
        <div class="card">
            <div class="card__title">
                آخرین نوشته ها
                <a href="#" class="float">
                    <span class="material-icons-outlined icon">west</span>
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card__title">
                آخرین نوشته ها
                <a href="#" class="float">
                    <span class="material-icons-outlined icon">west</span>
                </a>
            </div>
        </div>
    </div>
@endsection

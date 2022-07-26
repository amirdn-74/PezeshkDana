@extends('layouts.panel')

@section('content')
    <div class="d-grid grid-tc-2">
        <div class="card">
            <form id="addAdminForm" action="{{ route('admins.store') }}" method="post">
                @csrf
                <div class="card__title">
                    تعریف مدیر جدید
                    <button id="addAdminBtn" class="panel-btn d-flex ai-center">
                        <span class="material-icons-outlined icon ml-1">done</span>
                        ایجاد مدیر
                    </button>
                </div>
                <div class="card__content mt-3">
                    <div class="mb-2">
                        <label class="label">انتخاب کاربر</label>
                        <select name="user" id="select" class="mt-1 mb-1">
                            <option disabled selected>انتخاب</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('user')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

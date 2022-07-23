@extends('layouts.auth')

@section('content')
    <h1 class="mv-1 mb-4">ساخت حساب جدید</h1>

    <form action="/register" method="post" class="d-block">
        @csrf
        <div class="mt-2">
            <label for="name" class="label">نام:</label>
            <input type="text" id="name" name="name" class="panel-input w-100 mt-1" />
            @error('name')
                <div class="error-message mt-1 mb-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mt-2">
            <label for="email" class="label">ایمیل:</label>
            <input type="text" id="email" name="email" class="panel-input w-100 mt-1" />
            @error('email')
                <div class="error-message mt-1 mb-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mt-2">
            <label for="password" class="label">رمز عبور:</label>
            <input type="password" id="password" name="password" class="panel-input w-100 mt-1" />
            @error('password')
                <div class="error-message mt-1 mb-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mt-2">
            <label for="password_confirmation" class="label">تایید رمز عبور:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="panel-input w-100 mt-1" />
        </div>
        <div class="mt-4">
            <button class="panel-btn w-100">ایجاد حساب</button>
        </div>
    </form>

    <div class="mt-2 w-100 d-flex ai-center jc-center font-13">
        از قبل حساب دارید؟<a href="/login" class="mr-1">وارد شوید</a>
    </div>
@endsection

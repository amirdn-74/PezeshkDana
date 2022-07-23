@extends('layouts.auth')

@section('content')
    <h1 class="mv-1 mb-4">ورود به حساب</h1>

    <form action="/login" method="post" class="d-block">
        @csrf
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
        <div class="mt-1 font-13">
            رمز عبور خود را فراموش کرده اید؟ <a href="#">بازیابی رمز عبور</a>
        </div>
        <div class="mt-4">
            <button class="panel-btn w-100">ورود به حساب</button>
        </div>
        <div class="mt-2">
            <a href="/auth/google/redirect" class="panel-btn bg-red text-white d-flex ai-center jc-center w-100">
                <i class="fa-brands fa-google icon ml-1"></i>
                ورود با گوگل
            </a>
        </div>
    </form>

    <div class="mt-2 w-100 d-flex ai-center jc-center font-13">
        حساب کاربری ندارید؟ <a href="/register" class="mr-1">یکی بسازید</a>
    </div>
@endsection

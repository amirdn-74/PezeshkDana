@extends('layouts.panel')

@section('content')
    <div class="d-grid grid-tc-2">
        <div class="card">
            <form action="{{ route('categories.illnesses.store') }}" method="POST">
                @csrf

                <div class="card__title">
                    تعریف بیماری و ویژگی جدید

                    <button type="submit" class="panel-btn d-flex ai-center">
                        <span class="material-icons-outlined icon ml-1">done</span>
                        ساخت جدید
                    </button>
                </div>
                <div class="card__contetn mt-2">
                    <div class="mb-2">
                        <label for="title" class="label">عنوان:</label>
                        <input type="text" name="title" id="title" class="panel-input mb-1 w-100"
                            value="{{ old('title') }}">
                        @error('title')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="select" class="label">تخصص:</label>
                        <select name="specialty" id="select" class="mb-1">
                            <option disabled selected>انتخاب</option>
                            @foreach ($specialties as $specialty)
                                <option value="{{ $specialty->id }}">{{ $specialty->title }}</option>
                            @endforeach
                        </select>
                        @error('specialty')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

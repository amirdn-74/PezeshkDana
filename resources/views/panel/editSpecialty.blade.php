@extends('layouts.panel')

@section('content')
    <div class="d-grid grid-tc-2">
        <div>
            <div class="card">
                <form action="{{ route('categories.specialties.update', $specialty->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="card__title">
                        ویرایش تخصص

                        <button type="submit" class="panel-btn d-flex ai-center">
                            <span class="material-icons-outlined icon ml-1">done</span>
                            ویرایش
                        </button>
                    </div>
                    <div class="card__contetn mt-2">
                        <div class="mb-2">
                            <label for="title" class="label">عنوان:</label>
                            <input type="text" name="title" id="title" class="panel-input mb-2 w-100"
                                value="{{ old('title', $specialty->title) }}">
                            @error('title')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="title" class="label">سطح عمی:</label>
                            <select name="scientific_level" id="select" class="mb-1">
                                <option disabled selected>انتخاب</option>
                                @foreach ($scientificLevels as $level)
                                    <option value="{{ $level->id }}">{{ $level->title }}</option>
                                @endforeach
                            </select>
                            @error('scientific_level')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>

            <div class="card mt-4">
                <div class="card__title">
                    حذف تخصص

                    <form action="{{ route('categories.specialties.destroy', $specialty->id) }}" method="post"
                        id="deleteCategoryForm">
                        @csrf
                        @method('DELETE')
                        <button id="deleteCategoryBtn" type="submit" class="panel-btn bg-red d-flex ai-center">
                            <span class="material-icons-outlined icon ml-1">close</span>
                            حذف
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

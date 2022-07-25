@extends('layouts.panel')

@section('content')
    <div class="d-grid grid-tc-2">
        <div class="card">
            <div class="card__title">مشخصات درخواست</div>
            <div class="card__content mt-3">
                <div class="w-100 mb-4">
                    <h3 class="text-gray m-0 mb-1">نام کاربر:</h3>
                    <div>
                        {{ $request->user->name }}
                    </div>
                </div>

                <div class="w-100 mb-4">
                    <h3 class="text-gray m-0 mb-1">نوع درخواست:</h3>
                    <div>
                        {{ $request->typeDecoded() }}
                    </div>
                </div>

                <div class="w-100 mb-4">
                    <h3 class="text-gray m-0 mb-1">تاریخ:</h3>
                    <div>
                        {{ jdate($request->created_at) }}
                    </div>
                </div>

                <div class="w-100 mb-4">
                    <h3 class="text-gray m-0 mb-1">وضعیت:</h3>
                    <div>
                        @if ($request->status == 0)
                            <span class="table-badge badge--blue">در انتظار</span>
                        @elseif ($request->status == 1)
                            <span class="table-badge badge--red">رد شده</span>
                        @elseif ($request->status == 2)
                            <span class="table-badge badge--primary">قبول شده</span>
                        @endif
                    </div>
                </div>

                <div class="w-100 mb-4">
                    <h3 class="text-gray m-0 mb-1">پیام:</h3>
                    <div>
                        {{ $request->message }}
                    </div>
                </div>

                @if ($request->isModifyable())
                    <div class="w-100 mb-4">
                        <h3 class="text-gray m-0 mb-1">عملیات:</h3>
                        <div class="d-flex ai-center">
                            <form id="rejectForm" class="actionForm" action="{{ route('requests.reject', $request->id) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button id="rejectBtn" class="panel-btn bg-red d-flex ai-center ml-2">
                                    <span class="material-icons-outlined icon ml-1">close</span>
                                    رد درخواست
                                </button>
                            </form>

                            <form id="acceptForm" class="actionForm" action="{{ route('requests.accept', $request->id) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button id="acceptBtn" class="panel-btn d-flex ai-center">
                                    <span class="material-icons-outlined icon ml-1">done</span>
                                    پذیرفتن
                                </button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const acceptBtn = document.getElementById('acceptBtn'),
            rejectBtn = document.getElementById('rejectBtn'),
            acceptForm = document.getElementById('acceptForm'),
            rejectForm = document.getElementById('rejectForm');

        acceptBtn.addEventListener('click', function(e) {
            e.preventDefault();

            const isConfirmed = confirm('از پذیرفتن درخواست مطمئن هستید؟');

            if (isConfirmed) acceptForm.submit();
        });

        rejectBtn.addEventListener('click', function(e) {
            e.preventDefault();

            const isConfirmed = confirm('از رد درخواست مطمئن هستید؟');

            if (isConfirmed) rejectForm.submit();
        });
    </script>
@endsection

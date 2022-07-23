<?php

$sideNav = [
    [
        'title' => 'داشبورد',
        'url' => '/dashboard',
        'icon' => 'dashboard',
        'for' => ['admin', 'super'],
    ],
    [
        'title' => 'مدیریت نوشته ها',
        'url' => '/articles',
        'icon' => 'description',
        'for' => ['admin', 'super'],
    ],
    [
        'title' => 'صف تایید',
        'url' => '/que',
        'icon' => 'schedule',
        'for' => ['admin', 'super'],
    ],
    [
        'title' => 'ابلاغیه ها',
        'url' => '/assignments',
        'icon' => 'assignment_turned_in',
        'for' => ['admin', 'super'],
    ],
    [
        'title' => 'دسته بندی',
        'url' => '/categories',
        'icon' => 'category',
        'for' => ['admin', 'super'],
    ],
    [
        'title' => 'منابع',
        'url' => '/resources',
        'icon' => 'language',
        'for' => ['admin', 'super'],
    ],
    [
        'title' => 'مدیریت کاربران',
        'url' => '/users',
        'icon' => 'group',
        'for' => ['admin', 'super'],
    ],
    [
        'title' => 'درخواست ها',
        'url' => '/requests',
        'icon' => 'contact_support',
        'for' => ['admin', 'super'],
    ],
    [
        'title' => 'مدیران سایت',
        'url' => '/admins',
        'icon' => 'admin_panel_settings',
        'for' => ['super'],
    ],
    [
        'title' => 'نوشته های من',
        'url' => '/my-articles',
        'icon' => 'description',
        'for' => ['writer'],
    ],
    [
        'title' => 'ابلاغیه های من',
        'url' => '/my-assignments',
        'icon' => 'assignment_turned_in',
        'for' => ['writer', 'editor'],
    ],
    [
        'title' => 'اصلاحیه های من',
        'url' => '/my-corrections',
        'icon' => 'check',
        'for' => ['writer', 'editor'],
    ],
    [
        'title' => 'تاریخچه مطالعه',
        'url' => '/my-history',
        'icon' => 'history',
        'for' => ['writer', 'editor', 'user'],
    ],
    [
        'title' => 'درخواست ارتقا',
        'url' => '/get-promote',
        'icon' => 'upgrade',
        'for' => ['user'],
    ],
];

?>

<div class="sidenav h-100 d-flex fd-col ai-center">
    <div class="sidenav__brand d-flex ai-center">
        <img src="/logo.svg" />
        <span class="sidenav__brand-text">پزشک دانا</span>
    </div>
    <button class="sidenav__toggle">
        <i class="fa-solid fa-chevron-left"></i>
    </button>

    <ul class="sidenav__menu">
        @foreach ($sideNav as $item)
            @if ($user->is($item['for']))
                <li>
                    <a href="{{ $item['url'] }}" class="{{ Route::is('/panel/dashboard') ? 'active' : '' }}">
                        <span class="material-icons-outlined icon">{{ $item['icon'] }}</span>
                        <div class="item-title">{{ $item['title'] }}</div>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>

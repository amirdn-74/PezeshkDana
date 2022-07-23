<div class="topnav d-flex ai-center jc-between">
    <div class="page-title">داشبورد</div>
    <div class="topnav__profile">
        <div class="topnav__avatar">
            <img src="/images/profile-blank.jpg" />
        </div>
        <div class="topnav__username">{{ $user->email }}</div>
        <span class="material-icons-outlined icon">arrow_drop_down</span>

        <div class="profile-dropdown card">
            <ul>
                <li>
                    <a href="#">
                        <span class="material-icons-outlined icon">person</span>
                        ویرایش مشخصات
                    </a>
                    <button id="logoutBtn">
                        <span class="material-icons-outlined icon">logout</span>
                        خروج از سیستم
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>

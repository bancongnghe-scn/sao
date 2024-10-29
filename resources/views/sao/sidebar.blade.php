<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
<li class="nav-header mt-2 text-white text-bold">Quản lý chiến lược, mục tiêu</li>
@php
    $uri = \Request::path();
    // $user = Auth::user();
    // $menus = request()
    //     ->user()
    //     ->getMenus(App\Models\Permission::SIDEBAR_MENU);

    // $_subMenu = collect($menus)
    //     ->flatMap(function ($menu) {
    //         $menu->load('children');
    //         return $menu->children;
    //     })
    //     ->filter(function ($permission) use ($user) {
    //         return $user->hasPermissionTo($permission->name);
    //     })
    //     ->toArray();

    // $menus = $menus->toArray();
@endphp

{{-- @if (in_array('mbo.target.index', array_column($menus, 'name'))) --}}
<li class="nav-item @if (str_starts_with($uri, 'sao/strategy')) menu-is-opening menu-open @endif">
    <a href="javascript:void(0)" class="nav-link fa-caret-down-target">
        <svg width="17" height="17" viewBox="0 0 24 24">
            <path
                d="M6 12c0 2.206 1.794 4 4 4 1.761 0 3.242-1.151 3.775-2.734l2.224-1.291.001.025c0 3.314-2.686 6-6 6s-6-2.686-6-6 2.686-6 6-6c1.084 0 2.098.292 2.975.794l-2.21 1.283c-.248-.048-.503-.077-.765-.077-2.206 0-4 1.794-4 4zm4-2c-1.105 0-2 .896-2 2s.895 2 2 2 2-.896 2-2l-.002-.015 3.36-1.95c.976-.565 2.704-.336 3.711.159l4.931-2.863-3.158-1.569.169-3.632-4.945 2.87c-.07 1.121-.734 2.736-1.705 3.301l-3.383 1.964c-.29-.163-.621-.265-.978-.265zm7.995 1.911l.005.089c0 4.411-3.589 8-8 8s-8-3.589-8-8 3.589-8 8-8c1.475 0 2.853.408 4.041 1.107.334-.586.428-1.544.146-2.18-1.275-.589-2.69-.927-4.187-.927-5.523 0-10 4.477-10 10s4.477 10 10 10c5.233 0 9.521-4.021 9.957-9.142-.301-.483-1.066-1.061-1.962-.947z"
                fill="white" />
        </svg>
        <p style="padding-left: 8px;">Chiến lược</p>
        <i class="fa fa-caret-down float-right "
            style="margin-right: -6px; margin-top: -5px; @if (str_starts_with($uri, 'sao/strategy')) transform: rotate(0deg); @else transform: rotate(90deg); @endif"></i>
    </a>
    <ul class="nav nav-treeview" style="@if (str_starts_with($uri, 'sao/strategy')) display: block; @else display: none; @endif">

        {{-- @if (in_array('mbo.dashboard.index', array_column($_subMenu, 'name'))) --}}
        <li class="nav-item">
            <a href="/sao/strategy/plan"
                class="nav-link @if (str_starts_with($uri, 'sao/strategy/plan')) active"
                style="background-color: #3a923a!important;color: #fff!important; @endif">&nbsp;&nbsp;
                <i class="bi bi-record-fill" style="font-size: 10px"></i>
                <p>Lập kế hoạch</p>
            </a>
        </li>
        {{-- @endif --}}

        {{-- @if (in_array('mbo.dashboard.index', array_column($_subMenu, 'name'))) --}}
        <li class="nav-item">
            <a href="/sao/strategy/vision-mission"
                class="nav-link @if ($uri === 'sao/strategy/vision-mission') active"
                style="background-color: #3a923a!important;color: #fff!important; @endif">&nbsp;&nbsp;
                <i class="bi bi-record-fill" style="font-size: 10px"></i>
                <p>Tầm nhìn, sứ mệnh</p>
            </a>
        </li>
        {{-- @endif --}}

        {{-- @if (in_array('mbo.dashboard.index', array_column($_subMenu, 'name'))) --}}
        <li class="nav-item">
            <a href="/sao/analysis/index"
                class="nav-link @if (str_starts_with($uri, 'sao/analysis')) active"
                style="background-color: #3a923a!important;color: #fff!important; @endif">&nbsp;&nbsp;
                <i class="bi bi-record-fill" style="font-size: 10px"></i>
                <p>Phân tích môi trường</p>
            </a>
        </li>
        {{-- @endif --}}

        {{-- @if (in_array('mbo.dashboard.index', array_column($_subMenu, 'name'))) --}}
        <li class="nav-item">
            <a href="#"
                class="nav-link @if ($uri === 'sao/strategy') active"
                style="background-color: #3a923a!important;color: #fff!important; @endif">&nbsp;&nbsp;
                <i class="bi bi-record-fill" style="font-size: 10px"></i>
                <p>Xây dựng chiến lược</p>
            </a>
        </li>
        {{-- @endif --}}
    </ul>
</li>
{{-- @endif --}}

{{-- @if (in_array('mbo.target.index', array_column($menus, 'name'))) --}}
<li class="nav-item @if (str_starts_with($uri, 'sao/target')) menu-is-opening menu-open @endif">
    <a href="javascript:void(0)" class="nav-link fa-caret-down-target">
        <svg width="17" height="17" viewBox="0 0 24 24">
            <path
                d="M6 12c0 2.206 1.794 4 4 4 1.761 0 3.242-1.151 3.775-2.734l2.224-1.291.001.025c0 3.314-2.686 6-6 6s-6-2.686-6-6 2.686-6 6-6c1.084 0 2.098.292 2.975.794l-2.21 1.283c-.248-.048-.503-.077-.765-.077-2.206 0-4 1.794-4 4zm4-2c-1.105 0-2 .896-2 2s.895 2 2 2 2-.896 2-2l-.002-.015 3.36-1.95c.976-.565 2.704-.336 3.711.159l4.931-2.863-3.158-1.569.169-3.632-4.945 2.87c-.07 1.121-.734 2.736-1.705 3.301l-3.383 1.964c-.29-.163-.621-.265-.978-.265zm7.995 1.911l.005.089c0 4.411-3.589 8-8 8s-8-3.589-8-8 3.589-8 8-8c1.475 0 2.853.408 4.041 1.107.334-.586.428-1.544.146-2.18-1.275-.589-2.69-.927-4.187-.927-5.523 0-10 4.477-10 10s4.477 10 10 10c5.233 0 9.521-4.021 9.957-9.142-.301-.483-1.066-1.061-1.962-.947z"
                fill="white" />
        </svg>
        <p style="padding-left: 8px;">Mục tiêu</p>
        <i class="fa fa-caret-down float-right "
            style="margin-right: -6px; margin-top: -5px; @if (str_starts_with($uri, 'sao/target')) transform: rotate(0deg); @else transform: rotate(90deg); @endif"></i>
    </a>
    <ul class="nav nav-treeview" style="@if (str_starts_with($uri, 'sao/target')) display: block; @else display: none; @endif">
        {{-- @if (in_array('mbo.dashboard.index', array_column($_subMenu, 'name'))) --}}
        <li class="nav-item">
            <a href="#"
                class="nav-link @if ($uri === 'sao/target') active"
            style="background-color: #3a923a!important;color: #fff!important; @endif">&nbsp;&nbsp;
                <i class="bi bi-record-fill" style="font-size: 10px"></i>
                <p>Bộ mục tiêu</p>
            </a>
        </li>
        {{-- @endif --}}

        {{-- @if (in_array('mbo.dashboard.index', array_column($_subMenu, 'name'))) --}}
        <li class="nav-item">
            <a href="#"
                class="nav-link @if ($uri === 'sao/target') active"
            style="background-color: #3a923a!important;color: #fff!important; @endif">&nbsp;&nbsp;
                <i class="bi bi-record-fill" style="font-size: 10px"></i>
                <p>Quản trị mục tiêu</p>
            </a>
        </li>
        {{-- @endif --}}

        {{-- @if (in_array('mbo.dashboard.index', array_column($_subMenu, 'name'))) --}}
        <li class="nav-item">
            <a href="#"
                class="nav-link @if ($uri === 'sao/target') active"
            style="background-color: #3a923a!important;color: #fff!important; @endif">&nbsp;&nbsp;
                <i class="bi bi-record-fill" style="font-size: 10px"></i>
                <p>Theo dõi mục tiêu</p>
            </a>
        </li>
        {{-- @endif --}}
    </ul>
</li>
{{-- @endif --}}
<li class="nav-item">
    <a href="/sao/setting"
        class="nav-link @if ($uri === 'sao/setting') active"
    style="background-color: #3a923a!important;color: #fff!important; @endif">
        <i class="bi-gear"></i>
        <p>Cài đặt</p>
    </a>
</li>

<script>
    // Đổi hướng icon dropdown phần chấm công
    var childElement = document.querySelectorAll(".fa-caret-down");
    childElement.forEach(function(item) {
        var caretDown = item.parentNode.parentNode;
        caretDown.addEventListener("click", function() {
            if (caretDown.classList.contains("menu-open")) {
                item.style.transform = 'rotate(90deg)';
            } else {
                item.style.transform = 'rotate(0deg)';
            }
        })
    })
</script>

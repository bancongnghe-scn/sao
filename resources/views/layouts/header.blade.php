<!-- ======= Header ======= -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-sc px-2">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="bi bi-layout-sidebar-inset" style="font-size: 120%;"></i></a>
        </li>
    </ul>

    <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav eo-top-right-nav d-flex justify-content-end">
            <li class="nav-item dropdown user-menu pt-1 pl-2" style="border-radius: 30px; background-color: rgba(255,255,255,0.1)">
                <a 
                {{-- onclick="FirstSt()"  --}}
                {{-- data-bs-target="#rightModaSt" data-bs-toggle="modal" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" --}}
                >
                    <img src="{{ env('URL_SERVER').Session::get('auth_user')['avatar'] }}" class="user-image img-circle elevation-1 user-default-avatar my-sefl-avatar">
                    <span class="display-name-u text-white">{{ Session::get('auth_user')['name'] }} <i class="bi-caret-down-fill"></i> </span>
                    <!-- <img onerror="this.src='{{asset('images/fav-sc-icon.png')}}'"  class="user-image img-circle elevation-1 user-default-avatar my-sefl-avatar">
                    <span class="display-name-u text-white"><i class="bi-caret-down-fill"></i> </span> -->
                </a>
            </li>
        </ul>
    </div>
</nav>



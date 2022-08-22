<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <title>DASHBOARD</title>


</head>
<body id="body">
<div class="container">
    <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="navbar__left">

            <a class="active_link" href="#">Admin</a>
        </div>
        <div class="navbar__right">
            <a href="#">
                <img width="30" src="{{ asset('images/profile.jpg') }}" alt="" />
                <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
            </a>
        </div>
    </nav>

    @yield('content')

    <div id="sidebar">
        <div class="sidebar__title">
            <div class="sidebar__img">
                <img src="{{ asset('images/emblem.png') }}" alt="logo" width="50px" />
                <h1>Depart. Of Transportation</h1>
            </div>
            <i
                onclick="closeSidebar()"
                class="fa fa-times"
                id="sidebarIcon"
                aria-hidden="true"
            ></i>
        </div>

        <div class="sidebar__menu">
            <div class="sidebar__link active_menu_link">
                <i class="fa fa-home"></i>
                <a href="#">Dashboard</a>
            </div>

            <div class="sidebar__link">
                <i class="fa fa-edit" aria-hidden="true"></i>
                <a href="{{url('/admin/written')}}">Written Exam</a>
            </div>

            <div class="sidebar__link">
                <i class="fa fa-user-secret" aria-hidden="true"></i>
                <a href="{{url('/admin/users/unverified')}}">Unverified Users</a>
            </div>

            <div class="sidebar__link">
                <i class="fa fa-user-secret" aria-hidden="true"></i>
                <a href="{{url('/admin/users')}}">All users</a>
            </div>
            <div class="sidebar__logout">
                <i class="fa fa-power-off"></i>
                <form style="display: inline-block;" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a style="text-decoration: none;" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"> {{ __('Logout') }} </a>
                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>

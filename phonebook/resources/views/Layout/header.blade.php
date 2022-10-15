<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <li class="nav-item "> <a class="nav-link nav-toggler  hidden-md-up  waves-effect waves-dark" href="javascript:void(0)"><i class="fas  fa-bars"></i></a></li>
                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars"></i></a> </li>
                <li class="nav-item mt-3">{{session()->get('userName')}}</li>
            </ul>
            <ul class="navbar-nav my-lg-0">
{{--                <img src="" class="ml-4 rounded-circle"  alt="logo" height="25px" width="25px">--}}
                <li class="nav-item"><a href="{{url('/logOut')}}" class="btn btn-sm btn-danger">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">

                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>

            </li>
            <li class="user-pro">
                <a href="#" class="waves-effect"><img src="../plugins/images/users/varun.jpg" alt="user-img"
                class="img-circle"> <span class="hide-menu"> Steve Gection<span class="fa arrow"></span></span>
            </a>
                <ul class="nav nav-second-level">
                <li><a href="{{asset('logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
        <li><a href="{{asset('quan-ly.dashboard')}}" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
            <span class="hide-menu">Dashboard</span></a></li>
            <li> <a href="" class="waves-effect "><i  class="fa fa-cubes"></i>
            <span class="hide-menu">Quản lý nhà mạng<span class="fa arrow"></span> 
            </span></a>
                <ul class="nav nav-second-level">
                <li><a href="{{route('admin.nha-mang.index')}}">Danh sách nhà mạng</a></li>
                </ul>
            </li>
            <li> <a href="" class="waves-effect"><i  class="icon-folder-alt"></i>
            <span class="hide-menu">Thể loại sim<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{route('admin.the-loai-sim.index')}}">Danh sách thể loại sim</a></li>
                </ul>
            </li>
            <li> <a href="" class="waves-effect"><i class="icon-drawar"></i>
        <span class="hide-menu">Quản lý sim</span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{route('admin.sims.index')}}">Danh sách sim</a></li>
        </ul>
            </li>
            <li> <a href="" class="waves-effect "><i  class="fa fa-cubes"></i>
                <span class="hide-menu">Quản lý trang<span class="fa arrow"></span> 
                </span></a>
                    <ul class="nav nav-second-level">
                    <li><a href="{{route('admin.pages.index')}}">Danh sách trang</a></li>
                    </ul>
                </li>
            <li class="nav-small-cap">--- Manager</li>
            <li> <a href="" class="waves-effect"><i class="icon-people"></i>
            <span class="hide-menu">Quản lý thành viên<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{route('admin.users.index')}}">Danh sách thành viên</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
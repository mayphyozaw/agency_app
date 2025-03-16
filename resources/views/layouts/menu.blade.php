<aside class="main-sidebar">
    <div class="sidebar">
        <div class="user-panel">
            <div class="image text-center">
                <img src="{{ asset('assets/img/img1.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <p>May Phyo</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


        <ul class="sidebar-menu">
            <li class="">
                <a href="{{ route('home') }}"
                    class="nav-link{{ request()->routeIs('home') ? 'active bg-primary text-white' : '' }}">
                    <i class="icon-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('country.index') }}"
                    class="nav-link{{ request()->routeIs('country*') ? 'active bg-primary text-white' : '' }}">
                    <i class="icon-layers"></i>
                    <span>Country</span>
                </a>
            </li>

            <li class="">
                <a href="#">
                    <i class="icon-layers"></i>
                    <span>Local Agents</span>
                </a>
            </li>

            <li class="">
                <a href="#">
                    <i class="icon-layers"></i>
                    <span>Foreign Company</span>
                </a>
            </li>

            <li class="">
                <a href="#">
                    <i class="icon-layers"></i>
                    <span>Labors</span>
                </a>
            </li>

            <li class="">
                <a href="#">
                    <i class="icon-layers"></i>
                    <span>Demand</span>
                </a>
            </li>

            <li class="">
                <a href="#">
                    <i class="icon-layers"></i>
                    <span>Interview</span>
                </a>
            </li>

            <li class="">
                <a href="#">
                    <i class="icon-layers"></i>
                    <span>Contract</span>
                </a>
            </li>

            <li class="">
                <a href="#">
                    <i class="icon-layers"></i>
                    <span>Sending / Departure</span>
                </a>
            </li>

            <li class="">
                <a href="#">
                    <i class="icon-list"></i>
                    <span>Users</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('roles.index') }}"
                    class="nav-link {{ request()->routeIs('roles*') ? 'active bg-primary text-white' : '' }}">
                    <i class="icon-layers"></i>
                    <span>Roles</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('permission.index') }}"
                    class="nav-link {{ request()->routeIs('permission*') ? 'active bg-primary text-white' : '' }}">
                    <i class="icon-layers"></i>
                    <span>Permission</span>
                </a>
            </li>
        </ul>
    </div>

</aside>

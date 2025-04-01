<aside class="main-sidebar">
    <div class="sidebar">
        <div class="user-panel">
            <div class="image text-center">
                <img src="{{ asset('data/user.png') }}" class="img-circle" alt="User Image">
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
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('country.index') }}"
                    class="nav-link {{ request()->routeIs('country*') ? 'active bg-primary text-white' : '' }}">
                    <i class="fa fa-exchange"></i>
                    <span>Country</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
            </li>



            <li class="">
                <a href="{{ route('local_agent.index') }}"
                    class="nav-link {{ request()->routeIs('local_agent*') ? 'active bg-primary text-white' : '' }}">
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
                <a href="{{ route('labors.index') }}"
                    class="nav-link {{ request()->routeIs('labors*') ? 'active bg-primary text-white' : '' }}">
                    <i class="icon-layers"></i>
                    <span>Labors</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('reject_lists.index') }}"
                    class="nav-link {{ request()->routeIs('reject_lists*') ? 'active bg-primary text-white' : '' }}">
                    <i class="icon-layers"></i>
                    <span>Reject Labor Lists</span>
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
                <a href="{{ route('user.index') }}"
                    class="nav-link {{ request()->routeIs('user*') ? 'active bg-primary text-white' : '' }}">
                    <i class="icon-layers"></i>
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

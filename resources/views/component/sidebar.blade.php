<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="{{ request()->is('dashboard') ? ' active' : '' }}" href={{ route('dashboard') }}>
                <i class="bi bi-cup-hot"></i><span class="sidebar-mini-hide">Dashboard</span>
            </a>
        </li>

        <li class="nav-main-heading">
            <span class="sidebar-mini-hidden">Reimbursement</span>
        </li>

        <li class="{{ request()->is('reimbesement/*') ? ' open' : '' }}">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="bi bi-coin"></i><span class="sidebar-mini-hide">Reimbursement</span></a>
            <ul>
                <li>
                    <a class="{{ request()->is('reimbesement/user/edit') ? ' active' : '' }}" href={{ route('user') }}>
                        Profile
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('reimbesement/create') ? ' active' : '' }}" href={{ route('reimbesement-create') }}>
                        Create
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('reimbesement/history') ? ' active' : '' }}" href={{ route('reimbesement') }}>
                       History
                    </a>
                </li>
            </ul>
        </li>

        @if (request()->is('reimbesement/history/print'))
            <li class="p-5 mt-5">
                <button class="btn btn-primary w-100" onClick="window.print()">Print</button>
            </li>
        @endif




        {{-- <li class="nav-main-heading">
            <span class="sidebar-mini-visible">VR</span><span class="sidebar-mini-hidden">Various</span>
        </li>
        <li class="{{ request()->is('pages/*') ? ' open' : '' }}">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bulb"></i><span class="sidebar-mini-hide">Examples</span></a>
            <ul>
                <li>
                    <a class="{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">DataTables</a>
                </li>
                <li>
                    <a class="{{ request()->is('pages/slick') ? ' active' : '' }}" href="/pages/slick">Slick Slider</a>
                </li>
                <li>
                    <a class="{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">Blank</a>
                </li>
            </ul>
        </li>
        <li class="nav-main-heading">
            <span class="sidebar-mini-visible">MR</span><span class="sidebar-mini-hidden">More</span>
        </li>
        <li>
            <a href="/">
                <i class="si si-globe"></i><span class="sidebar-mini-hide">Landing</span>
            </a>
        </li> --}}
    </ul>
</div>

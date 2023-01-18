<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/dashboard') }}">Inventory Levels</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/dashboard') }}">INL</a>
        </div><hr>
        <div class="sidebar-brand">
            <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/dashboard') }}">DS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Users</li>
            <li class="nav-item dropdown {{ Request::is('users*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('users/admin*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ url('users/admin') }}">Users Admin</a>
                    </li>
                    <li class="{{ Request::is('users/fls*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('users/fls') }}">Users FLS</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Eod Category</li>
            <li class="nav-item dropdown {{ Request::routeIs('eod-categories*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Eod</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::routeIs('eod-categories*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('eod-categories.index') }}">Eod Category</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Folder Master Data Customers</li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Master Data Customer</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('master-data-customers') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('master-data-customers') }}">All Data Customers</a>
                        <a class="nav-link" href="{{ url('master-data-customers') }}">Trading Terms</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Folder EOD Reports</li>
            <li class="nav-item dropdown {{ Request::is('eod-reports*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>EOD Reports</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('eod-reports/eod-call-report*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('eod-reports/eod-call-report') }}">EOD Call</a>
                    </li>
                    <li class="{{ Request::is('eod-reports/eod-sales-report*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('eod-reports/eod-sales-report') }}">EOD Sales</a>
                    </li>
                    <li class="{{ Request::is('eod-reports/eod-payment-report*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('eod-reports/eod-payment-report') }}">EOD Payment</a>
                    </li>
                    <li class="{{ Request::is('eod-reports/eod-biprom-report*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('eod-reports/eod-biprom-report') }}">EOD Biprom</a>
                    </li>
                    <li class="{{ Request::is('eod-reports/eod-stock-report*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('eod-reports/eod-stock-report') }}">EOD Stock</a>
                    </li>
                    <li class="{{ Request::is('eod-reports/eod-sync-report*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('eod-reports/eod-sync-report') }}">EOD Sync</a>
                    </li>
                    <li class="{{ Request::is('') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('eod-reports/eod-visit-report') }}">EOD Visit</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Folder Data Rescue</li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>EOD Reports Rescue</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('eod/rescue') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('eod/rescue/call') }}">EOD Call Rescue</a>
                        <a class="nav-link" href="{{ url('eod/rescue/sales') }}">EOD Sales Rescue</a>
                        <a class="nav-link" href="{{ url('eod/rescue/payment') }}">EOD Payment Rescue</a>
                        <a class="nav-link" href="{{ url('eod/rescue/biprom') }}">EOD Biprom Rescue</a>
                        <a class="nav-link" href="{{ url('eod/rescue/stock') }}">EOD Stock Rescue</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Folder Route</li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data Route</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('route') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('route/lukman') }}">Route Lukman</a>
                        <a class="nav-link" href="{{ url('route/Togu') }}">Route Togu</a>
                        <a class="nav-link" href="{{ url('route/Rizal') }}">Route Rizal</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Folder Biprom</li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data Biprom</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('biprom') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('biprom') }}">Pengajuan Biprom</a>
                    </li>
                </ul>
            </li>

        </ul>


    </aside>
</div>

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="{{ route('dashboard') }}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span
                        class="badge badge-pill badge-info float-right">3</span><span>Dashboard</span></a>
            </li>

            <li>
                <a href="{{ route('roles.index') }}" class="has-arrow waves-effect"><i
                        class="mdi mdi-book-open-page-variant"></i><span>Role</span></a>
                {{-- <ul class="sub-menu" aria-expanded="false">
                    <li><a href="pages-invoice.html">Invoice</a></li>
                    <li><a href="pages-starter.html">Starter Page</a></li>
                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                    <li><a href="pages-faqs.html">FAQs</a></li>
                    <li><a href="pages-pricing.html">Pricing</a></li>
                    <li><a href="pages-team.html">Team</a></li>
                    <li><a href="pages-login.html">Login</a></li>
                    <li><a href="pages-register.html">Register</a></li>
                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                    <li><a href="pages-404.html">Error 404</a></li>
                    <li><a href="pages-500.html">Error 500</a></li>
                </ul> --}}
            </li>
            <li>
                <a href="{{route('users.index')}}" class="has-arrow waves-effect"><i
                        class="mdi mdi-briefcase-check"></i><span>User</span></a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect"><i class="mdi mdi-format-page-break"></i><span
                        class="badge badge-pill badge-danger float-right">6</span><span>Product</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="forms-elements.html">Elements</a></li>
                    <li><a href="forms-plugins.html">Plugins</a></li>
                    <li><a href="forms-validation.html">Validation</a></li>
                    <li><a href="forms-mask.html">Masks</a></li>
                    <li><a href="forms-quilljs.html">Quilljs</a></li>
                    <li><a href="forms-uploads.html">File Uploads</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-table-merge-cells"></i><span>Category</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">Basic Tables</a></li>
                    <li><a href="tables-datatables.html">Data Tables</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-chart-donut"></i><span>Charts</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="charts-morris.html">Morris</a></li>
                    <li><a href="charts-google.html">Google</a></li>
                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                    <li><a href="charts-sparkline.html">Sparkline</a></li>
                    <li><a href="charts-knob.html">Jquery Knob</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-black-mesa"></i><span>Icons</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="icons-feather.html">Feather Icons</a></li>
                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                </ul>
            </li>

            <li class="menu-title">More</li>

            <li><a href="calendar.html" class=" waves-effect"><i class="mdi mdi-calendar"></i><span>Calendar</span></a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-map-marker-multiple"></i><span>Maps</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="maps-google.html">Google Maps</a></li>
                    <li><a href="maps-vector.html">Vector Maps</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-share-variant"></i><span>Multi Level</span></a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>

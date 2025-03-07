@php
    $setting = App\Models\setting::first();
@endphp
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('admin.dashboard') }}" class="b-brand text-primary">
                <!-- Change your logo from here -->
                <img src="{{ url($setting->logo) }}" alt="logo image" class="logo-lg" style="max-width: 150px; max-height: 50px;">
                <span class="badge bg-primary rounded-pill ms-2 theme-version">Jomijoma Limited</span>
            </a>
        </div>

        <div class="card pc-user-card">
            <div class="card-body">
                <div class="nav-user-image"><a data-bs-toggle="collapse" href="#navuserlink"><img
                            src="{{asset('/')}}admin/assets/images/user/avatar-1.jpg" alt="user-image"
                            class="user-avtar rounded-circle"></a></div>
                <div class="pc-user-collpsed collapse" id="navuserlink">
                    <h4 class="mb-0">{{Auth::user()->name}}</h4><span>Administrator</span>
                    <ul>
                        <li><a class="pc-user-links"><i class="ph-duotone ph-user"></i> <span>My Account</span></a>
                        </li>
                        <li><a class="pc-user-links"><i class="ph-duotone ph-gear"></i> <span>Settings</span></a>
                        </li>
                        <li><a class="pc-user-links"><i class="ph-duotone ph-lock-key"></i> <span>Lock
                                    Screen</span></a></li>
                        <li><a href="{{ route('admin.logout') }}"  class="pc-user-links"><i class="ph-duotone ph-power"></i> <span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption"><label>Navigation</label></li>
                <li class="pc-item pc-hasmenu"><a href="{{ route('admin.dashboard') }}" class="pc-link">
                        <span class="pc-micon"><i class="ph-duotone ph-gauge"></i> </span>
                        <span class="pc-mtext">Dashboard</span>
                        <span class="pc-arrow"></span></a>
                </li>
                
                      
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">SkyCode History</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('about.index')}}">About us</a>
                        </li>
                  
                    </ul>

                </li>
                
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">Services</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('service.index')}}">Service List</a>
                        </li>
                  
                    </ul>
                </li>


                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">FAQ</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('faq.index')}}">FAQ List</a>
                        </li>
                  
                    </ul>
                </li>


                
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">Case Study</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('case.index')}}">Case List</a>
                        </li>
                  
                    </ul>
                </li>

                 
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">Job Position</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('position.index')}}">Job position List</a>
                        </li>

                        <li class="pc-item"><a class="pc-link"
                            href="{{route('details.index')}}">Job Details</a>
                        </li>

                        <li class="pc-item"><a class="pc-link"
                            href="{{route('aplication.index')}}">Public CV</a>
                        </li>
                  
                    </ul>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">Banner</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('banner.index')}}">Banner info</a>
                        </li>
                  
                    </ul>
                </li>
                
                   <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">Teams</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('team.index')}}">Team List</a>
                        </li>
                  
                    </ul>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">Terms & Conditions</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('terms.index')}}">Terms List</a>
                        </li>
                  
                    </ul>
                </li>


                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">Privacy Policy</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('policy.index')}}">Policy List</a>
                        </li>
                  
                    </ul>
                </li>

                {{-- <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">Letest News</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('news.index')}}">News</a>
                        </li>
                  
                    </ul>
                </li> --}}

                {{-- <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">Agent</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('agent.index')}}">Agent List</a>
                        </li>
                  
                    </ul>
                </li> --}}

                {{-- <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">Partner</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('partner.index')}}">Partner List</a>
                        </li>
                  
                    </ul>
                </li> --}}

                <li class="pc-item pc-hasmenu">
                    <a href="{{route('permissions.index')}}" class="pc-link">
                        <span class="pc-micon"><i class="fa fa-users-cog"></i></span>
                        <span class="pc-mtext">Roles & Permissions</span>
                    </a>
                    <!--<ul class="pc-submenu">-->
                    <!--    <li class="pc-item"><a class="pc-link" href="{{route('roles.index')}}">Manage Roles</a></li>-->
                    <!--    <li class="pc-item"><a class="pc-link" href="{{route('permissions.index')}}">Manage Permissions</a></li>-->
                    <!--</ul>-->
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">Setting</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('seo.index')}}">SEO Setting</a>
                        </li>
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('website.index')}}">Website Setting</a>
                        </li>
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('page.index')}}">Page Management</a>
                        </li>
                        <li class="pc-item"><a class="pc-link"
                            href="{{route('smtp.index')}}">SMTP Setting</a>
                        </li>
                        {{-- <li class="pc-item"><a class="pc-link"
                            href="{{route('brand.index')}}">Payment Gateway</a>
                        </li> --}}
                    </ul>
                </li>
            </ul>
            <div class="card nav-action-card">
                <div class="card-body">
                    <h5 class="text-white">Help Center</h5>
                    <p class="text-white text-opacity-75">Please contact us for more questions.</p><a
                        target="_blank" href="https://phoenixcoded.authordesk.app/" class="btn btn-primary">Go to
                        help Center</a>
                </div>
            </div>
        </div>
    </div>
</nav>

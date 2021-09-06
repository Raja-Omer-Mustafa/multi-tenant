<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
            
                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="/index">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>                        
                    </li>
                    @hasrole('admin')
                    <li>
                        <a class="nav-link" href="{{route('admin.users')}}">
                            <i class="fas fa-table" aria-hidden="true"></i>
                            <span>AdminsUsers</span>
                        </a>                        
                    </li>
                    @endhasrole
                    @hasrole('superadmin')
                    <li>
                        <a class="nav-link" href="{{route('supeadmin.users')}}">
                            <i class="fas fa-table" aria-hidden="true"></i>
                            <span>SuperAdminUsers</span>
                        </a>                        
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('users.index')}}">
                            <i class="fas fa-align-left" aria-hidden="true"></i>
                            <span>All Users</span>
                        </a>                        
                    </li>
                    @endhasrole
                </ul>
            </nav>

            <hr class="separator" />

            
            <hr class="separator" />

            
        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                    
                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
        

    </div>

</aside>
<!-- end: sidebar -->
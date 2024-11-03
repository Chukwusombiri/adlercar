<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link">      
      <span class="brand-text font-weight-bold">{{$store ?? 'ADLERCARGO Ltd'}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard               
              </p>
            </a>            
          </li>
          <li class="nav-item">
            <a href="/admin/users" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User Management
                @if (count($latestusers)>0)
                    <span class="right badge badge-danger">New</span>                    
                @endif
              </p>             
            </a>
          </li>
          <li class="nav-item">                       
            <a href="{{route('admin.shipments')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              Shipments
                @if (count($latestshipments)>0)
                    <span class="right badge badge-danger">New</span>                    
                @endif
            </a>                             
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Activity
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">                                                      
              <li class="nav-item">
                <a href="{{route('admin.articles')}}" class="nav-link" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Articles</p>
                </a>
              </li>                           
              <li class="nav-item">
                <a href="{{route('admin.faqs')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.testimonials')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonials</p>
                </a>
              </li>                            
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Company Info
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">              
              <li class="nav-item">
                <a href="{{route('admin.company_details')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company</p>
                </a>
              </li>                                         
              <li class="nav-item">
                <a href="{{route('admin.teamMembers')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.getmail')}}" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                MailBox               
              </p>
            </a>           
          </li>
          <li class="nav-item">
            <a href="{{route('admin.resetpwd')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Change Password                
              </p>
            </a>           
          </li>                   
          <li class="nav-item">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"  class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                {{ __('Logout') }}
            </a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>  
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
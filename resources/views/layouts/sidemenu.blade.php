<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ (request()->is('admin/dashboard')) ? 'active': '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard   
              </p>
            </a>
          </li>
          
          
          
          <li class="nav-item mt-auto">
            <a href="{{ route('setting.index') }}" class="nav-link {{ (request()->is('admin/setting')) ? 'active': '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Setting
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('amenity.index') }}" class="nav-link {{ (request()->is('admin/amenity')) ? 'active': '' }}">
              <i class="nav-icon fas fa-spa"></i>
              <p>
                Amenity
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('developer.index') }}" class="nav-link {{ (request()->is('admin/developer')) ? 'active': '' }}">
              <i class="nav-icon fas fa-spa"></i>
              <p>
                Developer
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('property.index') }}" class="nav-link {{ (request()->is('admin/property')) ? 'active': '' }}">
              <i class="nav-icon fas fa-spa"></i>
              <p>
                Property
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('enquiry.index') }}" class="nav-link {{ (request()->is('admin/enquiry')) ? 'active': '' }}">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Enquiry
              </p>
            </a>                    
          </li>
          <li class="nav-header">Your Account</li>
          <li class="nav-item mt-auto">
            <a href="{{ route('user.profile') }}" class="nav-link {{ (request()->is('admin/profile')) ? 'active': '' }}">
              <i class="nav-icon far fa-user"></i>
              <p>
                Your Profile
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          <li class="text-center mt-5">
            <a href="{{ route('website') }}" class="btn btn-primary text-white" target="_blank">
              <p class="mb-0">
                View Website
              </p>
            </a>                    
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
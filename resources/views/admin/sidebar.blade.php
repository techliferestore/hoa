 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/')}}assets/icons/homeLogo.svg" alt="HOA Logo" class="brand-image "  style="opacity: .8; background:white; ">
      <span class="brand-text font-weight-light">House Of Account</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/')}}dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
          @if(\Session::has('error'))
                        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                    @endif
                    <form method="get" action="{{ route('admin.logout') }}">
                        @csrf
                        <div class="row mt-3">
                            <button type="submit" class="btn text-primary">Logout</button>
                        </div>
                    </form>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  
          <li class="nav-item">
            <a href="{{route('admin_dashboard')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Dashboard
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Our Service
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>

            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{route('servicecategory')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('ourservice')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                  Services
                   
                  </p>
                </a>
              </li>
    
             
            
             
            
            </ul>
          </li>
        
          <li class="nav-item">
            <a href="{{route('leads')}} " class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Leads
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('alluser')}} " class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              All Register User
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('allclient')}} " class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              All Clients
               
              </p>
            </a>
          </li>
         
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Blogs Setting
                <span class="right badge badge-danger">New</span>
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('uploadblog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Bloging</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('postedblog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Posted Bloging</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('allcategory')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('allsubcategory')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subcategory</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('blog_faq')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog faq</p>
                </a>
              </li>
             
             
            
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Packages
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{route('package-setting')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Package Setting</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('package_list')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Packages List</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('add_new_package')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Packages</p>
                </a>
              </li>
            
             
            
            </ul>
          </li>
      

       <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Support Ticket
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Ticket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Ticket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Close Ticket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Answered Ticket</p>
                </a>
              </li>
            

             
            
            </ul>
          </li>
 <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-thumbs-up" aria-hidden="true"></i>

                         <p>
              Subscriber
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Advertisement
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Ticket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Ticket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Close Ticket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Answered Ticket</p>
                </a>
              </li>          
             
            
            </ul>
          </li>

          <li class="nav-header">General Setting</li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              SEO Manager
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Logo & Favicon
               
              </p>
            </a>
          </li>-->


          <li class="nav-header">Frontend Manager</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Section
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('servicecms.index')}}  " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Plans</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{route('servicecms.index')}}  " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Another section</p>
                </a>
              </li>
             
             
            
            </ul>
          </li>

         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Pages
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
             
             
            
            </ul>
          </li>

         

          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
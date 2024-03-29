
<!-- main menu-->
<!-- .main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : '')) -->
<div class="app-sidebar menu-fixed" data-background-color="info"
  data-image="{{asset('images/doctor_background.jpg')}}" data-scroll-to-active="true">
  <!-- main menu header-->
  <!-- Sidebar Header starts-->
  <div class="sidebar-header">
    <div class="logo clearfix" style="background: white;">
      <a class="text-center" href="{{URL('/')}}">
        <div class="my-2"><img src="{{ asset('medfin/medfin-logo.svg') }}" width="120" alt="Apex Logo" /></div>
      </a>
       <a style=" margin-top: 8px; " class="nav-toggle d-none d-lg-none d-xl-block" id="sidebarToggle"
        href="javascript:;"><i class="toggle-icon  ft-toggle-right" style="color: darkgreen;"
          data-toggle="expanded"></i></a><a class="nav-close d-block d-lg-block d-xl-none" id="sidebarClose"
        href="javascript:;"><i class="ft-x"></i></a>
    </div>
  </div>
  <!-- Sidebar Header Ends-->
  <!-- / main menu header-->
  <!-- main menu content-->
  <div class="sidebar-content main-menu-content">
    <div class="nav-container">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{URL('/admin/dashboard')}}"><i class="ft-home"></i><span class="menu-title"
              data-i18n="Dashboard">Dashboard</span></a>
        </li>
        <!-- <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-settings"></i><span class="menu-title"
              data-i18n="UI Kit">Page Management</span>
            {{-- <span class="tag badge badge-pill badge-success float-right mr-1 mt-1">6</span> --}}
          </a>
          <ul class="menu-content">
            <li><a href="{{URL('/admin/master-record/category-list')}}"><i class="ft-arrow-right submenu-icon"></i><span
                  class="menu-item" data-i18n="Grid">Master Service</span></a>
            </li>
            <li><a href="{{ URL('/admin/content') }}"><i class="ft-arrow-right submenu-icon"></i><span
                  class="menu-item" data-i18n="Syntax Highlighter">Page Content</span></a>
            </li>

          </ul>
        </li> -->
        <li class="nav-item"><a href="{{URL('/admin/master-record/category-list')}}"><i class="ft-grid"></i><span class="menu-title"
              data-i18n="User/Staff">Services</span></a>
        </li>
        <li class="nav-item"><a href="{{ URL('/admin/content') }}"><i class="ft-layers"></i><span class="menu-title"
              data-i18n="User/Staff">Page Layout</span></a>
        </li>
        <li class="nav-item"><a href="{{ URL('/admin/testimonials')}}"><i class="ft-feather"></i><span class="menu-title"
              data-i18n="User/Staff">Testimonials</span></a>
        </li>
        <li class="nav-item"><a href="{{URL('/admin/all-Pages')}}"><i class="ft-align-justify"></i><span class="menu-title"
              data-i18n="User/Staff">All Pages</span></a>
        </li>
        <li class="nav-item"><a href="{{URL('/admin/profile')}}"><i class="ft-pocket"></i><span class="menu-title"
              data-i18n="User/Staff">Settings</span></a>
        </li>
        <!-- <li class="nav-item"><a href="{{ URL('/admin/all-enquiries')}}"><i class="ft-message-square"></i><span
              class="menu-title" data-i18n="Enquiry">Enquiry</span></a>
        </li> -->
      </ul>
    </div>
  </div>
  <!-- main menu content-->
  <div class="sidebar-background"></div>

</div>
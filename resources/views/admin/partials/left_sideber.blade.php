  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{asset('back_end/assets/images/faces/face8.jpg')}}" alt="profile image"> </div>
          <div class="text-wrapper">
            <p class="profile-name">Richard V.Welsh</p>
            <div>
              <small class="designation text-muted">Manager</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
        <button class="btn btn-success btn-block">New Project
          <i class="mdi mdi-plus"></i>
        </button>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#dashboard-dropdown" aria-expanded="false" aria-controls="dashboard-dropdown">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="dashboard-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.deshboard') }}">Dashboard 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/dashboards/dashboard-2.html">Dashboard 2</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
        <i class="menu-icon mdi mdi-notification-clear-all"></i>
        <span class="menu-title">Setup</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="page-layouts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.basic') }}">Basic Manage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.social') }}">Social Icon</a>
          </li>
        </ul>
      </div>
    </li>

    <!-- ====slider==== -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.slider') }}">
        <i class="menu-icon mdi mdi-notification-clear-all"></i>
        <span class="menu-title">Slider </span>
      </a>
    </li>
    <!-- =====slider==== -->
    <!-- about -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.about.us') }}">
        <i class="menu-icon mdi mdi-notification-clear-all"></i>
        <span class="menu-title">About </span>
      </a>
    </li>
    <!-- end about -->
    <!-- =======service====== -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.service') }}">
        <i class="menu-icon mdi mdi-notification-clear-all"></i>
        <span class="menu-title">Service </span>
      </a>
    </li>
    <!-- =======End service===== -->

    <!-- ======Resume===== -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.resume') }}">
        <i class="menu-icon mdi mdi-notification-clear-all"></i>
        <span class="menu-title">Resume </span>
      </a>
    </li>
    <!-- ======end resume===== -->
    <!-- ======Skill==== -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.skill') }}">
        <i class="menu-icon mdi mdi-notification-clear-all"></i>
        <span class="menu-title">My Skill </span>
      </a>
    </li>
    <!-- =====end skill===== -->

    <!-- =====Blog===== -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.blog') }}">
        <i class="menu-icon mdi mdi-notification-clear-all"></i>
        <span class="menu-title">Blog </span>
      </a>
    </li>
    <!-- ====end blog==== -->

    <!-- ====Testimonials==== -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.testimonials') }}">
        <i class="menu-icon mdi mdi-notification-clear-all"></i>
        <span class="menu-title">Testimonials </span>
      </a>
    </li>
    <!-- ====end Testimonials==== -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#apps-dropdown" aria-expanded="false" aria-controls="apps-dropdown">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">My Portfolio</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="apps-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.category') }}">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.category.details') }}">Category Details</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/samples/widgets.html">
        <i class="menu-icon mdi mdi-trackpad"></i>
        <span class="menu-title">Widgets</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
        <i class="menu-icon mdi mdi-texture"></i>
        <span class="menu-title">Sidebar Layouts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="sidebar-layouts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">Basic UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/badges.html">Badges</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/modals.html">Modals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
        <i class="menu-icon mdi mdi-lightbulb-outline"></i>
        <span class="menu-title">Advanced Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-advanced">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/ui-features/popups.html">
        <i class="menu-icon mdi mdi-shield-outline"></i>
        <span class="menu-title">Popups</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/ui-features/notifications.html">
        <i class="menu-icon mdi mdi-flag-outline"></i>
        <span class="menu-title">Notifications</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="menu-icon mdi mdi-sticker"></i>
        <span class="menu-title">Icons</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/themify.html">Themify icons</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
        <i class="menu-icon mdi mdi-map-marker-circle"></i>
        <span class="menu-title">Maps</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="maps">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/maps/mapeal.html">Mapeal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon mdi mdi-restart"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/login.html"> Login </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/register.html"> Register </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
        <i class="menu-icon mdi mdi-restart"></i>
        <span class="menu-title">Error pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="error">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <i class="menu-icon mdi mdi-cube-outline"></i>
        <span class="menu-title">General Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/landing-page.html"> Landing Page </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/profile.html"> Profile </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/faq.html"> FAQ </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
        <i class="menu-icon mdi mdi-apple-keyboard-command"></i>
        <span class="menu-title">E-commerce</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="e-commerce">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/orders.html"> Orders </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>

<header class="main-header">
   <!-- Logo -->
   <a href="{{ route('dashboard.index') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P3K</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">{{ config('app.name') }}</span>
   </a>
   <!-- Header Navbar: style can be found in header.less -->
   <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="javascript:void(0)" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
         <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
               <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
               <img src="{{ asset('public/template/adminlte') }}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
               <span class="hidden-xs">{{ Auth::user()->name }}</span>
               </a>
               <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                     <img src="{{ asset('public/template/adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                     <p>
                        {{ Auth::user()->name }}
                        <small>{{ Auth::user()->email }}</small>
                     </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                     <div class="pull-left">
                        <a href="{{ route('gantipass.index') }}" class="btn btn-warning btn-flat">Ganti Password</a>
                     </div>
                     <div class="pull-right">
                        <a class="btn bg-navy btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                        </form>
                     </div>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>
</header>
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true" data-img="{{ asset('theme-assets/images/backgrounds/02.jpg')}}">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">       
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="{{ asset('template1/img/logo.png')}}"/>
            <h3 class="brand-text">Admin Rindu Hati</h3></a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=""><a href="{{url('admin/dashboard')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class=""><a href="{{url('admin/profil')}}"><i class="ft-user"></i><span class="menu-title" data-i18n="">Profil</span></a>
        </li>
        <li class=""><a href="{{url('admin/pariwisata')}}"><i class="ft-user"></i><span class="menu-title" data-i18n="">Pariwisata</span></a>
        </li>
        <li class="active"><a href="{{url('admin/paket')}}"><i class="ft-user"></i><span class="menu-title" data-i18n="">Paket</span></a>
        </li>
        <li class=""><a href="{{url('admin/blog')}}"><i class="ft-user"></i><span class="menu-title" data-i18n="">Blog</span></a>
        </li>
      </ul>
    </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="{{url('logout')}}">Logout</a>
    <div class="navigation-background"></div>
  </div>
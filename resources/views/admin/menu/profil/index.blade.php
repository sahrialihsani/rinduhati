<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Profil Admin</title>
	<link rel="icon" href="{{ asset('template1/img/logo.png')}}" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css')}}" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/vendors.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/app-lite.css')}}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/core/colors/palette-gradient.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

   @include('admin/layout/navbar')
   @include('admin/layout/sidebar_profil')


    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Profil</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Profil
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->
            <section id="header-footer">
                <div class="row match-height">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div style="margin-top:20px;text-align: center">
                                <img style="width:50%;height:300px;object-fit:cover" class="" src="{{ asset('theme-assets/images/carousel/22.jpg')}}" alt="Card image cap">
                            </div>
                            <div style="text-align: center" class="card-body">
                                <h4 class="card-title">Sahrial Ihsani Ishak</h4>
                                <span style="font-size:15px;background-color: rgb(27, 131, 179);padding-top:4px;padding-bottom:5px;padding-left:5px;padding-right:5px;border-radius: 10px">
                                   <a style="color:white" class="card-link">Sahrialishak@gmail.com</a>
                                </span>
                                <br>
                                <br>
                            <button class="btn btn-primary">Ubah Profil</button>

                            </div>
                            <div class="card-body">
                                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a> --}}
                            </div>
                            {{-- <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                <span class="float-left">
                                    <button class="btn btn-primary"><a style="color:white" href="#" class="card-link">Ubah Profil</a></button>
                                </span>
                            </div> --}}
                        </div>
                    </div>
                    {{-- <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Ubah Profil</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <form action="{{url('#')}}" method="POST" id="#">
                                            <fieldset class="form-group">
                                                <label class="float-left">Nama Anda</label>
                                                <input type="text" class="form-control" id="basicInput" placeholder="Masukan Nama Anda">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label class="float-left">Email Anda</label>
                                                <input type="email" class="form-control" id="placeholderInput" placeholder="Masukan Email Anda">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label class="float-left">Password Anda</label>
                                                <input type="password" class="form-control" id="passwordField" placeholder="Masukan Password Anda">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label class="float-left">Password Anda</label>
                                                <input type="password" class="form-control" id="passwordField" placeholder="Konfirmasi Password Anda">
                                            </fieldset>
                                            <button style="border-radius: 10px;height:50px;font-size:medium" class="btn btn-lg btn-primary btn-block btn-login" type="submit">Ubah Profil</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </section>
<!-- Bordered table end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

@include('admin/layout/footer')

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('theme-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="{{ asset('theme-assets/js/core/app-menu-lite.js')}}" type="text/javascript"></script>
    <script src="{{ asset('theme-assets/js/core/app-lite.js')}}" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
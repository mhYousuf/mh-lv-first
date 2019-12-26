<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('back_end/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('back_end/assets/vendors/iconfonts/puse-icons-feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('back_end/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('back_end/assets/vendors/css/vendor.bundle.addons.css')}}">
   
    <link rel="stylesheet" href="{{asset('back_end/assets/css/shared/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('back_end/assets/images/favicon.png')}}" />
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{asset ('back_end/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('back_end/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{asset('back_end/assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('back_end/assets/js/shared/hoverable-collapse.js')}}"></script>
    <script src="{{asset('back_end/assets/js/shared/misc.js')}}"></script>
    <script src="{{asset('back_end/assets/js/shared/settings.js')}}"></script>
    <script src="{{asset('back_end/assets/js/shared/todolist.js')}}"></script>
    @if(session('login'))
    <script type="text/javascript">
        $.toast({
      heading: 'Success',
      text: 'Admin Login .',
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#f96868',
      position: 'top-right'
    });
    </script>
    @endif
    @if(session('login_fail'))
    <script type="text/javascript">
        $.toast({
      heading: 'Failed',
      text: 'Your Login Incarect.',
      showHideTransition: 'slide',
      icon: 'warning',
      loaderBg: '#57c7d4',
      position: 'top-right'
    });
    </script>
    @endif
</body>
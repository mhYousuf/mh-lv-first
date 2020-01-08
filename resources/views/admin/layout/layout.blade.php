<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
</head>
<body class="sidebar-fixed">
    <div class="container-scroller">
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            @include('admin.partials.navbar')
        </nav>
        <div class="container-fluid page-body-wrapper">
                @include('admin.partials.right_bar')
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                @include('admin.partials.left_sideber')
            </nav>
            <div class="main-panel">
                @yield('content')
                <footer class="footer">
                    @include('admin.partials.footer')
                </footer>
            </div>
        </div>
    </div>
    <!-- End custom js for this page-->
    @include('admin.partials.js_link')

    @if(session('insert'))
        <script type="text/javascript">
            $.toast({
          heading: 'Success',
          text: 'Data Insert Successfully.',
          showHideTransition: 'slide',
          icon: 'success',
          loaderBg: '#f96868',
          position: 'top-right'
        });
    </script>
    @endif
    @if(session('update'))
        <script type="text/javascript">
            $.toast({
          heading: 'Success',
          text: 'Data Update Successfully.',
          showHideTransition: 'slide',
          icon: 'success',
          loaderBg: '#f96868',
          position: 'top-right'
        });
    </script>
    @endif

    @if (session('change'))
    <script type="text/javascript">
        swal({
        title: 'Congratulations!',
        text: 'Your Password Change Is Successfully',
        icon: 'success',
        button: {
          text: "Continue",
          value: true,
          visible: true,
          className: "btn btn-success"
        }
      });
    </script>
    @endif

</body>
</html>
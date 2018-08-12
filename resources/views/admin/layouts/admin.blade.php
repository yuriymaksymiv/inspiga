<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inspiga | Soft - Admin</title>

    <link href="{{ asset('admin_style/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_style/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_style/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_style/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_style/css/style.css') }}" rel="stylesheet">



</head>

<body>
<div id="wrapper">


    @include('admin.layouts._nav')
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        @yield('content')
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

    </div>
</div>

<!-- Mainly scripts -->
<script src="../admin_style/js/jquery-3.1.1.min.js"></script>
<script src="../admin_style/js/bootstrap.min.js"></script>
<script src="../admin_style/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../admin_style/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="../admin_style/js/inspinia.js"></script>
<script src="../admin_style/js/plugins/pace/pace.min.js"></script>
<script src="../admin_style/js/plugins/peity/jquery.peity.min.js"></script>
<script src="../admin_style/js/demo/peity-demo.js"></script>


</body>

</html>
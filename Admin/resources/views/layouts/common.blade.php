<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('layouts.header')
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    @include('layouts.left')    
                </div>
                <!-- top navigation --> 
                @include('layouts.topnav')
                <!-- /top navigation -->
                <!-- page content -->
                <div class="right_col" role="main">
                    @yield('content')
                </div>
            <!-- /page content -->
        </div>
    </div>
    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
    @include('layouts.footer')
    <!-- /footer content -->
    </body>
</html>
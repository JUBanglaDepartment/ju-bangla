@include('admin.subview.head')

        <!-- Navigation -->
        @yield('navigation_content')
        <!-- Navigation -->

        <div id="page-wrapper">

            <div class="container-fluid">

                @yield('body_content')


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
@include('admin.subview.tail')

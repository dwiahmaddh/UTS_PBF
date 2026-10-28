<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.partials.head')
</head>

<body @hasSection('body_class') class="@yield('body_class')" @else data-topbar="dark" @endif>

    @hasSection('no_chrome')
        {{-- Halaman tanpa menubar/sidebar (mis. login) --}}
        @yield('content')
    @else
        <!-- Begin page -->
        <div id="layout-wrapper">

            {{-- Header / Menubar --}}
            @include('admin.partials.header')

            {{-- Sidebar --}}
            @include('admin.partials.sidebar')

            <!-- Start right Content here -->
            <div class="main-content">

                <div class="page-content">
                    {{-- Main Content --}}
                    @yield('content')
                </div>
                <!-- End Page-content -->

                {{-- Footer --}}
                @include('admin.partials.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @include('admin.partials.rightbar')
    @endif

    {{-- Scripts --}}
    @include('admin.partials.scripts')
</body>

</html>

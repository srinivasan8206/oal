<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('settings.site_name') }}</title>
    
    @laravelPWA

    <link rel="stylesheet" href="{{ asset('admin/css/vendor.styles.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/demo/legacy-template.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">

    <!-- inject:js -->
    <script src="{{ asset('admin/js/vendor.base.js') }}"></script>
    <script src="{{ asset('admin/js/vendor.bundle.js') }}"></script>
    <script src="{{ asset('common/js/axios.js') }}"></script>
    <script src="{{ asset('common/js/toastr.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('common/css/toastr.css') }}">
    
    <script src="{{ asset('common/js/sweet-alert.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('common/css/sweet-alert.css') }}">


    <script src="{{ asset('common/js/parsley.min.js') }}" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('common/css/parsley.css') }}">
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    

    <script type="text/javascript">
        var SITE_URL = "{{ url('/') }}/";
    </script>
</head>
<body>
    
    <div id="overlay" style="display:none;"><div class="spinner"></div><br/>Loading...</div>
    
    {{-- <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
  
        
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
            <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
            <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>
            {{ Auth::user()->name }} <span class="caret"></span>
        
            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                              
                        @endguest --}}

        @yield('content')



        <script src="{{ asset('admin/js/vendor-override/chartjs-doughnut.js') }}"></script>
        <script src="{{ asset('admin/js/vendor-override/tooltip.js') }}"></script>
        <script src="{{ asset('admin/js/components/legacy-sidebar/common.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('common/css/general.css') }}">
        <script src="{{ asset('common/js/general.js') }}"></script>

        @yield('scripts')
        
        <script>
            @if ($message = Session::get('success'))
                toastr.success("{{ $message }}");
            @endif

            @if ($message = Session::get('error'))
                 toastr.error("{{ $message }}");
            @endif

            @if ($message = Session::get('warning'))
                 toastr.warning("{{ $message }}");
            @endif

            @if ($message = Session::get('info'))
                 toastr.info("{{ $message }}");
            @endif
        </script>
    </body>
</html>

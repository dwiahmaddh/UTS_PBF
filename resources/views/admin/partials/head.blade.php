<meta charset="utf-8" />
<title>@yield('title', 'Dashboard') | Upcube - Admin & Dashboard Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesdesign" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('upcube/assets/images/favicon.ico') }}">

{{-- CSS khusus halaman --}}
@stack('styles')

<!-- Bootstrap Css -->
<link href="{{ asset('upcube/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ asset('upcube/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ asset('upcube/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.admin-resources.admin-head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
  @include('layouts.admin-resources.admin-navbar')
  @include('layouts.admin-resources.admin-sidebar')
  @include('layouts.admin-resources.admin-content')
</body>
</html>

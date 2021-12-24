<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.user-resources.user-head')
</head>
<?php 
$full_name = Auth::user()->name;
$nameArray = explode(' ',trim($full_name)); ?>

<body class="g-sidenav-show  bg-gray-100">
  @include('layouts.user-resources.profile-sidebar')
   <div class="main-content position-relative bg-gray-100">
   <!--  Navbar -->
   @include('layouts.user-resources.profile-navbar')
    <!-- End Navbar -->
    @include('layouts.user-resources.profile-content')
  <!--   Core JS Files   -->
 @include('layouts.user-resources.user-scripts')
</body>

</html>
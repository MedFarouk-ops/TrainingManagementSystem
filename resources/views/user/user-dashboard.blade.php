<!--
=========================================================
* Soft UI Dashboard - v1.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/soft-ui-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.user-resources.user-head')
</head>
<?php 
$full_name = Auth::user()->name;
$nameArray = explode(' ',trim($full_name)); ?>

<body class="g-sidenav-show   bg-gray-100">
  @include('layouts.user-resources.user-sidebar')
  <main class="main-content mt-1 border-radius-lg">
    <!-- Navbar -->
  @include('layouts.user-resources.user-navbar')
    <!-- End Navbar -->
    @include('layouts.user-resources.user-content')
  <!--   Core JS Files   -->
 @include('layouts.user-resources.user-scripts')
</body>

</html>
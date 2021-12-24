<!DOCTYPE html>
<html lang="en">
@include('layouts.formateur-resources.formateur-head')


<body class="">
  <div class="wrapper ">
  	@include('layouts.formateur-resources.formation-sidebar')
      <div class="main-panel">
    @include('layouts.formateur-resources.formateur-navbar')
    
    @include('layouts.formateur-resources.formation-content')

    </div>
      </div>
</body>
@include('layouts.formateur-resources.formateur-footer-script')
</html>

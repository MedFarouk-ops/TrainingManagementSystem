<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('assets-formateur/img/sidebar-1.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
         {{Auth::guard('formateur')->user()->first_name}}
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="{{ route( 'formateur.dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Accueil</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="{{ route( 'formateur.profile') }}">
              <i class="material-icons">person</i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route( 'formateur.formation.table') }}">
              <i class="material-icons">content_paste</i>
              <p>Formations</p>
            </a>
          </li>
         <li class="nav-item ">
            <a class="nav-link" href="{{ route( 'formateur.user.list') }}">
              <i class="material-icons">face</i>
              <p>Candidat inscrit</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{ route( 'formateur.inbox') }}">
              <i class="material-icons">library_books</i>
              <p>Inbox</p>
            </a>
          </li>
        
        </ul>
      </div>
    </div>
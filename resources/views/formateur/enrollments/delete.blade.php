<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets-formateur/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets-formateur/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('assets-formateur/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets-formateur/demo/demo.css')}}" rel="stylesheet" />
    <title>Supprimer inscription</title>
</head>
<body>


    <div class="container">
    <div class="col">
    <div class="form-group">
         <h2><strong>Supprimer l'inscription de {{$user->name}} au {{$formation->title}} </strong></h2>
         <hr>
    <form action="{{route('enrollment.delete.submit',$enrollment->id)}}" method="post">
        @csrf
        @method('DELETE')
            
             <p>Êtes-vous sûr de vouloir supprimer cette inscription?</p>
             <p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
         
         <div class="modal-footer">
           
            <input type="submit" class="btn btn-danger" class="btn btn-danger" value="Supprimer">
             <a href="{{ route('formateur.user.list')}}" class="btn btn-info"> annuler </a>
         </div>
    </form>
    </div>
    </div>
    </div>
</body>
</html>
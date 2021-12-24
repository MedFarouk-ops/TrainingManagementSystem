<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Gestion de cours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">


  <div class="col">
    <div class="e-tabs mb-3 px-3">
      <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#">Gestion d'inscription:</a></li>
      </ul>
    </div>

    <div class="row flex-lg-nowrap">
      <div class="col mb-3">
        <div class="e-panel card">
          <div class="card-body">
            <div class="card-title">
            </div>
            <div class="e-table">
              <div class="table-responsive table-lg mt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="align-top">
                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0">
                          <input type="checkbox" class="custom-control-input" id="all-items">
                          <label class="custom-control-label" for="all-items"></label>
                        </div>
                      </th>
                      <th class="max-width">Nom</th>
                      <th class="max-width">Email</th>
                       <th class="max-width">Telephone</th>
                      <th> </th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   

                    <?php $userPermissions = App\Permission::all();?>
                    @foreach($userPermissions as $permission)
                    <?php 
                    $user = App\User::with('permissions')->find($permission->user_id);
                    $full_name = $user->name;
                    $nameArray = explode(' ',trim($full_name)); ?>
                    <tr>
                      <td class="align-middle">
                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                          <input type="checkbox" class="custom-control-input" id="item-1">
                          <label class="custom-control-label" for="item-1"></label>
                        </div>
                      </td>
                     
                      <td class="text-nowrap align-middle">{{$user->name}}</td>
                      <td class="text-nowrap align-middle">{{$user->email}}</td>
                      <td class="text-nowrap align-middle"><span>{{$user->telephone}}</span></td>
                      <?php if($permission->status =="accepted"){ ?> 
                      <td class="text-center align-middle"><i class="fa fa-fw text-secondary cursor-pointer fa-toggle-on"></i></td>
                      <td class="text-center align-middle">
                      <?php }else{ ?> 
                       <td class="text-center align-middle"><i class="fa fa-fw text-secondary cursor-pointer fa-toggle-off"></i></td>
                       <td class="text-center align-middle">
                       <?php } ?>
                        <div class="btn-group align-top">
                            <form action="{{ route('permission.edit' ,$permission->id) }}" method="post">
                            {{ csrf_field() }}
                            <button class="btn btn-sm btn-outline-secondary badge"  type="submit" >Edit</button>
                            </form>
                            
                            <form action="{{route('permission.delete',$permission->id) }}" method="post">
                              {{ csrf_field() }}
                            <button class="btn btn-sm btn-outline-secondary badge" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
             
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 mb-3">
        <div class="card">
          <div class="card-body">
            
            <hr class="my-3">
            <div class="e-navlist e-navlist--active-bold">
              <ul class="nav">
                <?php 
                $permission_actif=0;
                $permission_attent=0;
                $permission_refus=0;
                $permissions = App\Permission::all();
                foreach($permissions as $permission){
                  if($permission->status =="accepted"){
                  $permission_actif++;
                  }
                  else if($permission->status =="awaiting"){
                  $permission_attent++; 
                  }
                  else if($permission->status =="rejected"){
                  $permission_refus++;
                  }
                }

                ?>
                <li class="nav-item active"><a href="" class="nav-link"><span>Acceptée</span>&nbsp;<small>/&nbsp;{{$permission_actif}}</small></a></li>
                <li class="nav-item"><a href="" class="nav-link"><span>En attend</span>&nbsp;<small>/&nbsp;{{$permission_attent}}</small></a></li>
                <li class="nav-item"><a href="" class="nav-link"><span>Refusée</span>&nbsp;<small>/&nbsp;{{$permission_refus}}</small></a></li>
              </ul>
            </div>
            <hr class="my-3">
            <div>
            
              <div class="form-group">
                <label>Rechercher par nom :</label>
                <div><input class="form-control w-100" type="text" placeholder="Nom candidat" value=""></div>
              </div>
            </div>
            <div class="btn">
              <a href="{{route('admin.dashboard')}}" class="btn btn-success"> Retour</a>
            </div>
            
          </div>
        </div>
      </div>
    </div>



  </div>
</div>
</div>

<style type="text/css">
body{
    margin-top:20px;
    background:#f8f8f8
}
</style>

<script type="text/javascript">

</script>
</body>
</html>
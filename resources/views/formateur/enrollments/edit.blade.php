<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Gestion De permission au formation</title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>body {
    background: #BA68C8
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: #BA68C8;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}</style>
    </head>
    <body oncontextmenu='return false' class='snippet-body'>
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><h6>Info. Formation:</h6></div>
                <div class="col-md-12"><label class="labels">Titre : </label><input type="text" class="form-control"  value="{{$formation->title}}" disabled></div>
                <div class="col-md-12"><label class="labels">Description :</label><p>{{$formation->description}}</p>
                  <div class="col-md-12"><label class="labels">Date debut :</label><input type="text" class="form-control" value="
                {{$formation->date_debut}}" disabled></div>
                <div class="col-md-12"><label class="labels">Date Fin :</label><input type="text" class="form-control" value="
                {{$formation->date_fin}}" disabled></div>
                <div class="col-md-12"><label class="labels">Durée :</label><input type="text" class="form-control" value="
                {{$formation->duree}}" disabled></div>
              
            </div>
        </div>
    </div>
        
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="text-right">Information sur le candidat : </h6>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Nom : </label><input type="text" class="form-control"  value="{{$user->name}}" disabled></div>
                    <div class="col-md-12"><label class="labels">Telephone :</label><input type="text" class="form-control" value="{{$user->telephone}}" disabled></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Instiution : </label><input type="text" class="form-control" placeholder="headline" value="{{$user->institution}}" disabled ></div>
                    <div class="col-md-12"><label class="labels">Education: </label><input type="text" class="form-control" placeholder="education" value="{{$user->status}}" disabled></div>
                    <div class="col-md-12"><label class="labels">Notes par le candidat : </label><input type="text" class="form-control" placeholder="education" value="{{$user->notes}}" disabled></div>
                </div>
               
               
            </div>
        </div>
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><span class="font-weight-bold">Permission</span><span class="text-black-50"></span><span></span></div>
            
            <form action="{{route('enrollment.edit.submit',$enrollment->id)}}" method="post">
                @csrf
                @method('PUT')
                
                <input type="radio" name="status"  <?php echo ($enrollment->status=='accepted')?'checked':'' ?> value="accepted">
                <label>Acceptée </label>
                <br>
                <input type="radio" name="status" <?php echo ($enrollment->status=='awaiting')?'checked':'' ?>  value="awaiting">
                <label>En attend</label>
                <br>
                <input type="radio" name="status"  <?php echo ($enrollment->status=='rejected')?'checked':'' ?>  value="rejected">
                <label>Rejetée</label>
                
                 <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Enregistrer</button></div>
            </form>

        </div>

       
</div>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
</body>
</html>
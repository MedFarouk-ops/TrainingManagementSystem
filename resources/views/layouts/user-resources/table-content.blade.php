 <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Mes Formation</h2>
                <p class="text-center">Ici vous trouvez les formation dont lequelles vous étes inscrit. </p>
            </div>
            
            <div class="row articles">
            <?php $user = App\User::with('enrollments')->find(auth()->user()->id);?>
            <?php $userEnrollments = App\Enrollment::all()->where('user_id',$user->id);?>
            @foreach($userEnrollments as $enrollment)
            <?php $formation = App\Formation::with('enrollments')->find($enrollment->formation_id);?>
            
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="{{asset($formation->image)}}"></a>
                    <h3 class="name">{{$formation->title}}</h3>
                    <p class="description">{{substr($formation->description,0,50)}} ..</p><span>{{$enrollment->status}}</span></div>
            @endforeach
               
            
    </div>
    </div>
    </div>

                
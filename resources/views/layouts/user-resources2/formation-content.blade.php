 <!-- Page Content -->
 <div id="page-wrapper">
            <div class="container-fluid">

        <main role="main">

          <section class="jumbotron text-center">
            <div class="container">
              <h1 class="jumbotron-heading">Liste de Formation</h1>
              <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
              <p>
                <a href="{{ route('formation.create') }}" class="btn btn-primary my-2">Ajouter Formation</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
              </p>
            </div>
          </section>

          <div class="content">
        <div class="container-fluid">
          <div class="row">
        

               <?php $formateur = App\Formateur::with('formations')->find(auth()->guard('formateur')->user()->id);?>
               @foreach ($formateur->formations as $formation)
                <div class="col-md-4 pb-8">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{asset($formation->image)}}" width="360" height="200" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">{{substr($formation->description,0,50)}}..</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <form action="{{ route('formations.destroy', $formation->id)}}" method="post">
            @csrf
            @method('DELETE')
                          <input type="submit" name="delete" value="Delete" class="btn btn-info my-2" />
                        </form>
                        <a href="{{ route('formations.edit' ,$formation->id) }}" class="btn btn-primary my-2">edit</a>
                        @csrf
                    @method('DELETE')
                        
                        </div>
                        <small class="text-muted">{{$formation->created_at}}</small>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
               
               
              </div>
            </div>
          </div>

        </main>

        <footer class="text-muted">
        @include('layouts.formateur-resources.formateur-footer')
        </footer>
        </div>
        </div>
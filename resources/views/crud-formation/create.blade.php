<!DOCTYPE html>
<html>
@include('layouts.admin-resources.admin-head')
<body>
  <div class="container">
<form method="post" action="{{ route('formation.store') }}" enctype="multipart/form-data">
          @csrf

  <div class="form-group">
    <label for="title">Titre</label>
    <input type="text" class="form-control" id="title"  placeholder="Enter title" name='title'>
              @error('title')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description"  placeholder="Enter description" name='description'>
              @error('description')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
  </div>
 
  <div class="form-group">
    <label for="link">Lien de formation</label>
    <input type="text" class="form-control" id="link"  placeholder="Enter link" name='link'>
              @error('link')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
  </div>

   <div class="form-group">
    <label for="date_debut">date de debut</label>
    <input type="date" class="form-control" id="date_debut"  name='date_debut'>
              @error('date_debut')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
  </div>
   <div class="form-group">
    <label for="link">Date de fin</label>
    <input type="date" class="form-control" id="date_fin" name='date_fin'>
              @error('date_fin')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
  </div>

   <div class="form-group">
    <label for="duree">Durée</label>
    <input type="text" class="form-control" id="duree"  placeholder="1.00H" name='duree'>
              @error('duree')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
  </div>

   <div class="form-group">
    <label for="categorie">Categorie</label>
    <input type="text" class="form-control" id="categorie"  placeholder="categorie" name='categorie'>
              @error('categorie')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
  </div>
   <div class="form-group">
    <label for="certified">ce cours délivre-il un certificat ? </label>
    <select id="certified" name="certified">
      <option value="oui">Oui</option>
      <option value="non">Non</option>
    </select>
              @error('certified')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
  </div>

  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control-file" id="image" name='image'  accept = 'image/jpeg , image/jpg, image/gif, image/png'>
             @error('image')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</div>
</html>

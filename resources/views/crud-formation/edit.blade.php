<!DOCTYPE html>
<html>
@include('layouts.admin-resources.admin-head')
<body>
  <div class="container">
<form method="post" action="{{ route('formations.update', $formation->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title"  placeholder="Enter title" name='title' value="{{ $formation->title }}">
              @error('title')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description"  placeholder="Enter description" name='description' value="{{ $formation->description }}">
              @error('description')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
  </div>
 
  <div class="form-group">
    <label for="link">Link</label>
    <input type="text" class="form-control" id="link"  placeholder="Enter link" name='link' value="{{ $formation->link }}">
              @error('link')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
  </div>

  <div class="form-group">
    <label for="image">Image</label>
    <div class="col-md-8">
    <img class="img-thumbnail" src="{{asset($formation->image)}}" width="200"  alt="Card image cap">
    <input type="file" class="form-control-file" id="image" name='image'>
             @error('image')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
            </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</div>
</html>

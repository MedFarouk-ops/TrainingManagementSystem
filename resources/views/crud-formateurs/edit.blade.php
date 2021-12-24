  <!-- Edit Modal HTML -->
    <div id="{{$formateur->first_name.$formateur->id}}" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
        <form method="post" action="{{ route('admins.update_formateur', $formateur->id) }}">
            @method('PATCH') 
            @csrf
            <div class="modal-header">						
              <h4 class="modal-title">Update Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">					
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $formateur->first_name }} />
                </div>

                <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $formateur->last_name }} />
                </div>

                <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $formateur->email }} />
                </div>
                <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" name="city" value={{ $formateur->city }} />
                </div>
                <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" name="country" value={{ $formateur->country }} />
                </div>
                <div class="form-group">
                <label for="job_title">Job Title:</label>
                <input type="text" class="form-control" name="job_title" value={{ $formateur->job_title }} />
                </div>	
				    <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" name="phone" value={{ $formateur->phone }} />
                </div>		
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-success" value="Update">
            </div>
          </form>
      </div>
    </div>
  </div>
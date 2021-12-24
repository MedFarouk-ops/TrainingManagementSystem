@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
        <form method="post" action="{{ route('admins.store_formateur') }}">
          @csrf
            <div class="modal-header">						
              <h4 class="modal-title">Add Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">					
						<div class="form-group">    
							<label for="first_name">First Name:</label>
							<input type="text" class="form-control" name="first_name"/>
							@error('first_name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="last_name">Last Name:</label>
							<input type="text" class="form-control" name="last_name"/>
							@error('last_name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="email">Email:</label>
							<input type="text" class="form-control" name="email"/>
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="city">City:</label>
							<input type="text" class="form-control" name="city"/>
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="country">Country:</label>
							<input type="text" class="form-control" name="country"/>
							@error('country')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="job_title">Job Title:</label>
							<input type="text" class="form-control" name="job_title"/>
							@error('job_title')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>    
						<div class="form-group">
							<label>Phone</label>
							<textarea class="form-control" name="phone" id="phone" required></textarea>
							@error('phone')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label>Password</label>
							<input id="password" type="password" name="password" class="form-control" required>
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>		
						<div class="form-group">
							<label>Confirm Password</label>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" type="password"  class="form-control" required>
						</div>				
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-success" value="Add">
            </div>
          </form>
      </div>
    </div>
  </div>


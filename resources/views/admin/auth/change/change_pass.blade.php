@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="">Change Password</h2>
                    <br>
					<form class="" method="POST" action="{{ route('auth.password.update') }}">
						@csrf
						<!-- <div class="col-md-12">              -->
							<div class="row">
								<div class="form-group col-md-12">
									<label for="" class="col-sm-4 control-label">Current Password</label>
								    <input type="password" class="form-control" id="old_pass" name="old_pass" placeholder="Old Password" required="">
								</div>
							</div>
							<div class="row">
							    <div class="form-group col-md-12">
									<label for="" class="col-sm-4 control-label">New Password</label>
							    	<input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="Password" required="">
							  	</div>
							</div>
							<div class="row">
							  	<div class="form-group col-md-12">
									<label for="" class="col-sm-4 control-label">Re-enter Password</label>
							    	<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Re-enter Password" required="">
							  	</div>
							</div>
							<br>
							<div class="form-group">
								<!-- <div class="col-sm-offset-5 col-sm-6"> -->
							  		<button type="submit" class="btn btn-success mr-2">Change Password</button>
								</div>
							<!-- </div> -->
						<!-- </div> -->
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
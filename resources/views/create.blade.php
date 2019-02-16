@extends( "layouts.master" )
@section( "title", "Create Page Developed by Lais" )
@section( "content" )
    <div class="container">
    	<div class="panel panel-primary">
    		<div class="panel-heading">
    			<h3>Add New Student</h3>
    		</div> <!-- /.panel-heading -->
    		<div class="panel-body">
    			
    			@if( $errors->any() )
    				@foreach( $errors->all() as $error )
	    				<div class="alert alert-dismissible alert-danger">
			              <button type="button" class="close" data-dismiss="alert">×</button>
			              <strong>Sorry !</strong> {{ $error }}
			            </div>
			        @endforeach
    			@endif

    			<form action="{{ route( 'store' ) }}" method="POST" class="form-horizontal">

    				@csrf

				  <fieldset>
				    
				    <legend>Legend</legend>
				    
				    <div class="form-group">
				      <label for="first_name" class="col-md-2 control-label">First Name</label>

				      <div class="col-md-10">
				        <input type="text" class="form-control" id="first_name" autocomplete="off" name="first_name" value="{{ old( 'first_name' ) }}" placeholder="First Name">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="last_name" class="col-md-2 control-label">Last Name</label>
				      
				      <div class="col-md-10">
				        <input type="text" class="form-control" id="last_name" autocomplete="off" name="last_name" value="{{ old( 'last_name' ) }}" placeholder="Last Name">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="email" class="col-md-2 control-label">Email</label>

				      <div class="col-md-10">
				        <input type="email" class="form-control" id="email" autocomplete="off" name="email" value="{{ old( 'email' ) }}" placeholder="Email">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="phone" class="col-md-2 control-label">Phone Number</label>

				      <div class="col-md-10">
				        <input type="text" class="form-control" id="phone" autocomplete="off" name="phone" value="{{ old( 'phone' ) }}" placeholder="Phone Number">
				      </div>
				    </div>
				    
				    <div class="form-group">
				      <div class="col-md-10 col-md-offset-2">
				        <button type="submit" class="btn btn-primary">Submit</button>
				        <button type="reset" class="btn btn-default">Cancel</button>
				      </div>
				    </div>

				  </fieldset>
				</form>

    		</div> <!-- /.panel-body -->
    	</div>
    </div> <!-- /.container -->
@endsection
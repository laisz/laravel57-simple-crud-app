@extends( "layouts.master" )
@section( "title", "Edit Page Developed by Lais" )
@section( "content" )
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3>Edit Student Here</h3>
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

                <form action="{{ route( 'update', $student->id ) }}" method="POST" class="form-horizontal">

                    @csrf

                  <fieldset>
                    
                    <div class="form-group">
                      <label for="first_name" class="col-md-2 control-label">First Name</label>

                      <div class="col-md-10">
                        <input type="text" class="form-control" autocomplete="off" id="first_name" name="first_name" value="{{ $student->first_name }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="last_name" class="col-md-2 control-label">Last Name</label>
                      
                      <div class="col-md-10">
                        <input type="text" class="form-control" autocomplete="off" id="last_name" name="last_name" value="{{ $student->last_name }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="col-md-2 control-label">Email</label>

                      <div class="col-md-10">
                        <input type="email" class="form-control" autocomplete="off" id="email" name="email" value="{{ $student->email }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="phone" class="col-md-2 control-label">Phone Number</label>

                      <div class="col-md-10">
                        <input type="text" class="form-control" autocomplete="off" id="phone" name="phone" value="{{ $student->phone }}">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-md-10 col-md-offset-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-default">Cancel</button>
                      </div>
                    </div>

                  </fieldset>
                </form>

            </div> <!-- /.panel-body -->
        </div>
    </div> <!-- /.container -->
@endsection
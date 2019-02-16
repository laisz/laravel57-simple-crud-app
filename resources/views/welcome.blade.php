@extends( "layouts.master" )
@section( "title", "Home Page Developed by Lais" )
@section( "content" )
    
    <div class="container">
        <h1>Home-Page</h1>
    </div> {{-- /.container --}}

    <div class="container">
       <div class="jumbotron">
          <h1>Simple Crud Application of Laravel 5.7</h1>
          <p>Created by <span class="text-primary"><a target="_blank" href="http://www.facebook.com/lzmnn">Lais Uz Zaman</a></span> ( laisuzzaman@gmail.com )</p>
          <p><a class="btn btn-primary btn-lg" href="{{ route( 'list' ) }}" role="button">Studendt Details</a></p>
        </div
    </div> {{-- /.container --}}
@endsection
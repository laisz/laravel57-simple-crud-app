
<div class="navbar navbar-primary">
  <div class="container-fluid">

    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="{{ route( 'home' ) }}"><b style='font-style:italic;'>LAI<span style='color:deeppink'>S</span></b></a>
      
    </div>
    
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      
      <ul class="nav navbar-nav">
        <li class="active"><a href="javascript:void(0)">Active</a></li>
        <li><a href="{{ route( 'home' ) }}">Home Page</a></li>
        <li><a href="{{ route( 'list' ) }}">Student List/Details</a></li>
        <li><a href="{{ route( 'create' ) }}">Add New Student</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route( 'home' ) }}">Homepage</a></li>
            <li><a href="#">User</a></li>
            <li><a href="{{ route( 'create' ) }}">Add Student</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0)">Log Out</a></li>
          </ul>
        </li>
      </ul>

    </div>

  </div>
</div>
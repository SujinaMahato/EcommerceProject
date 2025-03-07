<?php
use App\Http\Controllers\ProductController;
$total=0;
if(session()->get('user')){
  $total=ProductController::cartItem();
}


?>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">E-comm</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        
      </ul>
      <form action="/search" class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist">Cart({{$total}})</a></li>
        @if(session()->get('user'))
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{session()->get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Logout</a></li>
          
        </ul>
      </li>
      @else
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Register</a></li>
      @endif
              </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
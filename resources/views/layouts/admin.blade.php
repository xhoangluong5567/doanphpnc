<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>
</head>

<body>

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Laravel</a>
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>
        
<div class="sidebar-container" style="top: 0px;">
  <div class="sidebar-logo">
    PHP Nâng Cao
  </div>
  <ul class="sidebar-navigation">
    <li class="header">Navigation</li>
    <li>
      <a href="#">
        <i class="fa fa-home" aria-hidden="true"></i> Home
      </a>
    </li>
    <li class="header">Another Menu</li>
    <li>
      <a href="products">
        <i class="fa fa-users" aria-hidden="true"></i> Products
      </a>
    </li>
    <li>
      <a href="brands">
        <i class="fa fa-cog" aria-hidden="true"></i> Brands
      </a>
    </li>
    <li>
      <a href="orders">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Order
      </a>
    </li>
    <li>
      <a href="order_details">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Order Details
      </a>
    </li>
    <li>
      <a href="users">
        <i class="fa fa-info-circle" aria-hidden="true"></i> User
      </a>
    </li>
  </ul>
</div>
<div class="content-container">
  <div class="container-fluid">
                @yield('content')                

  </div>
</div>
    
</body>

</html>

    <!-- <div class="container">
        <div class="row">
            <div id="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav>
            </div>
        </div>
        <div class="row">
            
        </div>
        <div class="row">
            <div id="footer">
                <h2>FOOTER</h2>
            </div>
        </div>
    </div> -->


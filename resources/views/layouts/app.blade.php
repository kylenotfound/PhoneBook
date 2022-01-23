<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <title>PhoneBook</title>
  </head>
  <body>
    <ul class="nav justify-content-center grey lighten-4 py-4">
      <li class="nav-item">
        @if ($_SESSION['page'] != 'welcome')
          @if (env('DB_LOCATION') == 'local')
            <a class="nav-link active" href="../../../index.php">PhoneBook</a>
          @else 
            <a class="nav-link active" href="index.php">PhoneBook</a>
          @endif
        @else 
          <a class="nav-link disabled">PhoneBook</a>
        @endif
      <li class="nav-item">
        @if (isset($_SESSION['user']))
          @if ($_SESSION['page'] != 'home')
            @if (env('DB_LOCATION') == 'local')
              <a class="nav-link" href="../../../app/home.php">Home</a>
            @else 
              <a class="nav-link" href="app/home.php">Home</a>
            @endif
          @else 
            <a class="nav-link disabled">Home</a>
          @endif
        @endif
      </li>
      <!-- TODO about -->
      <li class="nav-item">
        <a class="nav-link" href="../../../app/about.php">About</a>
      </li>
      <li class="nav-item">
        @if(!isset($_SESSION['user']))
          <a class="nav-link" href="" data-toggle="modal" data-target="#registerModalCenter">Register</a>
        @endif
      </li>
      <li class="nav-item">
        @if(isset($_SESSION['user']))
          @if (env('DB_LOCATION') == 'local')
            <a class="nav-link" href="../../../app/logout.php">Logout</a>
          @else 
            <a class="nav-link" href="app/logout.php">Logout</a>
          @endif
        @else
          <a class="nav-link" href="" data-toggle="modal" data-target="#loginModalCenter">Login</a>
        @endif
      </li>
    </ul>
    @include('includes.errors')
    @include('includes.success')
    @yield('content')
    @yield('scripts')
    @yield('styles')

    <!-- Register Modal -->
    <div class="modal fade" id="registerModalCenter" tabindex="-1" role="dialog" aria-labelledby="registerModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registerModalLongTitle">Register for the PhoneBook</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="app/register.php">
            <div class="modal-body">
              <label>Username</label> 
              <input type="text" name="username" placeholder="Enter a username"> <br />
              <label>Email Address</label> 
              <input type="text" name="email" placeholder="Enter your email address" /> <br />
              <label>Password</label> 
              <input type="password" name="password" placeholder="Enter in a password">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="register-submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Login Modal -->
    <div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLongTitle">Login to the PhoneBook</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="app/login.php">
            <div class="modal-body">
              <label>Username</label> 
              <input type="text" name="username" placeholder="Enter a username"> <br />
              <label>Password</label> 
              <input type="password" name="password" placeholder="Enter in a password">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="login-submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
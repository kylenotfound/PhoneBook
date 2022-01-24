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
      <li>
        @if(isset($_SESSION['user']))
          <li class="nav-link disabled">Welcome {{ $_SESSION['user']->getUsername() }}!</li>
        @endif
      </li>
    </ul>
    
    @include('messages.errors')
    @include('messages.success')
    @yield('content')
    @yield('scripts')
    @yield('styles')

    <!-- Register and Login modals -->
    @include('includes.register')
    @include('includes.login')
  </body>
</html>
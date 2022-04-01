<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><i class="fas fa-paw fa-3x"></i>Complaint Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('barchart')}}"><i class="fas fa-tachometer-alt fa-2x"></i>Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>


    <li class="nav-item">
          <a class="nav-link" href="{{route('liason-view-tickets')}}">  <i class="fas fa-ticket-alt fa-2x"></i> All Tickets</a>
        </li>


      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user-alt fa-2x"></i>Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="far fa-envelope fa-2x"></i>E-Mails</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" routerLink="#"><i class="fas fa-cogs fa-2x"></i>Settings</a>
      </li>



      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}"><i class="fas fa-user-lock fa-2x"></i>Register</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}"><i class="fa fa-car fas fa-user-lock fa-2x"></i>Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}"><i class="fa fa-car fas fa-user-lock fa-2x"></i>LogOut</a>
      </li>



  </div>
</nav>

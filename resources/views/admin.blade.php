@if (Session::has('error'))

        <div class="alert alert-danger mt-2">{{ Session::get('error') }}
        </div>

        @endif
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Complaint Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('viewtickets')}}
        ">View Ticekts</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" routerLink="#">View Ticket Status</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">Register</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Login</a>
      </li>
    </ul>

  </div>
</nav>





<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@if (Session::has('error'))

        <div class="alert alert-success mt-2">{{ Session::get('error') }}
        </div>

        @endif

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-default">
    <a class="navbar-brand" href="#"> <img style="max-width:100px; margin-top: -7px;margin-left: 5px;  border-radius: 800px;border-color: #145A32;"
             src="https://s3.amazonaws.com/kampuni/organisation/images/thumbnail/904gvKoQ0Gf15om9Vc8UJW0U3hNjLhNTXOr8Ubcu.jpg">Complaint Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('true-home')}}
          "><i class="fas fa-house-damage fa-2x"></i>Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
{{--   <li class="nav-item">
  <a class="nav-link" href="{{route('send-ticket')}}
  "><i class="fas fa-ticket-alt fa-2x"></i> Send Ticket</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="{{route('load-messages')}}"> <i class="fas fa-ticket-alt fa-2x"></i> View Ticket Status</a>
</li>--}}


        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}"><i class="fa fa-car fas fa-user-lock fa-2x"></i>Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}"><i class="fa fa-car fas fa-user-lock fa-2x"></i>Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-car fas fa-user-lock fa-2x"></i>LogOut</a>
        </li>
      </ul>

    </div>
  </nav>
</div>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="/css/cms.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

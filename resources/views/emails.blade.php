
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>



    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<h2>Email List</h2>

<p>EMail of the Registered Users</p>

<table class="table table-bordered">

<thead>

<tr>

<th>user</th>

<th>Email</th>


</tr>

</thead>

<tbody>

@foreach($list as $key=>$value){
  <tr>
<td>{{$value->name}}</td>
<td>{{$value->email}}</td>
  </tr>
}@endforeach

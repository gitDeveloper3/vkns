@include ("secretariate.head")
@include ("secretariate.navbar")
<body class="d-flex flex-column min-vh-100">

<div class="container">
  <h2>Admin Panel</h2>

  <p>Data of the Registered Users.</p>

  <table class="table table-bordered">

  <thead>

  <tr>

  <th>user</th>
  <th>Topic</th>
  <th>Description</th>
  <th>Ref ID</th>
  <th>Created at</th>
  <th>file</th>
  <th>Response</th>
  <th>Foward</th>

  </tr>

  </thead>

  <tbody>

  @foreach($list as $key => $value)

  <tr>
    <td>{{ $value->user}}</td>
  <td>{{ $value->topic}}</td>
  <td>{{ $value->description}}</td>
  <td>{{ $value->uniqueid }}</td>
  <td>{{ $value->created_at }}</td>
  <td>{{ $value->file }}</td>

  <td><form class="" action="{{route('admin-reply-ticket')}}" method="get">
    @csrf
  <button type="submit" class="btn btn-primary">Send Response</button>
  </form></td>
  <td><form class="" action="{{route('admin-foward-ticket')}}" method="post">
    @csrf
    <input type="text" id="uniqueid" name="uniqueid" value="{{$value->uniqueid}}" hidden>
  <button type="submit" class="btn btn-primary">Foward Back to OJO</button>
  </form></td>
  </tr>

  @endforeach
  </tbody>
  </table>
</div>

</body>

@include ("parts.footer")

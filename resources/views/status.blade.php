@include ("parts.header")

<body class="d-flex flex-column min-vh-100">
  <h2>Messages Panel</h2>

  <p>Data of the Registered Users.</p>

  <table class="table table-bordered">

  <thead>

  <tr>

  <th>Ticket ID</th>
  <th>Topic</th>
  <th>Messages</th>
  <th>Sender</th>
  <th>Time</th>
  <th>Close</th>
  </tr>

  </thead>

  <tbody>
@isset($messages)
  @foreach($messages as $key => $value)

  <tr>
    <td>{{ $value->FK_uniqueid}}</td>
  <td>{{ $value->subject}}</td>
  <td>{{ $value->notes}}</td>
  <td>sender</td>
  <td>{{$value->created_at}}</td>
  <td><form class="" action="{{route('liason-close')}}" method="post">
    @csrf
    <input type="text" name="close" id="close" value="{{$value->FK_uniqueid}}" hidden>
    <button type="submit" class="btn btn-primary">Close</button>
  </form></td>
  </form>

    </td>
  </tr>


  @endforeach
  @endisset
  <tbody>
  </table>
</body>

@include("parts.footer")

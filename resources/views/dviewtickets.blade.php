@include ("secretariate.head")

    @if (Session::has('message'))

            <div class="alert alert-danger mt-2">{{ Session::get('message') }}
            </div>

            @endif

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

<td><form class="" action="{{route('ojo_createtickets')}}" method="get">
  @csrf
<button type="submit" class="btn btn-primary">Send Response</button>
</form></td>
<td><form class="" action="index.html" method="post">
  @csrf
<button type="submit" class="btn btn-primary">Foward Back to OJO</button>
</form></td>







</tr>

@endforeach
</tbody>
</table>
</html>
@include("parts.footer")

@include("secretariate.head")
@include("department.navbar")

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
<th>Select</th>

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
<td>
<form class="" action="{{route('search')}}" method="post">
  @csrf
  <input type="text" name="selected" id="selected" value="{{$value->uniqueid}}" hidden>
<button type="submit" class="btn btn-primary">Select</button>
</form>

  </td>
</tr>

@endforeach
</tbody>
</table>
@include("parts.footer")

<head>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>



    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/send-ticket.css') }}">
</head>
@include ("parts.header")

<div class="send-ticket">
<div class="container">
  <div class="card">
  <div class="">
    <h2 class="card-heading">

    </h2>
  </div>

<form action ={{route('send-ticket')}} method='post'>
   @csrf
<div class="form-group">
  <label for="topic">Enter Topics</label>
  <input type="text" id="topic" name="topic" aria-describedby="emailHelp" placeholder="Enter topic here" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="description">Enter Description</label>
      <textarea id="description" name="description" placeholder="Enter problem here" class="form-control" required></textarea>
        </div>


        <div class="form-group">
          <label for="file">Select File</label>
          <input type="file" id="file" name="file" aria-describedby="emailHelp" class="form-control">
        </div>
        <div class="form-group card-decoration">
          <button type="submit" class="btn btn-primary ">Submit</button>
            </div>

</form>
</div>
</div>
</div>
@include ("parts.footer")

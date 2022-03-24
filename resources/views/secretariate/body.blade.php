<div class="container">

  @if (Session::has('error'))

          <div class="alert alert-danger mt-2">{{ Session::get('error') }}
          </div>

          @endif
  @include ('secretariate.navbar')
  <section class="body-div">
    <div class="card secretariate-card-style" >
  <i class="fas fa-ticket-alt fa-8x"></i>
    <div class="card-body">
      <h5 class="card-title">Escalate Ticket</h5>
      <p class="card-text">Click to escalate ticket</p>
      <a href="/ojo_createticket" class="btn btn-primary">Escalate Ticket</a>
    </div>
  </div>

  <div class="card secretariate-card-style" >
<i class="fas fa-ticket-alt fa-8x"></i>
  <div class="card-body">
    <h5 class="card-title">View Tickets</h5>
    <p class="card-text">Click to view tickets status</p>
    <a href="{{route('viewtickets')}}" class="btn btn-primary">View Ticket</a>
  </div>
</div>

<div class="card secretariate-card-style" >
<i class="fas fa-ticket-alt fa-8x"></i>
<div class="card-body">
  <h5 class="card-title">Undefined</h5>
  <p class="card-text">Click to ...</p>
  <a href="{{route('loadMessages')}}" class="btn btn-primary">Undefined</a>
</div>
</div>

<div class="card secretariate-card-style" >
<i class="fas fa-ticket-alt fa-8x"></i>
<div class="card-body">
  <h5 class="card-title">View Tickets</h5>
  <p class="card-text">Click to send a custom response</p>
  <a href="{{route('loadMessages')}}" class="btn btn-primary">Custom Responses</a>
</div>
</div>

  </section>

</div>

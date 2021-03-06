@include ("secretariate.head")
@include ("secretariate.navbar")
<section class="secretariate-body">
<div class="section-div">
    <h1 class="heading">CREATE TICKET</h1>
<div class="card p-5">



    <form action ={{route('admin-send-ticket')}} method="post">
      @csrf

      <div class='form-group'>
        <label for="ticketnumber">Ticket Number </label>
        <input type="text" id="ticketnumber" name="ticketnumber" value={{$id ?? ''}}>
        <a class="btn btn-primary" href="{{route('liason-create-search')}}">search</a>
      </div>


      <div class='form-group'>
        <label for="category">Complain Category</label>
        <select id="category" name="category" class="form-control">
        <option value="Admin Complaints">Admin Complaints</option>
        <option value="Court Services">Court Services</option>
        <option value="nternal Complaints">Internal Complaints</option>
      </select>
    </div>


    <div class="form-group">
      <label for="office">Court Station/Office/Directorate</label>

      <select id="office" name="office" class="form-control">
        <option value="Supreme Court">Supreme Court</option>
        <option value="Court of Appeal">Court of Appeal</option>
        <option value="High Court">High Court</option>
        <option value="ELC">ELC</option>
        <option value="Magistrate Court">Magistrate Court</option>
          <option value="Accounts">Accounts</option>
            <option value="Audit">Audit</option>
              <option value="Directorate of ICT">Directorate of ICT</option>
                <option value="Office of Chief Justice">Office of Chief Justice</option>
                  <option value="OCRJ">OCRJ</option>
        <option value="Option length">
          Option that has too long of a value to fit
        </option>
      </select>
    </div>

    <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" name="subject" value="" id="subject" placeholder="Enter Value" class="form-control">
    </div>
    <div class="form-group">
        <label for="notes">Explain Problem</label>
    <textarea cols="60" class="form-control" id="notes" name="notes" placeholder="Explain Problem"></textarea>
    </div>


    <div class='form-group'>
      <input type="file" id="id" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>





</div>

</section>
@include ("parts.footer")

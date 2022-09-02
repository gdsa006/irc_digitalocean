@extends('new.dashboard.layout')
@section('dashboard-content')





<h2>Dashboard</h2>
<hr>
<div class="row">
<div class="col-md-6"> 
<div class="card shadow">
                <div class="card-body" style="background: deepskyblue; color: aliceblue;">
                    <h2 class="card-title">Leads</h2>
                    <p class="card-text">Some latest leads </p>
                </div>
                <div class="card-body card-p py-0">
                    <div class="row">
                        
                    <div class="table-responsive">
  <table class="table">
   
    <tbody>
      @foreach($leads as $lead)
        <tr>
          <td>{{ $lead->fname }}</td>
          <td>{{ Str::limit($lead->address, 22) }}</td>
          <td>{{ $lead->sqft }} Sqft</td>
        </tr>
      @endforeach

    </tbody>
  </table>
</div>


                    </div>
                    <div class="card-body text-center">
                <a href="/dashboard/leads/all" class="btn btn-default">View All</a>
</div>
                </div>
            </div>
</div>


<div class="col-md-6"> 
<div class="card shadow">
                <div class="card-body" style="background: salmon; color: aliceblue;">
                    <h2 class="card-title">Rates</h2>
                    <p class="card-text">Latest rates.</p>
                </div>
                <div class="card-body card-p py-0">
                    <div class="row">
                    <table class="table">
   
   <tbody>
   @foreach($rates as $rate)
        <tr>
          <td>{{ $rate->af }}</td>
          <td>{{ $rate->mf }}</td>
          <td>{{ $rate->of }}</td>
        </tr>
      @endforeach
   </tbody>
 </table>
                    </div>
                </div>

<div class="card-body text-center">
                <a href="/dashboard/rates" class="btn btn-default">View All</a>
</div>

            </div>
</div>

</div>


@endsection
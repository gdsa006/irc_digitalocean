@extends('new.dashboard.layout')
@section('dashboard-content')

<div class="d-block mb-5">
<h2 class="float-left">Leads(Checking)</h2>
<a class="btn btn-warning float-right" href="{{ route('export-checking-lead') }}">Export Data</a>
</div>


<div class="table-responsive">
  <table class="table">
    <tbody>
    @foreach($leads as $k=>$lead)
      <tr id="lead-{{ $lead->id }}">
        <td>{{ $lead->id }}</td>
        <td>{{ $lead->fname ? $lead->fname . $lead->lname : '-' }} </td>
        <td>{{ $lead->mobile ? $lead->mobile : '-' }}</td>
        <td>{{ $lead->address }}</td>
        <td><a data-html="true" href="javascript:void(0)" title="Sqft: {{ $lead->sqft }} <br/> Roof: {{ $lead->steep }} <br/> Currently: {{ $lead->existingmaterial }} <br/> Required: {{ $lead->material }} <br/> Urgent: {{ $lead->urgency }} <br/> Insurance: {{ $lead->true }} <br/> Interested in financing: {{ $lead->isinterestedinfinancing }} ">Details</a></td>
        <td><a href="#" data-id="{{ $lead->id }}" class="text-danger deleteLead" id="">Remove</a></td>
      </tr>
@endforeach
<tr>
    <td colspan="4">{{ $leads->links('pagination::bootstrap-4') }}</td>
</tr>
    </tbody>
    
  </table>
</div>








    
@endsection
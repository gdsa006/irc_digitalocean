@extends('new.dashboard.layout')
@section('dashboard-content')


<h2>Rates</h2>
<hr>
<div class="input-group">
<select class="form-control" id="fetchrates">
    <option>Select</option>
    <option value="asphalt">Asphalt</option>
    <option value="metal">Metal</option>
    <option value="other">Other</option>
</select>
</div>
<hr>
<form method="post" id="updateRates">
    <div class="input-group">
        <label class="col-md-2">Flat</label> &nbsp;
        <input type="text" name="flat" id="flat" class="form-control myoptions" value="" placeholder="">
    </div>

    <div class="input-group mt-2">
        <label class="col-md-2">Mellow</label> &nbsp;
        <input type="text" name="mellow" id="mellow" class="form-control myoptions" value="" placeholder="">
    </div>

    <div class="input-group mt-2">
        <label class="col-md-2">Steep</label> &nbsp;
        <input type="text" name="steep" id="steep" class="form-control myoptions" value="" placeholder="">
    </div>

    <div class="input-group mt-2">
        <label class="col-md-2">Unsure</label> &nbsp;
        <input type="text" name="unsure" id="other" class="form-control myoptions" value="" placeholder="">
    </div>
    <hr>
    <input type="submit" class="btn btn-lg btn-primary updateRates" value="Update">
</form>
@endsection
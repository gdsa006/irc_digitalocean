@extends('welcome')
@section('content')
<div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="email" class="form-control" id="fname" aria-describedby="emailHelp" placeholder="Enter first name">
                                <small id="emailHelp" class="form-text text-muted">display error</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="email" class="form-control" id="lname" aria-describedby="emailHelp" placeholder="Enter last name">
                                <small id="emailHelp" class="form-text text-muted">display error</small>
                            </div>
                            <div class="form-group">
                                <input type="button" value="Next" id="emailAddress" class="btn custom-btn float-right">
                            </div>

    <!-- fname<input type="text" id="fname" class="form-control">
    <br>
    lname<input type="text" id="lname" class="form-control">
    <br>
    <input type="button" value="next" id="emailAddress">
    <input type="button" value="exit" id="exit">    -->
@endsection

@push('script')
<script>
    $('#exampleModal').modal('show');
</script>
@endpush

@push('script')
<script>
$('#emailAddress').on('click',function(){
        $fname = $("#fname").val();
        $lname = $("#lname").val();
        $.ajax({
            type : 'get',
            url : '{{ route('stepOneProcess') }}',
            data:{'fname':$fname, 'lname':$lname},
            success:function(data){
                console.log(data);
                if(data.status == "s2"){
                    window.location.href = "{{URL::to('emailAddress')}}"
                }
                if(data.fname){
                    $('#fname').next('.text-muted').show().text(data.fname);
                }
                if(data.lname){
                    $('#lname').next('.text-muted').show().text(data.lname);
                }
            }
        });
    })
</script>

@endpush


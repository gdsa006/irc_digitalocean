@extends('welcome')
@section('site-content')

@include('hero')
    <section id="process">
        <div class="container" style="position: relative; z-index: 999999">
            <h1>Our Working Process</h1>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="block">
                        <div class="circle" id="one">
                            <img src={{ asset('images/4882187.jpg') }} width="222" class="rounded-circle">
                        </div>
                        <div class="content">
                            <h5>Enter address</h5>
                            <p>The class is a container to enhance an input by adding an icon, text or a button. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="block">
                        <div class="circle" id="one">
                            <img src={{ asset('images/2661175.jpg') }} width="222" class="rounded-circle">
                        </div>
                        <div class="content">
                            <h5>Fill Contact details</h5>
                            <p>The class is a container to enhance an input by adding an icon, text or a button. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="block">
                        <div class="circle" id="one">
                            <img src={{ asset('images/5545622.jpg') }} width="222" class="rounded-circle">
                        </div>
                        <div class="content">
                            <h5>Get Detailed Report</h5>
                            <p>The class is a container to enhance an input by adding an icon, text or a button. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src={{ asset('images/trail-bg.png') }} id="trail-bg">
    </section>
    @endsection
@extends('new.layout')
@section('content')
<style>
    body{
        margin-top: 0
    }
    #background-gradient{
        display: none
    }

    nav{
        background: #ffffff !important;
        box-shadow: 0 0.05rem 0.3rem rgb(0 0 0 / 10%)
    }
    </style>
    
<section class="page" id="estimate">
    <div class="container">
<div class="row">
                <div class="col order-0 order-lg-1 p-0 ml-2 mr-2">
                        
                        
            <h4 class="text-dark text-center d-block d-md-none">
                Your <strong class="text-info text-uppercase">
                {{ $data[0]->existingmaterial}}

                </strong> roof being replaced by a new <strong class="text-info text-uppercase">{{ $data[0]->matrial }}</strong> Roof having {{ $data[0]->steep }} slope  will cost approximately
            </h4>

            <div class="card mb-3 px-5 py-4">
                                    <div class="row text-center text-md-left">
                                        
                        <h4 class="col-6 text-dark d-md-block d-none">
                        Your <strong class="text-info text-uppercase">
                {{ $data[0]->existingmaterial}}

                </strong> roof being replaced by a new <strong class="text-info text-uppercase">{{ $data[0]->material }}</strong> Roof having {{ $data[0]->steep }} slope will cost approximately
                        </h4>

                        <div class="ml-md-auto mr-md-3 mx-auto position-relative text-center text-md-right">
                            <h2 class="d-inline text-info font-weight-bold">
    <sup>$</sup>@money($x)
</h2>
<span class="estimate-tax ml-2 d-block">+ TAX</span>
<p>
{{ $data[0]->sqft}} sq Ft.
    – {{ $data[0]->steep }} Slope
    
    
</p>
                        </div>
                    </div>
                
                                    <div class="row">
                        <div class="col-lg-6 mr-lg-5 d-block text-center text-md-left">
                            <h4 class="text-dark font-weight-bold">Ready to move forward?</h4>
                            <p>You will need to have your roof inspected prior to receiving a formal proposal.</p>
                            <a href="callto:2085727470" class="btn btn-block btn-primary py-2">Call Us Now</a>
                        </div>
                        <div class="col ml-lg-auto d-none d-md-block">
                            
                                                            
                                <form method="POST" action="https://app.roofr.com/estimate/141962" accept-charset="UTF-8"><input name="_token" type="hidden" value="dmdD26P2pzTGfiRWT9foy2cKj0lnK0LTbSIarkMf">
        <input type="hidden" name="_method" value="PUT">
        <input name="action" type="hidden" value="request">
            <input type="hidden" value="1" name="quotes_requested">

            <button class="btn btn-lg w-100 btn-success" type="submit">
                <i class="fa fa-check"></i> Request quotes!
            </button>
    </form>
                                                    </div>
                    </div>

                            </div>

            
            <div class="d-none d-md-flex">
                <div class="col-md border rounded py-3 px-4 mt-3 mt-md-0 ">
                    <img src="{{ asset('images/MetalShingle.svg') }}" class="img-fluid">
                    <!-- <h5 class="text-center mb-5 mt-3 text-dark">Metal</h5> -->

                    <!-- <h4 class="text-center font-weight-bold mt-2">
                        <sup>$</sup>
                    </h4> -->

                    <div class="ruler mt-0"></div>

                    

                                            <!-- <p><i class="fa fa-check rounded-circle p-1 text-info mr-3"></i>50 Years</p>
                                            <p><i class="fa fa-check rounded-circle p-1 text-info mr-3"></i>Weather Resistant</p>
                                            <p><i class="fa fa-check rounded-circle p-1 text-info mr-3"></i>Energy Efficient</p> -->
                                    </div>
                                
                            <div class="col-md border rounded py-3 px-4 mt-3 mt-md-0 ml-md-3">
                            <img src="{{ asset('images/MetalShingle2.svg') }}" class="img-fluid">
                    <!-- <h5 class="text-center mb-5 mt-3 text-dark">Slate</h5> -->

                    <!-- <h4 class="text-center font-weight-bold mt-2">
                        <sup>$</sup>14,933 -
                        <sup>$</sup>17,172
                    </h4> -->

                    <div class="ruler mt-0"></div>

                    

                                            <!-- <p><i class="fa fa-check rounded-circle p-1 text-info mr-3"></i>50 Years</p>
                                            <p><i class="fa fa-check rounded-circle p-1 text-info mr-3"></i>Eco-friendly</p>
                                            <p><i class="fa fa-check rounded-circle p-1 text-info mr-3"></i>Aesthetic</p> -->
                                    </div>
                                </div>

            <button type="button" class="btn btn-light mb-5 btn-block d-block d-md-none" data-toggle="modal" data-target="#materials-modal" style="display: none">
                View prices for other materials
            </button>
                            </div>

                                    <div class="sidebar flex-grow-1 flex-lg-grow-0 text-center ">
    <div class="align-self-start mb-4">
        <div id="project-manager-container" class="border mb-3 p-4 ml-2 mr-1 mt-1 mt-md-0">
    <p class="text-dark"><strong>Schedule an Inspection?</strong></p>

    <div class="d-md-flex justify-content-center flex-md-column">
        <div class="mb-2 text-right text-md-center">
            <img class="rounded-circle-" height="320" src="{{ asset('images/need-advice.jpg') }}">
        </div>

        <div class="text-left ml-3 ml-md-0 text-md-center">
            <h5 class="text-dark mt-3">Call a Roofing Project Advisor</h5>

            <h5 class="text-dark mb-0 d-none"><strong>Nic Capobianco</strong></h5>

                            <h5 class="text-dark mb-0"><a class="d-block text-info" href="tel:(208)5727470">(208) 572 7470</a></h5>
            
                            <h5 class="text-dark"><a class="d-block" href="mailto:info@idahoroofingcost.com">info@idahoroofingcost.com</a></h5>
                    </div>
    </div>
</div>

        
    </div>
</div>
                
                
                                    <p class="col-12 text-center mt-3 mt-lg-5 disclaimer-text mx-auto order-1">
                        Disclaimer: This estimate is a rough estimate as to how much your roof will cost based on the information you have provided us.
                        We do not guarantee the amount of this estimate.
                    </p>
                            </div>
                                </div>
                                </section>
@endsection
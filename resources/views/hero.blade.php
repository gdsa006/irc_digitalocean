<main id="hero" style="position: relative;">
        <div class="container-fluid">
            <div class="row row-eq-height">
                <div class="col-md-6 col-sm-12 col-xs-12 px-0">
                    <div class="image-wrapper">
                        <div class="pattern-layer" style="background-image: url(https://smartdemowp.com/shelder/wp-content/uploads/2020/06/shape-1.png);"></div>
                    <div class="image image1">
                        <img src={{ asset('images/ho4_slide01.jpg') }} id="back1">
                    </div>
                    <div class="image image2">
                        <img src={{ asset('images/about-2.jpg') }} id="back2">
                    </div>
                    <div class="image image3">
                        <img src={{ asset('images/badge.png') }} id="back3" class="rotateme">
                        <span id="roof">IRC</span>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 co-xs-12 px-0 align-self-center">
                    <div class="content">
                        <h1>Idaho Roofing </h1>
                        <h3>Cost Calculator</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                        <form action="{{ route('fullName') }}" method="get" class="row col-md-9">
                            <div class="input-group" style="position: relative">
                            <span id="location-icon">
                            <i class="fas fa-map-marker-alt"></i>
                            </span>
                                <input type="text" class="form-control shadow-none" id="address" placeholder="Enter address...">
                                <button class="btn btn-outline-secondary btn-custom-submit" id="fullName" type="button"><i class="fas fa-calculator"></i></button>
                                <div id="search-results">
                                    <!-- populate results -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="floating-menu" style="display: none; position: absolute; top: 0; background-color: #fffffff0; left: 50%; width: 70%; transform: translate(-50%, 0%); padding: 10px 0; border-radius: 0 0 3px 3px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <ul class="nav nav-justified" style="width: 100%;">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
            </div>
            </div>
            <!-- <img src={{ asset('images/services1 (1).png') }} style="position: absolute; top: 0; right: -200px; transform: scaleX(-1); opacity: 0.5;"> -->
    </main>
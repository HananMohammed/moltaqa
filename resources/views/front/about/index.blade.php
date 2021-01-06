<!--About Section-->
<section id="section-1-1" class="hero hero-bg-1 layout-2">
    <div class="container">
        <!-- items outer -->
        <div class="outer clearfix z-1 relative">

            <div class="row flex"><!-- row -->

                <!-- phones image -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="phones">
                        <img src="{{asset_public('storage/uploads/'.$data["about"][0]["image"])}}" alt="hero">
                    </div>
                </div>

                <!-- call to action -->
                <div class="col-md-7 col-md-offset-1 col-sm-12 col-xs-12">

                    <div class="cta">

                        <!-- text -->
                        <h2 class="b20-1" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.1s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.1s; transition: transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.1s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.1s; ">
                            <span class="strong">
                                {!! $data["about"][0]["title"] !!}
                            </span>
                        </h2>
                        <p class="b20-2" data-sr-id="3" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s; transition: transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s; ">
                            {!! $data["about"][0]["text"] !!}
                        </p>

                        <!-- buttons -->
                        <div class="buttons b20-3" data-sr-id="4" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.3s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.3s; transition: transform 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.3s, opacity 1.5s cubic-bezier(0.6, 0.2, 0.1, 1) 0.3s; ">
                            <a href="http://vcv.moltaqa.net/#" class="btn btn-default btn-download hvr-float-shadow">
                                <i class="fa fa-apple" aria-hidden="true"></i>
                                <span class="text">
									<span class="little">Download on the</span><br>App Store
								</span>
                            </a>
                            <a href="http://vcv.moltaqa.net/#" class="btn btn-default btn-download hvr-float-shadow">
                                <i class="fa fa-android" aria-hidden="true"></i>
                                <span class="text">
									<span class="little">Get it on</span><br>Google Play
								</span>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- light overlay -->
    <div class="overlay-light"></div>

</section>

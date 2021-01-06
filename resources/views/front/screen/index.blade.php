<section id="section-1-7" class="screenshots">
    <div class="container">

        <!-- section header -->
        <div class="section-header text-center">
            <h2 class="light">@lang('front.screens')</h2>
            <p>@lang('front.screen-desc')</p>
        </div>

        <!-- wrapper -->
        <div class="screenshots-01-wrap slick-initialized slick-slider slick-dotted" role="toolbar">
            <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 5130px; transform: translate3d(-2850px, 0px, 0px); transition: transform 2000ms ease 0s;" role="listbox">
                   @foreach($data["screens"] as $screen)
                    <div class="item slick-slide slick-cloned" style="width: 255px;" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                        <img src="{{asset_public('storage/uploads/'.$screen->image)}}" alt="screenshot">
                    </div>
                    @endforeach
                </div>
            </div>
            <ul class="slick-dots" style="display: block;" role="tablist"><li class="" aria-hidden="true" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00"><button type="button" data-role="none" role="button" tabindex="0">1</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class=""><button type="button" data-role="none" role="button" tabindex="0">2</button></li><li aria-hidden="false" role="presentation" aria-selected="false" aria-controls="navigation02" id="slick-slide02" class="slick-active"><button type="button" data-role="none" role="button" tabindex="0">3</button></li></ul></div>

    </div>
</section>

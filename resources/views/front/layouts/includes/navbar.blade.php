<nav class="navbar navbar-default navbar-fixed-top shrink">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button"><span class="sr-only">Toggle
            navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>

            <!-- Logo -->
            <a class="navbar-brand current" href="http://vcv.moltaqa.net/#section-1-1">
                <img src="{{asset_public('front/assets/images/1608234656-logo-new.png')}}" alt="homepage" class="light-logo">
            </a>

            <!-- Logo end -->

        </div>
        <div class="navbar-collapse collapse" id="navbar">

            <div class="navbar-right">

                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://vcv.moltaqa.net/#section-1-1" class="current">@lang('front.homepage')</a>
                    </li>
                    <li>
                        <a href="http://vcv.moltaqa.net/#section-1-2">@lang('front.how-work')</a>
                    </li>
                    <li>
                        <a href="http://vcv.moltaqa.net/#section-1-3">@lang('front.our-advantage')</a>
                    </li>
                    <li>
                        <a href="http://vcv.moltaqa.net/#section-1-7">@lang('front.screen-shots')</a>
                    </li>
                    <li>
                        <a href="http://vcv.moltaqa.net/#section-1-12">@lang('front.contact-us')</a>
                    </li>
                </ul>

                <!-- Menu end -->

                <!-- Social Icons -->
                <ul class="nav navbar-nav social">
                    <li><a href="https://www.facebook.com/" class="external"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="https://www.twitter.com/" class="external"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                @if(app()->getLocale() == 'ar')
                    <li><a href="{{LaravelLocalization::getLocalizedURL('en', null, [], true)}}" class="external">EN</a></li>
                @else
                    <li><a href="{{LaravelLocalization::getLocalizedURL('ar', null, [], true)}}" class="external">AR</a></li>
                @endif
                </ul>

            </div>

        </div><!--/.nav-collapse -->
    </div>
</nav>

<footer id="footer-1" class="footer">
    <div class="container">

        <!-- footer menu -->
        <ul class="footer-menu">
            <li>
                <a href="http://vcv.moltaqa.net/#section-1-1">@lang('front.homepage')</a>
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
            @if(app()->getLocale() == 'ar')
                <li><a href="{{LaravelLocalization::getLocalizedURL('en', null, [], true)}}" class="external">English</a></li>
            @else
                <li><a href="{{LaravelLocalization::getLocalizedURL('ar', null, [], true)}}" class="external">عربي</a></li>
            @endif
        </ul>
        <!-- copyright text -->
        <span class="copyright">All Rights Received 2020 <br>
        <a href="https://moltaqa.net/">Alkayan elaseel - moltaqa tech</a></span>

        <!-- social icons -->
        <ul class="social-icons">
            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>

    </div>
</footer>

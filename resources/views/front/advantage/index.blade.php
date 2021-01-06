<section id="section-1-3" class="describe-1">
    <div class="container">
        <div class="row flex"><!-- Row begin -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="image">
                    <img src="{{asset_public('storage/uploads/'.$data["advantage"][0]->image)}}" alt="describe" class="b20-1" data-sr-id="2" style="; visibility: visible;  -webkit-transform: translateY(20px) scale(1); opacity: 0;transform: translateY(20px) scale(1); opacity: 1;">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h2 class="light">@lang('front.advantage')</h2>
                <p>{{$data["advantage"][0]->title}}</p>
                <ul class="list-style pb-15">
                 {!! $data["advantage"][0]->text !!}
                </ul>
            </div>
        </div>
    </div>
</section>

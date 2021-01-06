<section id="section-1-2" class="work-process colored">
    <div class="container">

        <div class="section-header text-center">
            <h2>
               @lang('front.how-work')
            </h2>
            <p>
                @lang('front.how-work-description')
            </p>
        </div>
        <div class="row">
            @foreach($data["howWork"] as $data)
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="item text-center">
                        <div class="icon-wrap">
                            <span class="step s1-1" data-sr-id="5" style="; visibility: visible;  -webkit-transform: scale(1.5); opacity: 0;transform: scale(1.5); opacity: 0;">{{ $loop->index +1 }}</span>
                            {!! $data->icon()->pluck('icon')[0] !!}
                        </div>
                        <h3>{{$data->title}}</h3>
                        <p>{!! $data->description !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

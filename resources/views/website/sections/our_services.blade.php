<section data-id="our-services" class="animated-section">


    <div class="page-title">
            <h2>{{__('site/app.our_services')}}</h2>
    </div>

    <div class="section-content">
        <div class="white-space-30"></div>
        <div class="row">
            @foreach($services as $service)
            <div class="info-block-w-icon col-md-6">
                <div class="ci-icon">
                    <i class="fa {{$service->icon}}"></i>
                </div>
                <div class="ci-text">
                    <h4>{{$service->title}}</h4>
                    <p>{!! $service->notes !!}</p>
                </div>
            </div>
            @endforeach
        </div>
        <!-- End of Services -->

        <div class="white-space-50"></div>

        <!-- Testimonials -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <h3>{{__('site/app.our_team')}}</h3>
                </div>
            </div>
        </div>
        <div class="white-space-40"></div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="testimonials owl-carousel">
                    @foreach($employees as $employee)
                        <!-- Testimonial 1 -->
                        <div class="testimonial">
                            <div class="img">
                                <img src="{{asset($employee->image)}}" alt="{{asset($employee->name)}}">
                            </div>
                            <div class="author-info">
                                <h4 class="author">{{$employee->name}}</h4>
                                <h5 class="company">{{$employee->title}}</h5>
                                <div class="icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                            </div>
                        </div>
                        <!-- End of Testimonial 1 -->
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End of Testimonials -->

        <div class="white-space-50"></div>

        <!-- Clients -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <h3>{{__('site/app.our_clients')}}</h3>
                </div>
            </div>
        </div>

        <div class="white-space-40"></div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="clients owl-carousel">

                    <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                            <img src="{{asset('website/img/clients/client-1.png')}}" alt="Logo">
                        </a>
                    </div>

                    <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                            <img src="{{asset('website/img/clients/client-2.png')}}" alt="Logo">
                        </a>
                    </div>

                    <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                            <img src="{{asset('website/img/clients/client-3.png')}}" alt="Logo">
                        </a>
                    </div>

                    <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                            <img src="{{asset('website/img/clients/client-4.png')}}" alt="Logo">
                        </a>
                    </div>

                    <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                            <img src="{{asset('website/img/clients/client-5.png')}}" alt="Logo">
                        </a>
                    </div>

                    <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                            <img src="{{asset('website/img/clients/client-6.png')}}" alt="Logo">
                        </a>
                    </div>

                    <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                            <img src="{{asset('website/img/clients/client-7.png')}}" alt="Logo">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- End of Clients -->

        <div class="white-space-50"></div>

        <div class="white-space-50"></div>

        <!-- Fun Facts -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">

                <div class="block-title">
                    <h3>{{__('site/app.statistics')}}</span></h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="fun-fact gray-default">
                    <i class="lnr lnr-heart"></i>
                    <h4>{{__('site/app.our_clients')}}</h4>
                    <span class="fun-fact-block-value">578</span>
                    <span class="fun-fact-block-text"></span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="fun-fact gray-default">
                    <i class="lnr lnr-clock"></i>
                    <h4>{{__('site/app.working_hours')}}</h4>
                    <span class="fun-fact-block-value">24/7</span>
                    <span class="fun-fact-block-text"></span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 ">
                <div class="fun-fact gray-default">
                    <i class="lnr lnr-star"></i>
                    <h4>{{__('site/app.visitors')}}</h4>
                    <span class="fun-fact-block-value">250</span>
                    <span class="fun-fact-block-text"></span>
                </div>
            </div>
        </div>
        <!-- End of Fun Facts -->

    </div>
</section>

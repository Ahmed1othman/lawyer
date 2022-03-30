<section data-id="documentation" class="animated-section">
    <div class="page-title">
        <h2>{{__('site/app.documentation')}}</h2>
    </div>

    <div class="section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <h3>{{__('site/app.what_is_documentation_service')}}</h3>
                </div>
            </div>
        </div>
        <!-- End of documentation -->

        <div class="white-space-20"></div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <p>{!! websiteInfo_hlp('documentation_'.App::getLocale()) !!}</p>
            </div>
        </div>

        <div class="white-space-50"></div>


        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-12">
                <div class="block-title">
                    <h3>{{__('site/app.request_documentation_service_now')}}</h3>
                </div>
                <form id="documentation_form" class="contact-form" action="" method="post" name="documentation">
                    <div class="messages"></div>
                    <div class="controls two-columns">
                        <div class="fields clearfix">
                            <div class="left-column">
                                <div class="form-group form-group-with-icon">
                                    <input type="text" id="contact_name" name="name" class="form-control" placeholder="" required="required" data-error="{{__('site/app.name_is_required')}}">
                                    <label>{{__('site/app.full_name')}}</label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group form-group-with-icon">
                                    <input type="email" id="contact_email" name="email" class="form-control" placeholder="" required="required" data-error="{{__('site/app.valid_email_is_required')}}">
                                    <label>{{__('site/app.email')}}</label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group form-group-with-icon">
                                    <select id="contact_type" style="background-color: #2e2e2e;padding: 2px 12px 2px 25px;" name="type" class="form-control"  required="required" data-error="{{__('site/app.type_documentation__service_is_required')}}">
                                        <option value="" disabled selected>{{__('site/app.select_type_documentation_service')}}</option>
                                        <option value="{{__('site/app.documentation_agencies')}}">{{__('site/app.documentation_agencies')}}</option>
                                        <option value="{{__('site/app.Dissolution of agencies')}}">{{__('site/app.Dissolution of agencies')}}</option>
                                        <option value="{{__('site/app.Documentation of corporate contracts')}}">{{__('site/app.Documentation of corporate contracts')}}</option>
                                        <option value="{{__('site/app.real estate emptying')}}">{{__('site/app.real estate emptying')}}</option>
                                        <option value="{{__('site/app.financial declaration')}}">{{__('site/app.financial declaration')}}</option>
                                        <option value="{{__('site/app.Mortgage')}}">{{__('site/app.Mortgage')}}</option>
                                        <option value="{{__('site/app.Redeem a mortgage')}}">{{__('site/app.Redeem a mortgage')}}</option>
                                        <option value="{{__('site/app.Real estate and mortgage')}}">{{__('site/app.Real estate and mortgage')}}</option>
                                        <option value="{{__('site/app.Paying financial returns')}}">{{__('site/app.Paying financial returns')}}</option>
                                        <option value="{{__('site/app.Mortgage Correction')}}">{{__('site/app.Mortgage Correction')}}</option>
                                        <option value="{{__('site/app.other')}}">{{__('site/app.other')}}</option>
                                    </select>
{{--                                    <input id="contact_subject" type="text" name="subject" class="form-control" placeholder="" required="required" data-error="{{__('site/app.subject_is_required')}}">--}}
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group form-group-with-icon">
                                    <input type="number" id="contact_phone" name="phone" class="form-control" placeholder="" required="required" data-error="{{__('site/app.phone_is_required')}}">
                                    <label>{{__('site/app.phone')}}</label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="right-column">
                                <div class="form-group form-group-with-icon">
                                    <textarea name="msg" id="contact_msg" class="form-control" placeholder="" rows="10" required="required" data-error="{{__('site/app.please_leave_me_a_message')}}"></textarea>
                                    <label>{{__('site/app.message')}}</label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <button type="button" onclick="request_service()" class="button btn-send col-12">{{__('site/app.send_message')}}</button>
                    </div>
                </form>
            </div>
            <!-- End of Contact Form -->
        </div>
        <div class="white-space-50"></div>
        <div class="row justify-content-around">
            <!-- Contact Info -->
                <div class="lm-info-block gray-default col-3">
                    <i class="lnr lnr-map-marker"></i>
                    <h4>{{websiteInfo_hlp('address_'.App::getLocale())}}</h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                </div>

                <div class="lm-info-block gray-default col-3">
                    <i class="lnr lnr-phone-handset"></i>
                    <h4><a style="color: #e9e9e9"  href="tel:{{websiteInfo_hlp('phone')}}" target="_blank">{{websiteInfo_hlp('phone')}}</a></h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                </div>

                <div class="lm-info-block gray-default col-3">
                    <i class="lnr lnr-envelope"></i>
                    <h4><a style="color: #e9e9e9" href="mailto: {{websiteInfo_hlp('email')}}" target="_blank">{{websiteInfo_hlp('email')}}</h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                </div>
            <!-- End of Contact Info -->
        </div>

    </div>
</section>

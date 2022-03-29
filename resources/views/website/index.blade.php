@extends('layouts.website.master')
@section('title')
   {{__('site/app.home')}}
@endsection
@section('content')

    <div class="page">
        <div class="page-content">

            <header id="site_header" class="header mobile-menu-hide">
                <div class="header-content">
                    <div class="header-photo">
                        <img src="{{asset('website/img/main_photo.jpg')}}" alt="عبد الله المنصور">
                    </div>
                    <div class="header-titles">
                        <h2>عبدالله المنصور الشهراني</h2>
                        <h4>موثق ومستشار قانوني</h4>
                    </div>
                </div>

                @include('website.main_menu')

                <div class="social-links">
                    <ul>
                        @if(websiteInfo_hlp('linked_link'))
                            <li><a href="{{websiteInfo_hlp('linked_link')}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        @endif
                        @if(websiteInfo_hlp('fb_link'))
                            <li><a href="{{websiteInfo_hlp('fb_link')}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        @endif
                        @if(websiteInfo_hlp('twitter_link'))
                            <li><a href="{{websiteInfo_hlp('twitter_link')}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        @endif
                    </ul>
                </div>

                <div class="header-buttons">
                    <a href="https://api.whatsapp.com/send?phone={{ websiteInfo_hlp('whats_up') }}" target="_blank" class="btn btn-primary col-md-9"><i class="fab fa-whatsapp custom-icon"></i>  {{__('site/app.contact_us_via')}}</a>
                    <a href="tel:{{ websiteInfo_hlp('phone') }}" target="_blank" class="btn btn-primary col-md-9"><i class="fa fa-phone custom-icon"></i>  {{__('site/app.call_us')}}</a>
                </div>

                @if(App::getLocale()=='en')
                    <div class="copyrights">Copyright @ {{ date('Y') }} For <span class="h5"><a class="text-danger" href="{{route('home')}}">{{websiteInfo_hlp('website_name_en')}}</a> </span>. All rights reserved.</div>
                @else
                    <div class="copyrights">جميع الحقوق محفوظة لـ <span class="h5"><a class="text-danger" href="{{route('home')}}">{{websiteInfo_hlp('website_name_ar')}}</a> </span> @ {{date('Y')}}</div>
                @endif


            </header>

            <!-- Mobile Navigation -->
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- End Mobile Navigation -->

            <!-- Arrows Nav -->
            <div class="lmpixels-arrows-nav">
                <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
                <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
            </div>
            <!-- End Arrows Nav -->

            <div class="content-area">
                <div class="animated-sections kit-overlay1" style="background-image: url('{{asset('website/img/bg1.png')}}');">
                    <!-- Home Subpage -->
                    @include('website.sections.home')
                    <!-- End of Home Subpage -->

                    <!-- About Me Subpage -->
                    @include('website.sections.about_us')
                    <!-- End of About Me Subpage -->


                    <!-- services Subpage -->
                    @include('website.sections.our_services')
                    <!-- End of services Subpage -->

{{--                    <!-- Resume Subpage -->--}}
{{--                    <section data-id="resume" class="animated-section">--}}
{{--                        <div class="page-title">--}}
{{--                            <h2>Resume</h2>--}}
{{--                        </div>--}}

{{--                        <div class="section-content">--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-xs-12 col-sm-7">--}}

{{--                                    <div class="block-title">--}}
{{--                                        <h3>Education</h3>--}}
{{--                                    </div>--}}

{{--                                    <div class="timeline timeline-second-style clearfix">--}}
{{--                                        <div class="timeline-item clearfix">--}}
{{--                                            <div class="left-part">--}}
{{--                                                <h5 class="item-period">2008</h5>--}}
{{--                                                <span class="item-company">University of Studies</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="divider"></div>--}}
{{--                                            <div class="right-part">--}}
{{--                                                <h4 class="item-title">Frontend Development</h4>--}}
{{--                                                <p>Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis ante.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="timeline-item clearfix">--}}
{{--                                            <div class="left-part">--}}
{{--                                                <h5 class="item-period">2007</h5>--}}
{{--                                                <span class="item-company">University of Studies</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="divider"></div>--}}
{{--                                            <div class="right-part">--}}
{{--                                                <h4 class="item-title">Graphic Design</h4>--}}
{{--                                                <p>Aliquam tincidunt malesuada tortor vitae iaculis. In eu turpis iaculis, feugiat risus quis, aliquet urna. Quisque fringilla mollis risus, eu pulvinar dolor.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="white-space-50"></div>--}}

{{--                                    <div class="block-title">--}}
{{--                                        <h3>Experience</h3>--}}
{{--                                    </div>--}}

{{--                                    <div class="timeline timeline-second-style clearfix">--}}
{{--                                        <div class="timeline-item clearfix">--}}
{{--                                            <div class="left-part">--}}
{{--                                                <h5 class="item-period">2016 - Current</h5>--}}
{{--                                                <span class="item-company">Google</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="divider"></div>--}}
{{--                                            <div class="right-part">--}}
{{--                                                <h4 class="item-title">Lead Ui/Ux Designer</h4>--}}
{{--                                                <p>Praesent dignissim sollicitudin justo, sed elementum quam lacinia quis. Phasellus eleifend tristique posuere. Sed vitae dui nec magna.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="timeline-item clearfix">--}}
{{--                                            <div class="left-part">--}}
{{--                                                <h5 class="item-period">2013 - 2016</h5>--}}
{{--                                                <span class="item-company">Adobe</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="divider"></div>--}}
{{--                                            <div class="right-part">--}}
{{--                                                <h4 class="item-title">Senior Ui/Ux Designer</h4>--}}
{{--                                                <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla tristique, ornare felis id, congue libero. Nam volutpat euismod quam.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="timeline-item clearfix">--}}
{{--                                            <div class="left-part">--}}
{{--                                                <h5 class="item-period">2011 - 2013</h5>--}}
{{--                                                <span class="item-company">Google</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="divider"></div>--}}
{{--                                            <div class="right-part">--}}
{{--                                                <h4 class="item-title">Junior Ui/Ux Designer</h4>--}}
{{--                                                <p>Duis mollis nunc quis quam viverra venenatis. Nulla nulla arcu, congue vitae nunc ac, sodales ultricies diam. Nullam justo leo, tincidunt sit amet.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <!-- Skills & Certificates -->--}}
{{--                                <div class="col-xs-12 col-sm-5">--}}
{{--                                    <!-- Design Skills -->--}}
{{--                                    <div class="block-title">--}}
{{--                                        <h3>Design <span>Skills</span></h3>--}}
{{--                                    </div>--}}

{{--                                    <div class="skills-info skills-second-style">--}}
{{--                                        <!-- Skill 1 -->--}}
{{--                                        <div class="skill clearfix">--}}
{{--                                            <h4>Web Design</h4>--}}
{{--                                            <div class="skill-value">95%</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="skill-container skill-1">--}}
{{--                                            <div class="skill-percentage"></div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End of Skill 1 -->--}}

{{--                                        <!-- Skill 2 -->--}}
{{--                                        <div class="skill clearfix">--}}
{{--                                            <h4>Print Design</h4>--}}
{{--                                            <div class="skill-value">65%</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="skill-container skill-2">--}}
{{--                                            <div class="skill-percentage"></div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End of Skill 2 -->--}}

{{--                                        <!-- Skill 3 -->--}}
{{--                                        <div class="skill clearfix">--}}
{{--                                            <h4>Logo Design</h4>--}}
{{--                                            <div class="skill-value">80%</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="skill-container skill-3">--}}
{{--                                            <div class="skill-percentage"></div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End of Skill 3 -->--}}

{{--                                        <!-- Skill 4 -->--}}
{{--                                        <div class="skill clearfix">--}}
{{--                                            <h4>Graphic Design</h4>--}}
{{--                                            <div class="skill-value">90%</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="skill-container skill-4">--}}
{{--                                            <div class="skill-percentage"></div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End of Skill 4 -->--}}

{{--                                    </div>--}}
{{--                                    <!-- End of Design Skills -->--}}

{{--                                    <div class="white-space-10"></div>--}}

{{--                                    <!-- Coding Skills -->--}}
{{--                                    <div class="block-title">--}}
{{--                                        <h3>Coding <span>Skills</span></h3>--}}
{{--                                    </div>--}}

{{--                                    <div class="skills-info skills-second-style">--}}
{{--                                        <!-- Skill 5 -->--}}
{{--                                        <div class="skill clearfix">--}}
{{--                                            <h4>JavaScript</h4>--}}
{{--                                            <div class="skill-value">95%</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="skill-container skill-5">--}}
{{--                                            <div class="skill-percentage"></div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End of Skill 5 -->--}}

{{--                                        <!-- Skill 6 -->--}}
{{--                                        <div class="skill clearfix">--}}
{{--                                            <h4>PHP</h4>--}}
{{--                                            <div class="skill-value">85%</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="skill-container skill-6">--}}
{{--                                            <div class="skill-percentage"></div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End of Skill 6 -->--}}

{{--                                        <!-- Skill 7 -->--}}
{{--                                        <div class="skill clearfix">--}}
{{--                                            <h4>HTML/CSS</h4>--}}
{{--                                            <div class="skill-value">100%</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="skill-container skill-7">--}}
{{--                                            <div class="skill-percentage"></div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End of Skill 7 -->--}}

{{--                                        <!-- Skill 8 -->--}}
{{--                                        <div class="skill clearfix">--}}
{{--                                            <h4>Smarty/Twig</h4>--}}
{{--                                            <div class="skill-value">75%</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="skill-container skill-8">--}}
{{--                                            <div class="skill-percentage"></div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End of Skill 8 -->--}}

{{--                                        <!-- Skill 9 -->--}}
{{--                                        <div class="skill clearfix">--}}
{{--                                            <h4>Perl</h4>--}}
{{--                                            <div class="skill-value">90%</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="skill-container skill-9">--}}
{{--                                            <div class="skill-percentage"></div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End of Skill 9 -->--}}
{{--                                    </div>--}}
{{--                                    <!-- End of Coding Skills -->--}}

{{--                                    <div class="white-space-10"></div>--}}

{{--                                    <!-- Knowledges -->--}}
{{--                                    <div class="block-title">--}}
{{--                                        <h3>Knowledges</h3>--}}
{{--                                    </div>--}}

{{--                                    <ul class="knowledges">--}}
{{--                                        <li>Marketing</li>--}}
{{--                                        <li>Print</li>--}}
{{--                                        <li>Digital Design</li>--}}
{{--                                        <li>Social Media</li>--}}
{{--                                        <li>Time Management</li>--}}
{{--                                        <li>Communication</li>--}}
{{--                                        <li>Problem-Solving</li>--}}
{{--                                        <li>Social Networking</li>--}}
{{--                                        <li>Flexibility</li>--}}
{{--                                    </ul>--}}
{{--                                    <!-- End of Knowledges -->--}}
{{--                                </div>--}}
{{--                                <!-- End of Skills & Certificates -->--}}
{{--                            </div>--}}

{{--                            <div class="white-space-50"></div>--}}

{{--                            <!-- Certificates -->--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xs-12 col-sm-12">--}}
{{--                                    <div class="block-title">--}}
{{--                                        <h3>Certificates</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row">--}}
{{--                                <!-- Certificate 1 -->--}}
{{--                                <div class="col-xs-12 col-sm-6">--}}
{{--                                    <div class="certificate-item clearfix">--}}
{{--                                        <div class="certi-logo">--}}
{{--                                            <img src="{{asset('website/img/clients/client-1.png')}}" alt="logo">--}}
{{--                                        </div>--}}

{{--                                        <div class="certi-content">--}}
{{--                                            <div class="certi-title">--}}
{{--                                                <h4>Psyhology of Intertnation Design</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="certi-id">--}}
{{--                                                <span>Membership ID: XXXX</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="certi-date">--}}
{{--                                                <span>19 April 2018</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="certi-company">--}}
{{--                                                <span></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- End of Certificate 1 -->--}}

{{--                                <!-- Certificate 2 -->--}}
{{--                                <div class="col-xs-12 col-sm-6">--}}
{{--                                    <div class="certificate-item clearfix">--}}
{{--                                        <div class="certi-logo">--}}
{{--                                            <img src="{{asset('website/img/clients/client-1.png')}}" alt="logo">--}}
{{--                                        </div>--}}

{{--                                        <div class="certi-content">--}}
{{--                                            <div class="certi-title">--}}
{{--                                                <h4>Psyhology of Intertnation Design</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="certi-id">--}}
{{--                                                <span>Membership ID: XXXX</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="certi-date">--}}
{{--                                                <span>19 April 2018</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="certi-company">--}}
{{--                                                <span></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- End of Certificate 2 -->--}}

{{--                            </div>--}}
{{--                            <!-- End of Certificates -->--}}
{{--                        </div>--}}
{{--                    </section>--}}
{{--                    <!-- End of Resume Subpage -->--}}

{{--                    <!-- Portfolio Subpage -->--}}
{{--                    <section data-id="portfolio" class="animated-section">--}}
{{--                        <div class="page-title">--}}
{{--                            <h2>Portfolio</h2>--}}
{{--                        </div>--}}

{{--                        <div class="section-content">--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-xs-12 col-sm-12">--}}
{{--                                    <!-- Portfolio Content -->--}}
{{--                                    <div class="portfolio-content">--}}

{{--                                        <ul class="portfolio-filters">--}}
{{--                                            <li class="active">--}}
{{--                                                <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="filter btn btn-sm btn-link" data-group="category_detailed">Detailed</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="filter btn btn-sm btn-link" data-group="category_mockups">Mockups</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">SoundCloud</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="filter btn btn-sm btn-link" data-group="category_vimeo-videos">Vimeo Videos</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">YouTube Videos</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}

{{--                                        <!-- Portfolio Grid -->--}}
{{--                                        <div class="portfolio-grid three-columns">--}}

{{--                                            <figure class="item lbaudio" data-groups='["category_all", "category_soundcloud"]'>--}}
{{--                                                <div class="portfolio-item-img">--}}
{{--                                                    <img src="{{asset('website/img/portfolio/1.jpg')}}" alt="SoundCloud Audio" title="" />--}}
{{--                                                    <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&#038;color=%23ff5500&#038;auto_play=false&#038;hide_related=false&#038;show_comments=true&#038;show_user=true&#038;show_reposts=false&#038;show_teaser=true&#038;visual=true" class="lightbox mfp-iframe" title="SoundCloud Audio"></a>--}}
{{--                                                </div>--}}

{{--                                                <i class="fa fa-volume-up"></i>--}}
{{--                                                <h4 class="name">SoundCloud Audio</h4>--}}
{{--                                                <span class="category">SoundCloud</span>--}}
{{--                                            </figure>--}}

{{--                                            <figure class="item standard" data-groups='["category_all", "category_detailed"]'>--}}
{{--                                                <div class="portfolio-item-img">--}}
{{--                                                    <img src="{{asset('website/img/portfolio/2.jpg')}}" alt="Media Project 2" title="" />--}}
{{--                                                    <a href="portfolio-1.html" class="ajax-page-load"></a>--}}
{{--                                                </div>--}}

{{--                                                <i class="far fa-file-alt"></i>--}}
{{--                                                <h4 class="name">Detailed Project 2</h4>--}}
{{--                                                <span class="category">Detailed</span>--}}
{{--                                            </figure>--}}

{{--                                            <figure class="item lbvideo" data-groups='["category_all", "category_vimeo-videos"]'>--}}
{{--                                                <div class="portfolio-item-img">--}}
{{--                                                    <img src="{{asset('website/img/portfolio/3.jpg')}}" alt="Vimeo Video 1" title="" />--}}
{{--                                                    <a href="https://player.vimeo.com/video/158284739" class="lightbox mfp-iframe" title="Vimeo Video 1"></a>--}}
{{--                                                </div>--}}

{{--                                                <i class="fas fa-video"></i>--}}
{{--                                                <h4 class="name">Vimeo Video 1</h4>--}}
{{--                                                <span class="category">Vimeo Videos</span>--}}
{{--                                            </figure>--}}

{{--                                            <figure class="item standard" data-groups='["category_all", "category_detailed"]'>--}}
{{--                                                <div class="portfolio-item-img">--}}
{{--                                                    <img src="{{asset('website/img/portfolio/4.jpg')}}" alt="Media Project 1" title="" />--}}
{{--                                                    <a href="portfolio-1.html" class="ajax-page-load"></a>--}}
{{--                                                </div>--}}

{{--                                                <i class="far fa-file-alt"></i>--}}
{{--                                                <h4 class="name">Detailed Project 1</h4>--}}
{{--                                                <span class="category">Detailed</span>--}}
{{--                                            </figure>--}}

{{--                                            <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>--}}
{{--                                                <div class="portfolio-item-img">--}}
{{--                                                    <img src="{{asset('website/img/portfolio/5.jpg')}}" alt="Mockup Design 1" title="" />--}}
{{--                                                    <a class="lightbox" title="Mockup Design 1" href="{{asset('website/img/portfolio/full/5.jpg')}}"></a>--}}
{{--                                                </div>--}}

{{--                                                <i class="far fa-image"></i>--}}
{{--                                                <h4 class="name">Mockup Design 1</h4>--}}
{{--                                                <span class="category">Mockups</span>--}}
{{--                                            </figure>--}}

{{--                                            <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>--}}
{{--                                                <div class="portfolio-item-img">--}}
{{--                                                    <img src="{{asset('website/img/portfolio/6.jpg')}}" alt="YouTube Video 1" title="" />--}}
{{--                                                    <a href="https://www.youtube.com/embed/bg0gv2YpIok" class="lightbox mfp-iframe" title="YouTube Video 1"></a>--}}
{{--                                                </div>--}}

{{--                                                <i class="fas fa-video"></i>--}}
{{--                                                <h4 class="name">YouTube Video 1</h4>--}}
{{--                                                <span class="category">YouTube Videos</span>--}}
{{--                                            </figure>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- End of Portfolio Content -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </section>--}}
{{--                    <!-- End of Portfolio Subpage -->--}}

                    <!-- Blog Subpage -->
                    <!-- Blog Subpage -->
                    <section data-id="blog" class="animated-section">
                        <div class="page-title">
                            <h2>Blog</h2>
                        </div>

                        <div class="section-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="blog-masonry two-columns clearfix">

                                        <!-- Blog Post 1 -->
                                        <div class="item post-1">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="View all posts in Design">Design</a>
                                                    </div>
                                                    <a href="blog-post-1.html">
                                                        <img src="{{asset('website/img/blog/blog_post_1.jpg')}}" class="size-blog-masonry-image-two-c" alt="Why I Switched to Sketch For UI Design" title="" />
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">05 Mar 2020</div>
                                                    <a href="blog-post-1.html">
                                                        <h4 class="blog-item-title">Why I Switched to Sketch For UI Design</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Blog Post 1 -->

                                        <!-- Blog Post 2 -->
                                        <div class="item post-2">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="View all posts in UI">UI</a>
                                                    </div>
                                                    <a href="blog-post-1.html">
                                                        <img src="{{asset('website/img/blog/blog_post_2.jpg')}}" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">23 Feb 2020</div>
                                                    <a href="blog-post-1.html">
                                                        <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Blog Post 2 -->

                                        <!-- Blog Post 3 -->
                                        <div class="item post-1">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="View all posts in Design">Design</a>
                                                    </div>
                                                    <a href="blog-post-1.html">
                                                        <img src="{{asset('website/img/blog/blog_post_3.jpg')}}" class="size-blog-masonry-image-two-c" alt="Designing the Perfect Feature Comparison Table" title="" />
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">06 Feb 2020</div>
                                                    <a href="blog-post-1.html">
                                                        <h4 class="blog-item-title">Designing the Perfect Feature Comparison Table</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Blog Post 3 -->

                                        <!-- Blog Post 4 -->
                                        <div class="item post-2">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="View all posts in E-Commerce">UI</a>
                                                    </div>
                                                    <a href="blog-post-1.html">
                                                        <img src="{{asset('website/img/blog/blog_post_4.jpg')}}" class="size-blog-masonry-image-two-c" alt="An Overview of E-Commerce Platforms" title="" />
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">07 Jan 2020</div>
                                                    <a href="blog-post-1.html">
                                                        <h4 class="blog-item-title">An Overview of E-Commerce Platforms</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Blog Post 4 -->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </section>
                    <!-- End of Blog Subpage -->

                    <!-- Contact Subpage -->
                    @include('website.sections.contact_us')
                    <!-- End of Contact Subpage -->
                </div>
            </div>

        </div>
    </div>
@endsection

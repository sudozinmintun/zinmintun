@extends('layouts.main')
@section('title', 'Contact')
@section('content')


    <div class="contact_us_area section-padding-100-70" id="contact">
        <div class="container">
            <div class="section-heading text-center">

                <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset('assets/img/svg/divider-01.svg') }}" width="100" class="mb-15" alt="divider">
                </div>

                <h2 class="fadeInUp" data-wow-delay="0.3s">
                    Love to hear from you!
                </h2>
                <p class="fadeInUp" data-wow-delay="0.4s">
                    I'm here to help and answer any question you might have. <br>
                    I look forward to hearing from you.
                </p>
            </div>


            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <ul class="services-block-four">

                        <li class="inner-box">
                            <div class="icon-font-box">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <h3>Support Email</h3>
                            <div class="text width-80">
                                info@zinmin.tech
                            </div>
                        </li>

                        <li class="inner-box">
                            <div class="icon-font-box">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h3>Phone Number</h3>
                            <div class="text width-80">
                                <br>
                            </div>
                        </li>

                        <li class="inner-box">
                            <div class="icon-font-box">
                                <i class="fa fa-calendar-o"></i>
                            </div>
                            <h3>Working Hours</h3>
                            <div class="text width-80">
                                9AM to 5PM Monday To Friday
                            </div>
                        </li>

                        <li class="inner-box">
                            <div class="icon-font-box">
                                <i class="fa fa-map-o"></i>
                            </div>
                            <h3>Location</h3>
                            <div class="text width-80">
                                - Yangon, Myanmar. 
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="contact_form grediant-borders">
                        <form action="{{ route('contact.store') }}" method="post" novalidate autocomplete="off">

                            @csrf

                            <div class="row">
                                <div class="col-12">
                                    <div id="success_fail_info"></div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.2s">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.3s">
                                        <input type="text" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="group fadeInUp" data-wow-delay="0.4s">
                                        <input type="text" name="subject" id="subject" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Subject</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="group fadeInUp" data-wow-delay="0.5s">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Message</label>
                                    </div>
                                </div>

                                <div class="col-12 text-center fadeInUp" data-wow-delay="0.6s">
                                    <button type="submit" class="btn more-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

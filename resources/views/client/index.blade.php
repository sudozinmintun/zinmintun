@extends('layouts.main')
@section('title', 'Clients')
@section('content')


    <div class="breadcumb-area">
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">
                                What I've done?
                            </h2>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="Projects section-padding-100">
        <div class="container">
            <div class="row align-items-center mb-50">
                <div class="col-4 col-lg-4 offset-lg-0">
                    <div class="who-we-contant">
                        <h4 class="fadeInUp" data-wow-delay="0.3s"> Creative Projects</h4>
                        <img src="{{ asset('assets/img/svg/divider-01.svg') }}" width="100" alt="divider">
                    </div>
                </div>

                <div class="col-8 col-lg-8 offset-lg-0 mt-s">
                    <div class="who-we-contant left-bor">
                        <p>
                            I successfully developed and managed multiple web
                            applications, including Learning Management Software, Real Estate Management, Construction
                            Management,
                            Accounting and Agency Management Software. Additionally, I have built over 250 websites.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($clients as $client)
                    <div class="col-12 col-lg-6">
                        <div class="project_single wow fadeInUp" data-wow-delay="0.2s">
                            <div class="project_img">
                                <img src="{{ $client->photo }}" class="img-responsive"
                                    style="width: 100%; height: 280px;" />
                            </div>
                            <div class="project_info">
                                <h4>
                                    {{ $client->title }}
                                </h4>
                                <p>
                                    {{ $client->description }}
                                </p>
                                <a href='{{ $client->link }}' target="_blank">
                                    Full Case Study
                                    <span>
                                        <i class="fa fa-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

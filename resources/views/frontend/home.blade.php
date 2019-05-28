@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Pajak, Tax, Money, Uang">

    <title>Urus Pajak</title>
@endsection

@section('content')
    <!-- start banner Area -->
    <section class="font-weight-light" style="margin-top: 6rem;">
        <div class="container-fluid">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 pb-0 bg-custom-dark-blue border border-left-0 border-right-0 bw-3 border-dark">
                    <div class="row">
                        <div class="col-md-3 col-0"></div>
                        <div class="col-md-5 col-8">
                            <div style="height: 350px;">
                                <div class="box h-100 d-flex justify-content-center flex-column margin-center">
                                    <h1 class="text-custom-yellow">Business.</h1>
                                    <p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui.</p>
                                    <a href="{{ route('frontend.form.business.2') }}" class="btn btn-primary w-75 p-1 bg-custom-yellow bw-2 border-dark text-custom-black">Pick your plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('images/frontend/home1.png') }}" class="height-home-banner-responsive"
                                 style="position: absolute; bottom: 0; right: 5px;"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pb-0 bg-custom-yellow border border-right-0 bw-3 border-dark">
                    <div class="row">
                        <div class="col-md-3 col-0"></div>
                        <div class="col-md-5 col-8">
                            <div style="height: 350px;">
                                <div class="box h-100 d-flex justify-content-center flex-column margin-center">
                                    <h1 class="text-custom-dark-blue">Individual.</h1>
                                    <p class="text-custom-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui.</p>
                                    <a href="{{ route('frontend.form.individual.2') }}" class="btn btn-primary w-75 p-1 bg-custom-dark-blue bw-2 border-dark text-custom-white">Pick your plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('images/frontend/home2.png') }}" class="height-home-banner-responsive"
                                 style="position: absolute; bottom: 0; right: 5px;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- welcome Area -->
    <section class="services-area section-gap font-weight-light">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-7">
                    <div class="title text-center">
                        <span>Hi, We're Uruspajak</span><br/>
                        <h1 class="mb-10">Lapor Pajak Pribadi.</h1>
                        <h1 class="mb-10">Mulai dari 100rb Selesai 1 hari.</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End welcome Area -->

    <!-- Start testimonial Area -->
    <section class="mb-5 font-weight-light text-italic">
        <div class="container">
            <div class="row">
                
                @php($content = $testimonials->where('column', 1)->where('index', 1)->first())
                @php($name = $testimonials->where('column', 1)->where('index', 2)->first())
                @php($name2 = $testimonials->where('column', 1)->where('index', 3)->first())
                        <div class="col-lg-3 col-md-6 col-12 mb-2 mb-md-0">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <img src="{{ asset('images/frontend/check.png') }}"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>{{$content->content}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h4>{{$name->content}}</h4>
                                    <span>{{$name2->content}}</span>
                                </div>
                            </div>
                        </div>
                @php($content = $testimonials->where('column', 2)->where('index', 5)->first())
                @php($name = $testimonials->where('column', 2)->where('index', 6)->first())
                @php($name2 = $testimonials->where('column', 2)->where('index', 7)->first())
                <div class="col-lg-3 col-md-6 col-12 mb-2 mb-md-0">
                    <div class="row mb-3">
                        <div class="col-12">
                            <img src="{{ asset('images/frontend/check.png') }}"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>{{$content->content}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4>{{$name->content}}</h4>
                            <span>{{$name2->content}}</span>
                        </div>
                    </div>
                </div>
                @php($content = $testimonials->where('column', 3)->where('index', 9)->first())
                @php($name = $testimonials->where('column', 3)->where('index', 10)->first())
                @php($name2 = $testimonials->where('column', 3)->where('index', 11)->first())
                <div class="col-lg-3 col-md-6 col-12 mb-2 mb-md-0">
                    <div class="row mb-3">
                        <div class="col-12">
                            <img src="{{ asset('images/frontend/check.png') }}"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>{{$content->content}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4>{{$name->content}}</h4>
                            <span>{{$name2->content}}</span>
                        </div>
                    </div>
                </div>
                @php($content = $testimonials->where('column', 4)->where('index', 13)->first())
                @php($name = $testimonials->where('column', 4)->where('index', 14)->first())
                @php($name2 = $testimonials->where('column', 4)->where('index', 15)->first())
                <div class="col-lg-3 col-md-6 col-12 mb-2 mb-md-0">
                    <div class="row mb-3">
                        <div class="col-12">
                            <img src="{{ asset('images/frontend/check.png') }}"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>{{$content->content}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4>{{$name->content}}</h4>
                            <span>{{$name2->content}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial Area -->

    <!-- Start cara kerja intro Area -->
    <section class="font-weight-light" style="margin-bottom: 6rem;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-7">
                    <div class="title text-center">
                        <h4 class="mb-10">Pelajari Cara Kerja Kami</h4>
                        <h1 class="mb-10">Cara Kerja</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End cara kerja intro Area -->

    <!-- Start cara kerja Area -->
    <section class="mb-3 font-weight-light">
        <div class="container">
            <div class="row">
                @php($title = $cara_kerja->where('column', 1)->where('index', 1)->first())
                @php($content = $cara_kerja->where('column', 1)->where('index', 1)->first())
                <div class="col-md-3 col-12 custom-mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-12 text-center">
                                    <img src="{{ asset('images/frontend/01-call.png') }}" style="margin-top: -90px;"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-3 col-2 pr-0">
                                            <h1>1.</h1>
                                        </div>
                                        <div class="col-md-9 col-10 pl-0">
                                            <h5>{{$title->title}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="w-25 bw-3 ml-0"/>
                                    {{$content->content}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php($title = $cara_kerja->where('column', 2)->where('index', 2)->first())
                @php($content = $cara_kerja->where('column', 2)->where('index', 2)->first())
                <div class="col-md-3 col-12 custom-mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-12 text-center">
                                    <img src="{{ asset('images/frontend/02-meet.png') }}" style="margin-top: -90px;"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-3 col-2 pr-0">
                                            <h1>2.</h1>
                                        </div>
                                        <div class="col-md-9 col-10 pl-0">
                                            <h5>{{$title->title}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="w-25 bw-3 ml-0"/>
                                    {{$content->content}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php($title = $cara_kerja->where('column', 3)->where('index', 3)->first())
                @php($content = $cara_kerja->where('column', 3)->where('index', 3)->first())
                <div class="col-md-3 col-12 custom-mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-12 text-center">
                                    <img src="{{ asset('images/frontend/03-calculate.png') }}" style="margin-top: -90px;"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-3 col-2 pr-0">
                                            <h1>3.</h1>
                                        </div>
                                        <div class="col-md-9 col-10 pl-0">
                                            <h5>{{$title->title}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="w-25 bw-3 ml-0"/>
                                    {{$content->content}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php($title = $cara_kerja->where('column', 4)->where('index', 4)->first())
                @php($content = $cara_kerja->where('column', 4)->where('index' ,4)->first())
                <div class="col-md-3 col-12 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-12 text-center">
                                    <img src="{{ asset('images/frontend/04-report.png') }}" style="margin-top: -90px;"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-3 col-2 pr-0">
                                            <h1>4.</h1>
                                        </div>
                                        <div class="col-md-9 col-10 pl-0">
                                            <h5>{{$title->title}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="w-25 bw-3 ml-0"/>
                                    {{$content->content}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end WANT A BITE Area -->

    <!-- Start WANT A BITE Area -->
    <section class="mb-3 font-weight-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body bg-custom-dark-blue p-0">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <img src="{{ asset('images/frontend/test-drive.png') }}" class="width-home-image-responsive"/>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div style="height: 265px;">
                                        <div class="box h-100 w-75 d-flex justify-content-center flex-column margin-center">
                                            <h1 class="text-custom-yellow">Want a Bite?</h1>
                                            <p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui.</p>
                                            <a href="#" class="btn btn-primary width-home-button-responsive p-2 bg-custom-white bw-2 border-dark text-custom-black" style="border-radius: 10px;">Take a test drive</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End WANT A BITE Area -->

    <!-- Start MAU KONSULTASI PAJAK? Area -->
    <section class="mb-3 font-weight-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body bg-custom-yellow p-0">
                            <div class="row">
                                <div class="col-md-6 col-12 text-center">
                                    <img src="{{ asset('images/frontend/contact.png') }}" class="width-home-image-responsive"/>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div id="section_tax_consultation">
                                        <div class="box h-100 w-75 d-flex justify-content-center flex-column margin-center">
                                            <h1 class="text-custom-dark-blue">Mau Konsultasi Pajak?</h1>
                                            <p class="text-custom-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui.</p>
                                            <a href="#" class="btn btn-primary width-home-button-responsive p-2 bg-custom-white bw-2 border-dark text-custom-black" style="border-radius: 10px;">Hubungi Kami</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End MAU KONSULTASI PAJAK? Area -->
@endsection

@section('styles')
    <style>
        .banner-area .fullscreen{
            height: 500px !important;
        }

        .margin-center{
            margin: 0 auto 0;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).on("click", '.switch-slide', function (e){
            var slideIdx = $(this).data('slide');

            $('#slide_1').hide();
            $('#slide_2').hide();
            $('#slide_3').hide();

            $('#slide_' + slideIdx).show(500);
        });
    </script>
@endsection
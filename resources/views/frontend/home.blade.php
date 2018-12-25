@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Pajak, Tax, Money, Uang">

    <title>Urus Pajak</title>
@endsection

@section('content')
    <!-- start banner Area -->
    <section class="banner-area custom-mt-10">
        <div class="container-fluid">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 p-4">
                    <h1>Business.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui. Sed et risus leo. Morbi pulvinar pellentesque lorem, id posuere libero ornare nec. Nullam et ante lacus. Vestibulum ullamcorper orci quis neque malesuada sodales. Fusce ex nulla, tempus non aliquet vitae, ullamcorper sit amet augue.</p>
                </div>
                <div class="col-lg-6 col-md-6 p-4">
                    {{--<img class="img-fluid" src="{{ asset('template/img/hero-img.png') }}" alt="">--}}
                    <h1>Individual.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui. Sed et risus leo. Morbi pulvinar pellentesque lorem, id posuere libero ornare nec. Nullam et ante lacus. Vestibulum ullamcorper orci quis neque malesuada sodales. Fusce ex nulla, tempus non aliquet vitae, ullamcorper sit amet augue.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- welcome Area -->
    <section class="services-area section-gap">
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

    <!-- Start services Area -->
    <section class="services-area mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="p-1">
                        <h4>CHECK PICTURE HERE</h4><br/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui. Sed et risus leo. Morbi pulvinar pellentesque lorem, id posuere libero ornare nec. Nullam et ante lacus. Vestibulum ullamcorper orci quis neque malesuada sodales. Fusce ex nulla, tempus non aliquet vitae, ullamcorper sit amet augue.</p><br/>
                        <h4>John Doe</h4>
                        <span>@john</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-1">
                        <h4>CHECK PICTURE HERE</h4><br/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui. Sed et risus leo. Morbi pulvinar pellentesque lorem, id posuere libero ornare nec. Nullam et ante lacus. Vestibulum ullamcorper orci quis neque malesuada sodales. Fusce ex nulla, tempus non aliquet vitae, ullamcorper sit amet augue.</p><br/>
                        <h4>John Doe</h4>
                        <span>@john</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-1">
                        <h4>CHECK PICTURE HERE</h4><br/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui. Sed et risus leo. Morbi pulvinar pellentesque lorem, id posuere libero ornare nec. Nullam et ante lacus. Vestibulum ullamcorper orci quis neque malesuada sodales. Fusce ex nulla, tempus non aliquet vitae, ullamcorper sit amet augue.</p><br/>
                        <h4>John Doe</h4>
                        <span>@john</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-1 text-m">
                        <h4>CHECK PICTURE HERE</h4><br/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui. Sed et risus leo. Morbi pulvinar pellentesque lorem, id posuere libero ornare nec. Nullam et ante lacus. Vestibulum ullamcorper orci quis neque malesuada sodales. Fusce ex nulla, tempus non aliquet vitae, ullamcorper sit amet augue.</p><br/>
                        <h4>John Doe</h4>
                        <span>@john</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End services Area -->

    <!-- CARA KERJA Area -->
    <section class="mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>PICTURE HERE</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-3 col-12 pr-0">
                                            <h1>1.</h1>
                                        </div>
                                        <div class="col-md-9 col-12 pl-0">
                                            <h5>Beritahu Kebutuhanmu</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui. Sed et risus leo. Morbi pulvinar pellentesque lorem, id posuere libero ornare nec. Nullam et ante lacus. Vestibulum ullamcorper orci quis neque malesuada sodales. Fusce ex nulla, tempus non aliquet vitae, ullamcorper sit amet augue.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>PICTURE HERE</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-3 col-12 pr-0">
                                            <h1>2.</h1>
                                        </div>
                                        <div class="col-md-9 col-12 pl-0">
                                            <h5>Tanda Tangan Kontrak</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui. Sed et risus leo. Morbi pulvinar pellentesque lorem, id posuere libero ornare nec. Nullam et ante lacus. Vestibulum ullamcorper orci quis neque malesuada sodales. Fusce ex nulla, tempus non aliquet vitae, ullamcorper sit amet augue.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>PICTURE HERE</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-3 col-12 pr-0">
                                            <h1>3.</h1>
                                        </div>
                                        <div class="col-md-9 col-12 pl-0">
                                            <h5>Kami Menghitung Pajak</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui. Sed et risus leo. Morbi pulvinar pellentesque lorem, id posuere libero ornare nec. Nullam et ante lacus. Vestibulum ullamcorper orci quis neque malesuada sodales. Fusce ex nulla, tempus non aliquet vitae, ullamcorper sit amet augue.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>PICTURE HERE</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-3 col-12 pr-0">
                                            <h1>4.</h1>
                                        </div>
                                        <div class="col-md-9 col-12 pl-0">
                                            <h5>Kami Melapor Pajak</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui. Sed et risus leo. Morbi pulvinar pellentesque lorem, id posuere libero ornare nec. Nullam et ante lacus. Vestibulum ullamcorper orci quis neque malesuada sodales. Fusce ex nulla, tempus non aliquet vitae, ullamcorper sit amet augue.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end WANT A BITE Area -->

    <!-- WANT A BITE Area -->
    <section class="mb-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <h3>PICTURE HERE</h3>
                                </div>
                                <div class="col-md-6 col-12">
                                    <h3>WANT A BITE?</h3>
                                    <br/>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end WANT A BITE Area -->

    <!-- MAU KONSULTASI PAJAK? Area -->
    <section class="mb-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <h3>PICTURE HERE</h3>
                                </div>
                                <div class="col-md-6 col-12">
                                    <h3>MAU KONSULTASI PAJAK??</h3>
                                    <br/>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end MAU KONSULTASI PAJAK? Area -->
@endsection

@section('styles')
    <style>
        .banner-area .fullscreen{
            height: 500px !important;
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
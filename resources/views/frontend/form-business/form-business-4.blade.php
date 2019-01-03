@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Pajak, Tax, Money, Uang">

    <title>Urus Pajak</title>
@endsection

@section('content')
    <section class="section-gap mb-header-responsive">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('home') }}" style="text-decoration: none;">
                        <img src="{{ asset('images/frontend/logo2.png') }}" height="50"/>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- start banner Area -->
    <section class="section-gap">
        <div class="container">
            <div class="row mb-2">
                <div class="col-12">
                    <span class="text-custom-white">Let's get you a quote - it only takes a few second</span><br/>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <span class="h4 text-custom-gray">Saya ingin mengurus </span>
                    <span class="h4 text-custom-gray text-custom-underline">{{ $tax_report }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <span class="h4 text-custom-gray">Omzet saya per bulan </span>
                    <span class="h4 text-custom-gray text-custom-underline">{{ $omzet }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="h3 text-custom-black" for="cover">Pilih paket anda :</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <div class="table-responsive-md">
                        <table class="table table-hover bg-custom-white">
                            <thead>
                            <tr>
                                <th colspan="2" class="border bw-3 border-dark bg-custom-yellow h3 text-center" scope="col">Small</th>
                                <th colspan="2" class="border bw-3 border-dark bg-custom-yellow h3 text-center" scope="col">Business</th>
                                <th colspan="2" class="border bw-3 border-dark bg-custom-yellow h3 text-center" scope="col">Enterpreneur</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="border-left border-right bw-3 border-dark h4 text-center text-custom-light-gray" colspan="2">Features</th>
                                <th class="border-right bw-3 border-dark h4 text-center text-custom-light-gray" colspan="2">Features</th>
                                <th class="border-right bw-3 border-dark h4 text-center text-custom-light-gray" colspan="2">Features</th>
                            </tr>
                            <tr>
                                <td class="border-left bw-3 border-dark pr-0 text-right text-custom-dark-blue" style="width: 10%"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark" style="width: 23%">Untuk penghasilan <1m</td>
                                <td class="pr-0 text-right text-custom-dark-blue" style="width: 10%"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark" style="width: 24%">Untuk penghasilan <1m</td>
                                <td class="pr-0 text-right text-custom-dark-blue" style="width: 10%"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark" style="width: 23%">Untuk penghasilan <1m</td>
                            </tr>
                            <tr>
                                <td class="border-left bw-3 border-dark pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Kode billing setoran</td>
                                <td class="pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Kode billing setoran</td>
                                <td class="pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Kode billing setoran</td>
                            </tr>
                            <tr>
                                <td class="border-left bw-3 border-dark pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Penyusunan & lapor SPT</td>
                                <td class="pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Penyusunan & lapor SPT</td>
                                <td class="pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Penyusunan & lapor SPT</td>
                            </tr>
                            <tr>
                                <td class="border-left bw-3 border-dark pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Google Analytics</td>
                                <td class="pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Google Analytics</td>
                                <td class="pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Google Analytics</td>
                            </tr>
                            <tr>
                                <td class="border-left bw-3 border-dark pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Email support</td>
                                <td class="pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Email support</td>
                                <td class="pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Email support</td>
                            </tr>
                            <tr>
                                <td class="border-left bw-3 border-dark pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">A/B testing</td>
                                <td class="pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">A/B testing</td>
                                <td class="pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">A/B testing</td>
                            </tr>
                            <tr>
                                <td class="border-left bw-3 border-dark pr-0 text-right text-custom-yellow"><i class="fas fa-times"></i></td>
                                <td class="border-right bw-3 border-dark">Email account</td>
                                <td class="pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Email account</td>
                                <td class="pr-0 text-right text-custom-yellow"><i class="fas fa-times"></i></td>
                                <td class="border-right bw-3 border-dark">Email account</td>
                            </tr>
                            <tr>
                                <td class="border-left bw-3 border-dark pr-0 text-right text-custom-yellow"><i class="fas fa-times"></i></td>
                                <td class="border-right bw-3 border-dark">Custom Domain</td>
                                <td class="pr-0 text-right text-custom-dark-blue"><i class="fas fa-check"></i></td>
                                <td class="border-right bw-3 border-dark">Custom Domain</td>
                                <td class="pr-0 text-right text-custom-yellow"><i class="fas fa-times"></i></td>
                                <td class="border-right bw-3 border-dark">Custom Domain</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border-bottom border-left border-right bw-3 border-dark text-center">
                                    <a href="{{ route('frontend.form.final',
                                    ['type' => 'business',
                                    'tax_report' => $tax_report_option,
                                    'omzet' => $omzet_option,
                                    'package' => 'small']) }}" class="btn btn-primary w-75 mb-minus-45 bw-3 bg-custom-yellow border-dark text-custom-black">Choose</a>
                                </td>
                                <td colspan="2" class="border-bottom border-right bw-3 border-dark text-center">
                                    <a href="{{ route('frontend.form.final',
                                    ['type' => 'business',
                                    'tax_report' => $tax_report_option,
                                    'omzet' => $omzet_option,
                                    'package' => 'business']) }}" class="btn btn-primary w-75 mb-minus-45 bw-3 bg-custom-yellow border-dark text-custom-black">Choose</a>
                                </td>
                                <td colspan="2" class="border-bottom border-right bw-3 border-dark text-center">
                                    <a href="{{ route('frontend.form.final',
                                    ['type' => 'business',
                                    'tax_report' => $tax_report_option,
                                    'omzet' => $omzet_option,
                                    'package' => 'enterpreneur']) }}" class="btn btn-primary w-75 mb-minus-45 bw-3 bg-custom-yellow border-dark text-custom-black">Choose</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
@endsection

@section('styles')
    <style>
        body{
            background-color: #555891;
        }

        .table td{
            border-top: 0;
            color: #000;
        }

        .mb-minus-45{
            margin-bottom: -45px;
        }

    </style>
@endsection

@section('scripts')
@endsection
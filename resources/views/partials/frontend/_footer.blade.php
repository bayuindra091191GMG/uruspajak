@if(Route::currentRouteName() === 'home' ||
    Route::currentRouteName() === 'frontend.form.final')
    <footer class="footer-area py-4 bg-custom-white border-top border-dark text-custom-black">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-12">
                    <img src="{{ asset('images/frontend/logo1.png') }}" height="45"/>
                    <br/><br/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus arcu in urna mattis, in viverra magna posuere. Morbi eu mollis dui. Sed et risus leo. Morbi pulvinar pellentesque lorem.</p>
                </div>
                <div class="col-md-3 col-12 mb-3 mb-md-0">
                    <h4>Services</h4>
                    <br/>
                    <ul class="list-unstyled">
                        <li class="py-1">Pajak Pribadi</li>
                        <li class="py-1">Pajak Tahunan</li>
                        <li class="py-1">Laporan Keuangan</li>
                        <li class="py-1">Konsultasi Pajak</li>
                        <li class="py-1">eFIN - PKP - e-Faktur</li>
                    </ul>
                </div>
                <div class="col-md-3 col-12 mb-3 mb-md-0">
                    <h4>Company</h4>
                    <br/>
                    <ul class="list-unstyled">
                        <li class="py-1">Tentang Kami</li>
                        <li class="py-1">Seri Perpajakan</li>
                        <li class="py-1">KSWP</li>
                        <li class="py-1">Testimonial</li>
                        <li class="py-1">FAQ</li>
                    </ul>
                </div>
                <div class="col-md-3 col-12">
                    <h4>Contact Us</h4>
                    <br/>
                    <span>Infiti Office, Permata Regency D/37, Kembangan</span><br/>
                    <span>Jakarta 11630</span>
                    <br/><br/>
                    <span class="text-custom-dark-blue">+62 21 5020-5002</span><br/>
                    <span class="text-custom-dark-blue">mau@uruspajak.id</span>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-6 col-12">
                    <h5>@ 2018 PT Sasana Konsulia Global x Infiniti Office</h5>
                </div>
                <div class="col-md-6 col-12 text-right">
                    <i class="fab fa-facebook fa-2x"></i>&nbsp;&nbsp;
                    <i class="fab fa-twitter fa-2x"></i>&nbsp;&nbsp;
                    <i class="fab fa-instagram fa-2x"></i>&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </footer>
@endif
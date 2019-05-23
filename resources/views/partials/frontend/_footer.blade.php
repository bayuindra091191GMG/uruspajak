@if(Route::currentRouteName() === 'home' ||
    Route::currentRouteName() === 'frontend.form.final')
    <footer class="footer-area py-4 bg-custom-white border-top border-dark text-custom-black">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-12">
                    <img src="{{ asset('images/frontend/logo1.png') }}" height="45"/>
                    <br/><br/>
                    <p>{{ $columnParagraph1 }}</p>
                </div>
                <div class="col-md-3 col-12 mb-3 mb-md-0">
                    <h4>{{ $columnTitle2 }}</h4>
                    <br/>
                    <ul class="list-unstyled">
                        @foreach($column2Contents as $content)
                            <li class="py-1">
                                <a href="{{ !empty($content->link) ? $content->link : '#' }}">{{ $content->content }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 col-12 mb-3 mb-md-0">
                    <h4>{{ $columnTitle3 }}</h4>
                    <br/>
                    <ul class="list-unstyled">
                        @foreach($column3Contents as $content)
                            <li class="py-1">
                                <a href="{{ !empty($content->link) ? $content->link : '#' }}">{{ $content->content }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 col-12">
                    <h4>Contact Us</h4>
                    <br/>
                    <span>{{ $addressLine1 }}</span><br/>
                    <span>{{ $addressLine2 }}</span>
                    <br/><br/>
                    <span class="text-custom-dark-blue">{{ $contactPhone }}</span><br/>
                    <span class="text-custom-dark-blue">{{ $contactEmail }}</span>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-6 col-12">
                    <h5>{{ $copyright }}</h5>
                </div>
                <div class="col-md-6 col-12 text-right">
                    <a href="{{ !empty($facebookLink) ? $facebookLink : '#' }}">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    &nbsp;&nbsp;
                    <a href="{{ !empty($twitterLink) ? $twitterLink : '#' }}">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    &nbsp;&nbsp;
                    <a href="{{ !empty($instagramLink) ? $instagramLink : '#' }}">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    &nbsp;&nbsp;
                </div>
            </div>
        </div>
    </footer>
@endif
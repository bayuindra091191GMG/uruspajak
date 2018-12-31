@if(Route::currentRouteName() === 'home')
    <header id="header" class="border-bottom bw-2 border-dark font-weight-medium">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="{{ route('home') }}" style="text-decoration: none;">
                        <img src="{{ asset('images/frontend/logo1.png') }}"/>
                    </a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="{{ route('home') }}" class="p-2">Home</a></li>
                        <li><a href="#" class="p-2">About</a></li>
                        <li><a href="#" class="p-2">Contact</a></li>
                        <li class="d-block d-sm-none"><a href="#" class="p-2">Take a Test Drive</a></li>
                        <li class="d-none d-sm-block"><a href="#" class="btn btn-default p-2 border-custom-yellow text-custom-dark-blue">Take a Test Drive</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->
@endif
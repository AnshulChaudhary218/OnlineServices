<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'BillingSystem') }}</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-4 text-dark" href="/home">Home</a>
        <a class="p-4 text-dark" href="/services">Services</a>
        <a class="p-4 text-dark" href="/contact">Contact Us</a>
        @if (Auth::check() && Auth::user()->role)
            <a class="p-4 text-dark" href="/confirmation">Confirmation</a>
        @endif
    </nav>
    @guest
        <a class="nav-link btn btn-outline-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
        @if (Route::has('register'))
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
        @else
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right profileDropdownList" aria-labelledby="navbarDropdown" style="z-index: 6; position: absolute;">
            <div class="profileDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    @endguest   
</div>
<!-- Navigation -->
<nav>
	<div class="nav-wrapper container">
	  <a href="/" class="brand-logo">Logo</a>
	  <ul id="nav-mobile" class="right hide-on-med-and-down">
	    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
	    <li class="nav-item"><a class="nav-link" href="/training">Training</a></li>
	    <li class="nav-item"><a class="nav-link" href="//aylinmarie.co" target="_blank">aylinmarie.co</a></li>
	  </ul>
	</div>
</nav>

{{-- Login --}}
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
</div>
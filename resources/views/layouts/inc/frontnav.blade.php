<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">CarRental</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link {{Request::is( '/' ) ? 'active' : '' }}" aria-current="page" href="{{url('/')}}">Home</a>
          <a class="nav-link {{Request::is( 'categoriy' ) ? 'active' : '' }}" href=" {{url('categoriy')}} ">Category</a>
          <a class="nav-link {{Request::is( 'my-booking' ) ? 'active' : '' }}" href=" {{url('my-booking')}} ">My Bookings</a>
          @guest
                              @if (Route::has('login'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                  </li>
                              @endif

                              @if (Route::has('register'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </li>
                              @endif
                          @else
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }}
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                          @endguest
        </div>
      </div>
    </div>
  </nav>

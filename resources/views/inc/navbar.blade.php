
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                {{--<a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>--}}
                {{--//The Above Creates a Link for the Home Page('/')when clicked--}}

                <a class="navbar-brand" {{--href="{{ url('/') }}"--}}>
                    {{ config('app.name', 'Laravel') }}
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        {{--Checkout "nav-item active[home,about,services]" vs "nav-item[blog]"--}}
                        <li class="nav-item active">
                          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link " href="/services">Services</a>
                        </li>
                        <li class="nav-item active {{--active--}}">
                          <a class="nav-link " href="/posts">Blog </a>
                        </li>
                    </ul>

                    
                    

                        

                    <!-- Right Side Of Navbar -->  
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item col-md-4 col-sm-4 col-lg-4">
                                <a class="btn btn-primary"  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item col-sm-4 col-lg-4 col-md-4">
                                    <a class="btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            {{--Oooh laaaaaa laaaaaaaaaaaaaaaaaa yoooooooooooooooo 
                            We did that Create Post shit on nav bar 
                            --}}

                            @if ( !Auth::guest() )
                                <li class="nav-item">
                                    <a class="btn btn-success" href="/posts/create">Create Post </a>
                                </li>
                            @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link active dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <div class="dropdown-item">
                                        <a class="btn btn-primary" href="/dashboard" > Dashboard </a> 
                                        
                                        <a class="btn btn-danger" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a> 
                                    </div>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

      {{--
      <div class="float-right">
          <a class="btn btn-primary  "  href="/posts/create"> Create Post </a> 
      </div>
      --}}
</nav>
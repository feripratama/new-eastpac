<header class="main-header">

<!-- Logo -->
<a href="{{ route('home') }}" class="logo">
    <img src="{{asset('landingpage/images/logobaru.png')}}" width="65%">
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('dist/img/coin.png')}}" class="user-image" alt="User Image">
                <span class="hidden-xs">
                    {{getEastBalance('https://rinkeby.etherscan.io',App\UserWallet::where('user_id', Auth::user()->id)->first()->wallet_address)}} EAST
                </span>
            </a>
            {{-- getBalance('https://api-rinkeby.etherscan.io/', '0x12217eD6adEdFB6f85a0C3284eEe6Df53C7910c4')->result --}}
        </li>
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('dist/img/eth_icon_2.png')}}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{getEthBalance('https://api-rinkeby.etherscan.io/', App\UserWallet::where('user_id', Auth::user()->id)->first()->wallet_address)}} ETH</span>
            </a>
        </li>
        </ul>
    <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

            @if(Auth::user()->getMedia('avatars')->last() != false)
                <img src="{{ Auth::user()->getMedia('avatars')->last()->getFullUrl() }}" class="user-image" alt="User Image">
            @else
                <img src="{{asset('dist/img/user.png')}}" class="user-image" alt="User Image">
            @endif
            <span class="hidden-xs">{{Auth::user()->name}}</span>
        </a>
        <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
                @if(Auth::user()->getMedia('avatars')->last() != false)
                    <img src="{{ Auth::user()->getMedia('avatars')->last()->getFullUrl() }}" class="img-circle" alt="User Image">
                @else
                    <img src="{{asset('dist/img/user.png')}}" class="img-circle" alt="User Image">
                @endif

            <p>
                {{Auth::user()->name}}
            </p>
            </li>
            <!-- Menu Body -->
            <!-- Menu Footer-->
            <li class="user-footer">
            <div class="pull-left">
                <a href="{{ route('profileIndex') }}" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    Sign out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
            </li>
        </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        </ul>

    </div>
    </nav>
</header>

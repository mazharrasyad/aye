<nav class="navbar navbar-expand-lg bg-info">
<div class="container">
    <div class="navbar-translate">
    <a class="navbar-brand" href="{{ url('/') }}"><b>U-VEST</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
        <li class="active nav-item">
        <a href="{{ url('/') }}" class="nav-link">
            Home
        </a>
        </li>

        <li class="nav-item">
            @guest
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
            @else
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </li>

        <li class="nav-item">
            <a href="{{ url('/transaksi') }}" class="nav-link">
                Investasi
            </a>
        </li>

        <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                Menu <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/jenis') }}">Jenis</a></li>
                <li><a href="{{ url('/pengajuanusaha') }}">Pengajuan Usaha</a></li>
                <li><a href="{{ url('/validasi') }}">Validasi</a></li>
                <li><a href="{{ url('/modal') }}">Modal</a></li>
                <li><a href="{{ url('/usahaku') }}">Usaha</a></li>
                
            </ul>
        </li>

        <li class="nav-item">
            <a href="#kontak" class="nav-link">
                Contact
            </a>
        </li>
    </ul>
    </div>
</div>
</nav>
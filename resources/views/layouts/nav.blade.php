<nav class="navbar navbar-expand-md navbar-light navbar-laravel mb-4">
    <div class="container">
        <a class="navbar-brand font-weight-bold font-italic" href="{{ url('/') }}">
            {{ config('', 'Perpus') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{url('home')}}" class="nav-link">Home</a>
                </li><li class="nav-item">
                    <a href="{{url('books')}}" class="nav-link">Buku</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('users')}}" class="nav-link">Users</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('cetakkartuanggota')}}" class="nav-link">Cek Kartu Anggota</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('category/create')}}" class="nav-link">Category</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('peminjaman')}}" class="nav-link">Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('pengembalian')}}" class="nav-link">Pengembalian</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('buat-pengembalian')}}" class="nav-link">Buat pengembalian</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="" class="nav-link">Laporan</a>
                </li> -->
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

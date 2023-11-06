<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Menu</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">Produk<i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="{{route('flower.index')}}" class="dropdown-item">All</a>
                            <a href="{{route('flower.index', ['type' => 'Bougenville'])}}" class="dropdown-item">Bougenville</a>
                            <a href="{{route('flower.index', ['type' => 'Serut'])}}" class="dropdown-item">Serut</a>
                            <a href="{{route('flower.index', ['type' => 'Bonsai'])}}" class="dropdown-item">Bonsai</a>
                            <a href="{{route('flower.index', ['type' => 'Keladi'])}}" class="dropdown-item">Keladi</a>
                            <a href="{{route('flower.index', ['type' => 'Cemara'])}}" class="dropdown-item">Cemara</a>
                        </div>
                    </div>
                    <a href="{{route('transaction.create')}}" class="nav-item nav-link">Check Out</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link {{Request::is('/') ? 'active' : ''}}">Home</a>
                        <a href="{{ route('transaction.index') }}" class="nav-item nav-link {{Request::is('transaction') ? 'active' : ''}}">Pesanan Saya</a>
                        <a href="{{route('user.show', auth()->id())}}" class="nav-item nav-link {{Request::is('user/*') ? 'active' : ''}}">Akun Saya</a>
                        <!-- <a href="shop.php" class="nav-item nav-link">Shop</a>
                        <a href="detail.php" class="nav-item nav-link">Shop Detail</a> -->
                        {{-- <a href="contact.php" class="nav-item nav-link">Contact</a> --}}
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        @auth
                            <a href="javascript:void(0)" class="nav-item nav-link" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endauth
                        @guest
                            <a href="login.php" class="nav-item nav-link">Login</a>
                            <a href="register.php" class="nav-item nav-link">Register</a>
                        @endguest
                    </div>
                </div>
            </nav>
            @yield('carousel')
        </div>
    </div>
</div>
<!-- Navbar End -->

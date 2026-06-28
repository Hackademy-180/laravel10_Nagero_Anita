<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">MyBlog</a>
<img src="/media/logo/logow.png" alt="logo" class="imge-fluid logo">
        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Homepage</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Account
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">

                        @guest
                        <li>
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('register') }}">Registrati</a>
                        </li>
                        @endguest

                        @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">
                                    Logout
                                </button>
                            </form>
                        </li>
                        @endauth

                    </ul>
                </li>
            </ul>

        </div>

    </div>
</nav>
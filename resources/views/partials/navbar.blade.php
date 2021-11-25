<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand m-3" href="/">
            SIPMA BUMN
        </a>
        <button class="navbar-toggler mb-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link link tebel-sedang" href="/">Home &nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link tebel-sedang" href="#">About &nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link tebel-sedang" href="#">Services &nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link tebel-sedang" href="#">Contact &nbsp;&nbsp;</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome Back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active tebel-sedang rounded-pill bg-ungu shadow" href="/login">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

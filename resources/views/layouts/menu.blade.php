<nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}">
            Zin Min Tun
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class='nav-link' href="{{ route('client.index') }}">
                        Clients
                    </a>
                </li>

                <li class="nav-item">
                    <a class='nav-link' href="{{ route('profile.index') }}">
                        Profile
                    </a>
                </li>

                <li class="nav-item">
                    <a class='nav-link' href="javascript::void(0)">
                        Blogs
                    </a>
                </li>

                <li class="lh-55px">
                    <a class='btn login-btn ml-50' href="{{ route('contact.index') }}">
                        Contact
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

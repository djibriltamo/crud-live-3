<nav class="navbar navbar-expand-lg bg-body-tertiary mt-2 mb-2">

    <div class="container-fluid">

      <a class="navbar-brand" href="#">CRUD Customers</a>
      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               
                @guest
                    <li class="nav-item">
                        <a wire:navigate class="nav-link" href="/login">Login</a>
                    </li>

                    <li class="nav-item">
                        <a wire:navigate class="nav-link" href="/register">Register</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <a wire:navigate class="nav-link active" aria-current="page" href="/customers">Customers</a>
                    </li>

                    <li class="nav-item">
                        <button class="btn btn-danger" wire:click="logout">Logout</button>
                    </li>
                @endauth

            </ul>

            {{-- 
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> 
            --}}

        </div>

    </div>

</nav>
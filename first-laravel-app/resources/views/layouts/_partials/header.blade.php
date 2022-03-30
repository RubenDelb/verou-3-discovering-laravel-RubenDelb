    <h1 class="bg-dark text-center" style="color:white">Laravel vs. Ruben</h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="{{ route('hello-world') }}">Hello-World</a>
                    <a class="nav-link" href="{{ route('goodbye-world') }}">Goodbye-World</a>
                    <a class="nav-link" href="{{ route('recipes') }}">Recipes</a>
                    {{-- <a class="nav-link disabled">Disabled</a> --}}
                </div>
            </div>
        </div>
    </nav>

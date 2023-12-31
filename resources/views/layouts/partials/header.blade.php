<header>
    <nav class="navbar navbar-expand-lg bg-light p-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
          </svg></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-current="page" href="#">Contacts</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Movies
                </a>
                <ul class="dropdown-menu">
                @foreach($movies as $movie)
                  <li><a class="dropdown-item {{$movie['title'] != 'Il Padrino' ?  'disabled' : ''}}" href="{{$movie['title'] == 'Il Padrino' ? '/il-padrino' : ''}}">{{$movie['title']}}</a></li>

                @endforeach
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</header>
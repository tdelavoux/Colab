<nav id="colab-top-nav" class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand" href="{{ route('dashboard') }}">{{env('APP_NAME')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse top-nav-right" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-border-all"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('search') }}">
                    <i class="fas fa-globe-americas"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('myprojects') }}">
                    <i class="fas fa-folder-open"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-bell"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('personalInfos') }}">
                    Nom Random
                    <i class="fas fa-user"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
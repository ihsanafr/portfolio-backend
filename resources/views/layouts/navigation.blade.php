<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Portfolio Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.techstacks.index') }}">Techstacks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.projects.index') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.experiences.index') }}">Experiences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.certificates.index') }}">Certificates</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="nav-link">{{ Auth::user()->name }}</span>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
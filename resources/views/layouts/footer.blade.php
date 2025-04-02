<!-- Footer -->
{{-- <div class="py-3 my-0 text-center bg-body-secondary">
    <ul class="nav justify-content-center border-bottom pb-2 mb-0">
        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-muted">Nyitólap</a></li>
        <li class="nav-item"><a href="{{ route('home') }}#study" class="nav-link px-2 text-muted">Oktatás</a></li>
        <li class="nav-item"><a href="{{ route('students.create') }}" class="nav-link px-2 text-muted">Jelentkezés</a>
        </li>
        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-muted">Cégünkről</a></li>
    </ul>
    <ul class="nav justify-content-center">
        <li class="nav-item me-3">
            <a href="mailto:diakholmi@gmail.com" class="nav-link px-2 text-muted">
                <i class="bi bi-envelope"></i>
                diakholmi@gmail.com
            </a>
        </li>
        <li class="nav-item me-3">
            <a href="tel:+36209691417" class="nav-link px-2 text-muted">
                <i class="bi bi-telephone"></i>
                +36 20 969 1417
            </a>
        </li>
    </ul>
    <div class="text-center pb-3">
        © 2025
        <a class="text-center text-muted" href="{{ route('home') }}">Diákholmi</a>
    </div>
</div> --}}

<footer
    class="d-block bd-footer bg-body-tertiary d-flex flex-wrap justify-content-between align-items-center px-5 py-4 py-md-5 mt-5 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">© 2025 <a class="text-center text-muted"
            href="{{ route('home') }}">Diákholmi</a></p>

    <a href="/"
        class="img-fluid mx-auto d-block px-2 col-5 col-sm-4 col-md-3 col-xxl-2 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <img src="/img/diakholmi.png" alt="" class="img-fluid">
    </a>

    <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-body-secondary">Főoldal</a></li>
        <li class="nav-item"><a href="{{ route('home') }}#study" class="nav-link px-2 text-body-secondary">Oktatás</a>
        </li>
        <li class="nav-item"><a href="{{ route('students.create') }}"
                class="nav-link px-2 text-body-secondary">Regisztráció</a></li>
        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-body-secondary">Rólunk</a></li>
    </ul>

    <div class="mx-auto border-top">
        <ul class="nav">
            <li class="nav-item me-3">
                <a href="mailto:diakholmi@gmail.com" class="nav-link px-2 text-muted">
                    <i class="bi bi-envelope"></i>
                    diakholmi@gmail.com
                </a>
            </li>
            <li class="nav-item me-3">
                <a href="tel:+36209691417" class="nav-link px-2 text-muted">
                    <i class="bi bi-telephone"></i>
                    +36 20 969 1417
                </a>
            </li>
        </ul>
    </div>
</footer>

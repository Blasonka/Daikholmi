<!-- Footer -->
<div class="py-3 my-0 text-center bg-body-secondary">
    <ul class="nav justify-content-center border-bottom pb-2 mb-0">
        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-muted">Nyitólap</a></li>
        <li class="nav-item"><a href="{{ route('home') }}#study" class="nav-link px-2 text-muted">Oktatás</a></li>
        <li class="nav-item"><a href="{{ route('student.create') }}" class="nav-link px-2 text-muted">Jelentkezés</a></li>
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
</div>

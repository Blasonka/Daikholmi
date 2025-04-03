@extends('layouts.app')

@section('content')
    <section class="">
        <div class="bg-image"></div>
        <div class="position-relative py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="bg-theme p-5 rounded shadow mt-5">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="bi bi-check"></i>
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-circle-fill"></i>
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <h2 class="display-6 fw-bold text-center mb-4">Regisztráció</h2>
                            @if ($errors->any())
                                <div class="alert alert-warning dy-3">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('students.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label fw-semibold">Diák neve</label>
                                            <input type="text" name="name" id="name"
                                                class="form-control bg-theme" placeholder="Horváth Alex" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="school" class="form-label fw-semibold">Diák jelenlegi
                                                iskolája</label>
                                            <input type="text" name="school" id="school"
                                                class="form-control bg-theme" placeholder="Kölcsey Ferenc Általános Iskola"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="grade" class="form-label fw-semibold">Diák évfolyama</label>
                                            <select name="grade" id="grade" class="form-select bg-theme" required>
                                                <option value="" disabled selected>Válassz évfolyamot</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label fw-semibold">Kapcsolattartó e-mail
                                                címe</label>
                                            <input type="email" name="email" id="email"
                                                class="form-control bg-theme" placeholder="pelda@email.com" autocomplete="email" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label fw-semibold">Kapcsolattartó
                                                telefonszáma</label>
                                            <input type="tel" class="form-control" id="phone" name="phone"
                                                placeholder="+36 30 123 4567"
                                                pattern="^(\+36|06)?\s?\d{1,2}\s?\d{3}\s?\d{4}$"
                                                title="A telefonszámnak a következő formátumok egyikében kell lennie: +36 30 123 4567, 06 30 123 4567 vagy 30 123 4567"
                                                autocomplete="tel" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="address" class="form-label fw-semibold">Számlázási cím</label>
                                            <input type="text" name="address" id="address"
                                                class="form-control bg-theme" placeholder="Számlázási cím" autocomplete="address-level1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-5 mx-auto">
                                        <div class="d-grid">
                                            <button class="btn btn-success" type="submit">Regisztráció</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

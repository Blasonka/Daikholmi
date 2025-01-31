@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="position-relative">
            <div class="position-absolute" style="z-index:-2;"><img alt="" class="img-fluid object-fit-scale"
                    src="/img/library2.jpg"></div>
            <div class="position-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="bg-white p-5 rounded shadow mt-5">
                                <h2 class="display-6 fw-bold text-center mb-4">Jelentkezés</h2>
                                @if ($errors->any())
                                    <div class="alert alert-warning dy-3">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('student.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="name" class="form-label fw-semibold">Diák neve</label>
                                                <input type="text" name="name" id="name"
                                                    class="form-control bg-light" placeholder="Horváth Alex" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="school" class="form-label fw-semibold">Diák jelenlegi
                                                    iskolája</label>
                                                <input type="text" name="school" id="school"
                                                    class="form-control bg-light"
                                                    placeholder="Kölcsey Ferenc Általános Iskola" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="grade" class="form-label fw-semibold">Diák évfolyama</label>
                                                <input type="number" name="grade" id="grade"
                                                    class="form-control bg-light" placeholder="4" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="email" class="form-label fw-semibold">Kapcsolattartó e-mail
                                                    címe</label>
                                                <input type="email" name="email" id="email"
                                                    class="form-control bg-light" placeholder="példa@email.com" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label fw-semibold">Kapcsolattartó
                                                    telefonszáma</label>
                                                <input type="tel" class="form-control" id="phone" name="phone"
                                                    placeholder="+36 30 123 4567" pattern="\+36\s\d{2}\s\d{3}\s\d{4}"
                                                    title="A telefonszámnak a következő formátumban kell lennie: +36 30 123 4567"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="address" class="form-label fw-semibold">Számlázási cím</label>
                                                <input type="text" name="address" id="address"
                                                    class="form-control bg-light" placeholder="Számlázási cím" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="d-grid">
                                                <button class="btn btn-success" type="submit">Jelentkezés</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="position-relative py-5">
            <img alt="" class=" position-absolute img-fluid bg-image" src="img/library2.jpg" style="z-index:-5;">
                <div class="position-absolute bg-image"></div>
                <div class="position-relative">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="bg-white p-5 rounded shadow mt-5">
                                    <h2 class="display-6 fw-bold text-center mb-4">Jelentkezés</h2>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <input class="form-control bg-light" placeholder="Your name"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <input class="form-control bg-light" placeholder="Your email"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <textarea class="form-control bg-light" placeholder="Your message" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary" type="submit">Jelentkezés</button>
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

@extends('layouts.app')

@section('content')
    <section class="py-5 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-3 text-center my-3">Diákok</h1>
                </div>
            </div>

            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Név</th>
                        <th scope="col">Iskola</th>
                        <th scope="col">Osztály</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefonszám</th>
                        <th scope="col">Számlázási cím</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->school }}</td>
                            <td>{{ $student->grade }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->address }}</td>
                            <td><a href="cars/{{ $student->id }}/edit" class="btn btn-warning disabled">✎</a></td>
                            <td> <button type="button" class="btn btn-danger delete" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal" data-bs-id="{{ $student->id }}"
                                    data-bs-studentname="{{ $student->name }}">
                                    🗑️
                                </button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="" method="Post" id="deleteform">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Diák törlése - <span id="studentname"></span>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Biztos törölni szeretné a diák adatait?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Mégsem</button>
                        <button type="submit" class="btn btn-danger disabled">Törlés</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

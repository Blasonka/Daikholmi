@extends('layouts.app')

@section('content')
    <section class="py-5 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-circle-fill"></i>
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <h1 class="display-3 text-center my-3">Diákok</h1>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('student.export') }}" class="btn btn-success">
                            <i class="bi bi-file-earmark-excel"></i> Excel Export
                        </a>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end my-3">
                        <form method="GET" action="{{ route('students.index') }}" class="d-flex">
                            <select name="grade" id="grade" class="form-select me-2">
                                <option value="" selected>Minden évfolyam</option>
                                <option value="3" {{ request('grade') == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ request('grade') == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ request('grade') == '5' ? 'selected' : '' }}>5</option>
                                <option value="6" {{ request('grade') == '6' ? 'selected' : '' }}>6</option>
                                <option value="7" {{ request('grade') == '7' ? 'selected' : '' }}>7</option>
                                <option value="8" {{ request('grade') == '8' ? 'selected' : '' }}>8</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Szűrés</button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Név</th>
                            <th scope="col" class="text-center">Iskola</th>
                            <th scope="col" class="text-center">Osztály</th>
                            <th scope="col" class="text-center">Szülő neve</th>
                            <th scope="col" class="text-center">E-mail</th>
                            <th scope="col" class="text-center">Telefonszám</th>
                            <th scope="col" class="text-center">Számlázási cím</th>
                            <th scope="col" class="text-center">Regisztráció ideje</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($students as $student)
                            <tr>
                                <th scope="row">{{ $student->id }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->school }}</td>
                                <td>{{ $student->grade }}</td>
                                <td>{{ $student->parent_name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->created_at }}</td>
                                <td> <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">
                                        <i class="bi bi-pencil-square"></i></a></td>
                                <td> <button type="button" class="btn btn-danger delete" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal" data-bs-id="{{ $student->id }}"
                                        data-bs-name="{{ $student->name }}"><i class="bi bi-trash3"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <div class="pagination">
                        {{ $students->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="" method="POST" id="deleteform">
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
                        <button type="submit" class="btn btn-danger">Törlés</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        const deleteModal = document.getElementById('deleteModal')
        const deleteForm = document.getElementById('deleteform')
        if (deleteModal) {
            deleteModal.addEventListener('show.bs.modal', event => {
                // Button that triggered the modal
                const button = event.relatedTarget
                // Extract info from data-bs-* attributes
                const id = button.getAttribute('data-bs-id')
                const name = button.getAttribute('data-bs-name')
                // If necessary, you could initiate an Ajax request here
                // and then do the updating in a callback.

                // Update the modal's content.
                const modalTitle = deleteModal.querySelector('#studentname')
                modalTitle.textContent = `${name}`

                deleteForm.action = '{{ route('students.destroy', ':id') }}'.replace(':id', id);
            })
        }
    </script>
@endsection

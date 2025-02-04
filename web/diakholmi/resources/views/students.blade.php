@extends('layouts.app')

@section('content')
    <section class="py-5 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-3 text-center my-3">Diákok</h1>
                    <form action="{{ route('student.export') }}">
                        <button type="button" class="btn btn-primary" actio>Primary</button>
                    </form>
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
                            <th scope="col" class="text-center">E-mail</th>
                            <th scope="col" class="text-center">Telefonszám</th>
                            <th scope="col" class="text-center">Számlázási cím</th>
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
                                <td><a href="students/{{ $student->id }}/edit" class="btn btn-warning disabled"><i
                                            class="bi bi-pencil-square"></i></a></td>
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
                        {{ $students->links('pagination::bootstrap-5') }}
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
                {{-- @method('delete') --}}
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
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
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
                deleteForm.dataset.action = '{{ route('student.delete', ':id') }}'.replace(':id', id);
            })
        }
    </script>
@endsection

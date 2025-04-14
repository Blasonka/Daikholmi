@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4 text-center">Diák adatainak módosítása</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Név</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="school" class="form-label">Iskola</label>
                    <input type="text" class="form-control" id="school" name="school" value="{{ old('school', $student->school) }}" required>
                </div>

                <div class="mb-3">
                    <label for="grade" class="form-label">Osztály</label>
                    <input type="text" class="form-control" id="grade" name="grade" value="{{ old('grade', $student->grade) }}" required>
                </div>

                <div class="mb-3">
                    <label for="parent_name" class="form-label">Kapcsolattartó neve</label>
                    <input type="text" class="form-control" id="parent_name" name="parent_name" value="{{ old('parent_name', $student->parent_name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $student->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Telefonszám</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $student->phone) }}">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Számlázási cím</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $student->address) }}">
                </div>

                <button type="submit" class="btn btn-primary">Mentés</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Mégse</a>
            </form>
        </div>
    </div>
</div>
@endsection

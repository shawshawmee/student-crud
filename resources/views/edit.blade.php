@extends('layout.app')
@section('content')
<div class="p-5">
    <strong>Edit Student</strong>
    <form method="POST" action="{{ route('updatestudent') }}">
        @csrf
            <input class="form-control mb-2" type="text" name="name" value="{{ $student->name }}" required>
            <input class="form-control mb-2" type="text" name="email" value="{{ $student->email }}" required>
            <input class="form-control mb-2" type="number" name="age" value="{{ $student->age }}" required>
            <input type="hidden" name="id" value="{{ $student->id }}">
            <button type="submit" class="btn btn-warning">Save changes</button>
            <span><a href="{{ route('index') }}" class="text-warning text-decoration-underline ms-2">←Go back</a></span>
    </form>
</div>
@endsection
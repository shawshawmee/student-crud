@extends('layout.app')
@section('content')
@if( session('success') )
<div class="alert alert-primary">{{ session('success') }}</div>
@endif
@if( session('delete') )
<div class="alert alert-danger">{{ session('delete') }}</div>
@endif
<form method="POST" action="{{ route('createstudent') }}">
    @csrf
    <div class="row">
        <div class="col-sm-3">
            <input class="form-control mb-2" type="text" name="name" placeholder="Name" required>
        </div>
        <div class="col-sm-3">
            <input class="form-control mb-2" type="text" name="email" placeholder="Email" required>
        </div>
        <div class="col-sm-3">
            <input class="form-control mb-2" type="number" name="age" placeholder="Age" required>
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </div>
</form>
<table class="table table-striped table-dark table-striped table-hover mt-3 border border-2 p-3">
    <thead>
        <tr class="fw-bold text-warning">
            <th class="border border-end">Name of Student</th>
            <th class="border border-end">Email</th>
            <th class="border border-end">Age</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td class="border border-end text-white">{{ $student->name }}</td>
            <td class="border border-end text-white">{{ $student->email }}</td>
            <td class="border border-end text-white">{{ $student->age }}</td>
            <td class="text-center">
                <a href="{{ route('editstudent', $student->id) }}" class="me-2">✍</a>
                <a href="{{ route('deletestudent', $student->id) }}">❌</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

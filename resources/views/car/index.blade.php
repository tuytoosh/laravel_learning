@extends('master')

@section('title', "Cars list")

@section('content')

    <table class="table mt-5">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        </thead>

        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->name }}</td>
                <td>
                    <a href="view/{{ $car->id }}" class="btn btn-sm btn-secondary">View</a>
                    <a href="edit/{{ $car->id }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="delete/{{ $car->id }}" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

@endsection

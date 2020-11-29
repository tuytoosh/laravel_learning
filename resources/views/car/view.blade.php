@extends('master')

@section('title', $car->name)

@section('style')
    <style>
        body {
            color: red;
        }
    </style>
@endsection


@section('content')

    <div class="card mt-5">
        <div class="card-header">{{ $car->name }}</div>
        <div class="card-body">
            {{ $car->description }}
        </div>
        <div class="card-footer">
            Created at: {{ $car->created_at }} | Updated at: {{ $car->updated_at }} |
        </div>
    </div>

@endsection

@section('script')

    <script>
        alert('we are here');
    </script>

@endsection

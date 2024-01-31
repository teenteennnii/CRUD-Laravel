<!-- resources/views/tasks/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Task</h1>

    <form action="{{ route('tasks.store') }}" method="post">
        @csrf

        <label for="title">Task Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Task Description:</label>
        <textarea name="description" id="description" required></textarea>

        <!-- Add other form fields for task attributes as needed -->
        <!-- For example: due_date, etc. -->

        <button type="submit">Create Task</button>
    </form>
@endsection

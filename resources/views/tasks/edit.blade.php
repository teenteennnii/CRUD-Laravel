<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="post">
        @csrf
        @method('PUT') <!-- Use PUT method for updating -->

        <label for="title">Task Title:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>

        <label for="description">Task Description:</label>
        <textarea name="description" id="description" required>{{ $task->description }}</textarea>

        <!-- Add other form fields for additional task details -->

        <button type="submit">Update Task</button>
    </form>

    <a href="{{ route('tasks.show', $task->id) }}">
        <button>Back to Task Details</button>

    <a href="{{ route('tasks.index') }}">
        <button>Back to Task List</button>
    </a>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
</head>
<body>
    <h1>Task Details</h1>

    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <!-- Display other task details as needed -->

    <a href="{{ route('tasks.edit', $task->id) }}">
        <button>Edit Task</button>
    </a>

    <a href="{{ route('tasks.index') }}">
        <button>Back to Task List</button>
    </a>

</body>
</html>

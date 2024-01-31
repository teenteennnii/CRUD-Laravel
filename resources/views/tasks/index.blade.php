<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>
<body>
    <h1>Task List</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th> <!-- Add column for actions -->
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <a href="{{ route('tasks.show', $task->id) }}">View</a>
                        <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('tasks.create') }}">
        <button>Create Task</button>
    </a>

</body>
</html>

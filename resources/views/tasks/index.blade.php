<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>
    <h1>Lista de taskuri</h1>

    @if($tasks->count())
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <strong>{{ $task->title }}</strong><br>
                    {{ $task->description }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No tasks found.</p>
    @endif
</body>
</html>


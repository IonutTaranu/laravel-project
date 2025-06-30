<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>
    <h1>Lista de Taskuri</h1>
    <ul>
        @foreach($tasks as $task)
            <li>
                <strong>{{ $task->title }}</strong><br>
                {{ $task->description }}<br>
                Status: {{ $task->completed ? 'Completat' : 'Incomplet' }}
            </li>
        @endforeach
    </ul>
</body>
</html>

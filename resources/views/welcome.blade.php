<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #f5f7fa;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #4f46e5;
            color: white;
            padding: 2rem;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .cta {
            background-color: white;
            border-radius: 1rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            padding: 2rem;
            max-width: 800px;
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        table th, table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        table th {
            background-color: #f0f0f0;
            color: #555;
        }

        table tr:hover {
            background-color: #f9f9f9;
        }

        footer {
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
            color: #888;
            background-color: transparent;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to your tasks</h1>
    </header>

    <div class="container">
        <div class="cta">
            <a href="{{ route('tasks.create') }}">PLUS</a>
            <h2>Task list</h2>
            <table>
                <tr>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->task_name }}</td>
                        <td>{{ $task->task_status }}</td>
                        <td>{{ \Carbon\Carbon::parse($task->task_due_date)->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <footer>
        Hecho con 💙 usando Laravel
    </footer>
</body>
</html>

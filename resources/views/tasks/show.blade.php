<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fa;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: white;
            padding: 2rem 3rem;
            border-radius: 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            margin-top: 0;
            text-align: center;
            color: #4f46e5;
        }

        .field {
            margin-bottom: 1rem;
        }

        .field label {
            font-weight: 600;
            color: #555;
        }

        .field p {
            margin: 0.5rem 0 0;
            padding: 0.5rem;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 0.5rem;
        }

        a {
            display: inline-block;
            margin-top: 1.5rem;
            text-decoration: none;
            color: white;
            background-color: #4f46e5;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            font-weight: 600;
            text-align: center;
        }

        a:hover {
            background-color: #3730a3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Task Details</h1>
        <div class="field">
            <label>Task Name:</label>
            <p>{{ $task->task_name }}</p>
        </div>
        <div class="field">
            <label>Task Description:</label>
            <p>{{ $task->task_description }}</p>
        </div>
        <div class="field">
            <label>Task Status:</label>
            <p>{{ $task->task_status }}</p>
        </div>
        <div class="field">
            <label>Due Date:</label>
            <p>{{ $task->task_due_date }}</p>
        </div>
        <div class="field">
            <label>Created At:</label>
            <p>{{ $task->created_at }}</p>
        </div>
        <div class="field">
            <label>Updated At:</label>
            <p>{{ $task->updated_at }}</p>
        </div>
        <a href="{{ route('tasks.index') }}">Back to Tasks</a>
    </div>
</body>
</html>
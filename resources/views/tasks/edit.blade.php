<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
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

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ccc;
            border-radius: 0.5rem;
            font-size: 1rem;
            font-family: inherit;
        }

        textarea {
            resize: vertical;
        }

        button {
            width: 100%;
            background-color: #4f46e5;
            color: white;
            border: none;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: 600;
        }

        button:hover {
            background-color: #3730a3;
        }

        footer {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Task</h1>
        <form action="{{ route('tasks.update', $task->id_task) }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="task_name">Task Name</label>
                <input type="text" name="task_name" id="task_name" value="{{ $task->task_name }}" required>
            </div>
            <div class="form-group">
                <label for="task_description">Task Description</label>
                <textarea name="task_description" id="task_description" rows="4">{{ $task->task_description }}</textarea>
            </div>
            <div class="form-group">
                <label for="task_due_date">Due Date</label>
                <input type="date" name="task_due_date" id="task_due_date" value="{{ $task->task_due_date }}">
            </div>
            <div class="form-group">
                <label for="task_status">Status</label>
                <select name="task_status" id="task_status" required>
                    <option value="1" {{ $task->task_status == '1' ? 'selected' : '' }} >Created</option>
                    <option value="2" {{ $task->task_status == '2' ? 'selected' : '' }} >In Progress</option>
                    <option value="3" {{ $task->task_status == '3' ? 'selected' : '' }} >Finished</option>
                </select>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
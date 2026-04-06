<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-pink-50 font-sans min-h-screen">

<div class="max-w-xl mx-auto mt-10 px-4">

    <h1 class="text-pink-600 text-3xl font-bold text-center mb-6">
        📋 Task Details
    </h1>

    <div class="bg-white shadow-xl rounded-2xl p-6">

        <p class="mb-3"><strong>ID:</strong> {{ $task->id }}</p>
        <p class="mb-3"><strong>Title:</strong> {{ $task->title }}</p>
        <p class="mb-3"><strong>Description:</strong> {{ $task->description }}</p>

        <p class="mb-3">
            <strong>Status:</strong>
            @if($task->is_completed)
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">✔ Completed</span>
            @else
                <span class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-xs">Pending</span>
            @endif
        </p>

        <div class="flex justify-end mt-4">
            <a href="{{ route('tasks.index') }}" 
               class="bg-pink-500 text-white px-5 py-2 rounded-full">
               Back
            </a>
        </div>

    </div>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-pink-50 font-sans min-h-screen">

<div class="max-w-5xl mx-auto mt-10 px-4">

    <!-- Page Heading -->
    <h1 class="text-pink-600 text-4xl font-bold text-center mb-8">
        💗 Task List 💗
    </h1>

    <!-- Create Task Button -->
    <div class="flex justify-end mb-6">
        <a href="{{ route('tasks.create') }}" 
           class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-2 rounded-full font-semibold shadow-md transition duration-200">
           + Create Task
        </a>
    </div>

    <!-- Task Table Card -->
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

        <table class="w-full text-sm">
            <thead class="bg-pink-200 text-pink-800">
                <tr>
                    <th class="p-4 text-left">ID</th>
                    <th class="p-4 text-left">Title</th>
                    <th class="p-4 text-left">Description</th>
                    <th class="p-4 text-left">Status</th>
                    <th class="p-4 text-left">Action</th>
                </tr>
            </thead>

            <tbody>
            @foreach($tasks as $task)
                <tr class="border-t hover:bg-pink-50 transition duration-200">
                    <td class="p-4">{{ $task->id }}</td>
                    <td class="p-4 font-semibold text-pink-500">{{ $task->title }}</td>
                    <td class="p-4 text-gray-600">{{ $task->description }}</td>
                    <td class="p-4">
                        @if($task->is_completed)
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                ✔ Completed
                            </span>
                        @else
                            <span class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-xs font-semibold">
                                Pending
                            </span>
                        @endif
                    </td>
                    <td class="p-4 space-x-1">
                        <a href="{{ route('tasks.show',$task->id) }}" 
                           class="bg-pink-100 hover:bg-pink-200 text-pink-700 px-3 py-1 rounded-md text-xs font-medium transition duration-200">
                           View
                        </a>

                        <a href="{{ route('tasks.edit',$task->id) }}" 
                           class="bg-pink-400 hover:bg-pink-500 text-white px-3 py-1 rounded-md text-xs font-medium transition duration-200">
                           Edit
                        </a>

                        <form action="{{ route('tasks.destroy',$task->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-400 hover:bg-red-500 text-white px-3 py-1 rounded-md text-xs font-medium transition duration-200">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>

</body>
</html>
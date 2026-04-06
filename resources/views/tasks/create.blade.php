<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-pink-50 font-sans min-h-screen">

<div class="max-w-xl mx-auto mt-10 px-4">

    <h1 class="text-pink-600 text-3xl font-bold text-center mb-6">
        📝 Create Task
    </h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="bg-white shadow-xl rounded-2xl p-6">
        @csrf

        <div class="mb-4">
            <label class="block mb-2 font-semibold text-gray-700">Title</label>
            <input type="text" name="title" 
                class="w-full p-3 border rounded-md focus:ring-2 focus:ring-pink-300">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold text-gray-700">Description</label>
            <textarea name="description"
                class="w-full p-3 border rounded-md focus:ring-2 focus:ring-pink-300"></textarea>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('tasks.index') }}" 
               class="bg-gray-300 px-4 py-2 rounded-full">Back</a>

            <button class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-2 rounded-full">
                Save
            </button>
        </div>
    </form>

</div>

</body>
</html>
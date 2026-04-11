<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50 font-serif flex items-center justify-center min-h-screen">

<div class="bg-white shadow-2xl rounded-3xl p-10 text-center max-w-md w-full">

    <h1 class="text-4xl font-bold text-pink-600 mb-4">
        💗 Welcome! 💗
    </h1>

    <p class="text-gray-600 mb-6">
        Start organizing your tasks and make your day more productive🌷
    </p>

    <!-- BUTTON GO TO TASKS -->
    <a href="{{ route('tasks.index') }}"
       class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-full shadow-md transition font-semibold">
        Go to Task List
    </a>

</div>

</body>
</html>
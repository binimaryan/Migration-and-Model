<!DOCTYPE html>
<html>
<head>
<title>Tasks</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-pink-50 font-serif">

<div class="max-w-5xl mx-auto mt-10 px-4">

<h1 class="text-pink-600 text-4xl font-bold text-center mb-6">
💗 Task List 💗
</h1>

<div class="flex justify-end mb-4">
<a href="{{ route('tasks.create') }}" 
   class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-2 rounded-full font-semibold shadow-md transition">
   + Create Task
</a>
</div>

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
<tr class="border-t hover:bg-pink-50 transition">

<td class="p-4">{{ $task->id }}</td>

<td class="p-4 font-semibold text-pink-500">
{{ $task->title }}
</td>

<td class="p-4 text-gray-600">
{{ $task->description }}
</td>

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
class="bg-pink-100 hover:bg-pink-200 text-pink-700 px-3 py-1 rounded-md text-xs font-medium transition">
View
</a>

<a href="{{ route('tasks.edit',$task->id) }}" 
class="bg-pink-400 hover:bg-pink-500 text-white px-3 py-1 rounded-md text-xs font-medium transition">
Edit
</a>

<form action="{{ route('tasks.destroy',$task->id) }}" 
method="POST" class="inline">
@csrf
@method('DELETE')

<button class="bg-red-400 hover:bg-red-500 text-white px-3 py-1 rounded-md text-xs font-medium transition">
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
<h1>{{ $task->title }}</h1>

<p>{{ $task->description }}</p>

<p>
Status:
{{ $task->is_completed ? 'Completed' : 'Not Completed' }}
</p>

<a href="{{ route('tasks.index') }}">Back</a>